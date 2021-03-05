import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import locales from '@fullcalendar/core/locales-all';

let calendar;

$.extend({
    redirectPost: function(location, args)
    {
        var form = '';
        $.each( args, function( key, value ) {
            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
        });
        $('<form action="'+location+'" method="POST">'+form+'</form>').appendTo('body').submit();
    }
});

document.addEventListener('DOMContentLoaded', () => {
    var calendarEl = document.getElementById('calendar-holder');

    calendar = new Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        allDaySlot: false,
        selectable: false,
        eventDurationEditable: false,
        forceEventDuration: true,
        slotDuration: '00:30:00',
        defaultTimedEventDuration: '00:30:00',
        selectOverlap (event) {
            return event.display === 'background'
        },
        height: 'auto',
        locales: locales,
        locale: 'fr',
        editable: false,
        slotMinTime: '09:00:00',
        slotMaxTime: '18:00:00',
        businessHours: {
            startTime: '09:00', // a start time (10am in this example)
            endTime: '18:00', // an end time (6pm in this example)
            daysOfWeek: [1, 2, 3, 4, 5]
            // days of week. an array of zero-based day of week integers (0=Sunday)
            // (Monday-Thursday in this example)
        },
        hiddenDays: [0],
        eventSources: [
            {
                url: "/fc-load-events",
                method: "POST",
                extraParams: {
                    filters: JSON.stringify({ "calendar-id": "patient-calendar" })
                },
                failure: () => {
                    // alert("There was an error while fetching FullCalendar!");
                },
            },
        ],
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay',
        },
        plugins: [ interactionPlugin, dayGridPlugin, timeGridPlugin ], // https://fullcalendar.io/docs/plugin-index
        dateClick: periodClick,
        eventClick: onEventClick,
        eventMouseEnter: function (info) {
            if (info.event.display !== 'background') {
                $(info.el.children[0].children[0]).append("<i class='fas fa-trash float-right mr-1 mt-1' style='color: red'></i>")
            }
        },
        eventMouseLeave: function (info) {
            if (info.event.display !== 'background') {
                $(info.el.children[0].children[0].lastChild).remove()
            }
        }
    });
    calendar.render();
});

function periodClick (info) {
    const date = moment(info.date).format('YYYY-MM-DD HH:mm:ss')
    if (isBackgroundEvent(info.jsEvent)) {
        return
    }

    $.redirectPost('/patient/event', {date: date});
}

function isBackgroundEvent (e) {
    let elementMouseIsOver = document.elementFromPoint(e.clientX, e.clientY);

    return (elementMouseIsOver.style.backgroundColor === 'rgb(217, 83, 79)');
}

function onEventClick (info) {
    if (isBackgroundEvent(info.jsEvent)) {
        return
    }

    const date = moment(info.event.start).utcOffset('+0000').format('YYYY-MM-DD HH:mm:ss')

    axios.patch('/patient/event', {date: date})
        .then((response) => {
            calendar.refetchEvents()
        })
        .catch((error) => {
            console.log(error);
        });
}
