import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import locales from '@fullcalendar/core/locales-all';
import './styles/patient.css';

let calendar, currentEvent;

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
            right: '',
        },
        plugins: [ interactionPlugin, dayGridPlugin, timeGridPlugin ], // https://fullcalendar.io/docs/plugin-index
        dateClick: periodClick,
        eventContent: function(arg) {
            let divEl = document.createElement('div')
            let arrayOfDomNodes = []
            if (arg.event.display !== 'background') {
                let trashDiv = document.createElement('div')
                trashDiv.style.height = '100%';
                trashDiv.style.width = '40%';
                trashDiv.style.justifyContent = 'flex-end';
                trashDiv.style.alignItems = 'center';
                trashDiv.style.display = 'flex';
                trashDiv.innerHTML = "<i class='fas fa-2x fa-trash trash mr-1'></i>";
                trashDiv.addEventListener("click", onTrashClick);
                arrayOfDomNodes = [divEl, trashDiv];
            } else {
                arrayOfDomNodes = [divEl];
            }
            divEl.style.display = 'flex';
            divEl.style.flexDirection = 'column';
            let htmlTitle = arg.event._def.extendedProps['html'];
            if (arg.event.extendedProps.isHTML) {
                divEl.innerHTML = `<span>${arg.timeText}</span>`
                divEl.innerHTML += `<span>${arg.event.title}</span>`
                divEl.innerHTML += `<span>Status : ${arg.event.extendedProps.status}</span>`
            } else {
                divEl.innerHTML = arg.event.title
            }


            return { domNodes: arrayOfDomNodes }
        },
        eventMouseEnter: function (info) {
            currentEvent = info
        },
        eventMouseLeave: function (info) {
            currentEvent = undefined
        }
    });
    calendar.render();
});

function periodClick (info) {
    console.log(info);
    const date = moment(info.date).format('YYYY-MM-DD HH:mm:ss')
    if (info.jsEvent.target.classList.contains('fc-bg-event') || info.jsEvent.target.classList.contains('fc-non-business') || info.jsEvent.target.innerHTML === 'Indisponible') {
        return
    }

    $.redirectPost('/patient/event', {date: date});
}

function isBackgroundEvent (e) {
    let elementMouseIsOver = document.elementFromPoint(e.clientX, e.clientY);

    return (elementMouseIsOver.style.backgroundColor === 'rgb(217, 83, 79)');
}

function onTrashClick () {
    const date = moment(currentEvent.event.start).utcOffset('+0000').format('YYYY-MM-DD HH:mm:ss')

    axios.patch('/patient/event', {date: date})
        .then((response) => {
            calendar.refetchEvents()
        })
        .catch((error) => {
            console.log(error);
        });
}
