import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import locales from '@fullcalendar/core/locales-all';
import './styles/secretary.css';

let calendar, currentEvent;

document.addEventListener('DOMContentLoaded', () => {
    var calendarEl = document.getElementById('calendar-holder');

    $("#doctorSelector" ).on('change', function () {
        calendar.removeAllEventSources();
        calendar.addEventSource({
            url: "/fc-load-events",
            method: "POST",
            extraParams: {
                filters: JSON.stringify({ "calendar-id": "secretary-calendar", "doctor": $("#doctorSelector option:selected" ).val() })
            },
            failure: () => {
                // alert("There was an error while fetching FullCalendar!");
            }
        })
    })

    calendar = new Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        allDaySlot: false,
        selectable: false,
        eventDurationEditable: false,
        forceEventDuration: true,
        slotDuration: '00:30:00',
        defaultTimedEventDuration: '00:30:00',
        selectOverlap (event) {
            return event.rendering === 'background' || event.display === 'background'
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
                    filters: JSON.stringify({ "calendar-id": "secretary-calendar", "doctor": $("#doctorSelector option:selected" ).val() })
                },
                failure: () => {
                    // alert("There was an error while fetching FullCalendar!");
                }
            },
        ],
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'timeGridWeek,timeGridDay',
        },
        plugins: [ timeGridPlugin, dayGridPlugin, interactionPlugin ], // https://fullcalendar.io/docs/plugin-index
        eventContent: function(arg) {
            let divEl = document.createElement('div')
            divEl.style.display = 'flex';
            divEl.style.flexDirection = 'column';
            divEl.style.height = '100%';
            let htmlTitle = arg.event._def.extendedProps['html'];
            if (arg.event.extendedProps.isHTML) {
                divEl.innerHTML = `<span>${arg.timeText}</span>`
                divEl.innerHTML += `<span>${arg.event.title}</span>`
                divEl.innerHTML += `<span>Status : ${arg.event.extendedProps.eventStatus}</span>`
                divEl.innerHTML += htmlTitle

                if (divEl.children[3] !== undefined) {
                    if (divEl.children[3].children[0].classList.contains('validate')) {
                        divEl.children[3].children[0].addEventListener('click', () => {changeStatus(2)});
                    } else if (divEl.children[3].children[0].classList.contains('delete')) {
                        divEl.children[3].children[0].addEventListener('click', () => {changeStatus(6)});
                    } else if (divEl.children[3].children[0].classList.contains('realized')) {
                        divEl.children[3].children[0].addEventListener('click', () => {changeStatus(5)});
                    }

                    if (divEl.children[3].children[1] !== undefined && divEl.children[3].children[1].classList.contains('refuse')) {
                        divEl.children[3].children[1].addEventListener('click', () => {changeStatus(4)});
                    } else if (divEl.children[3].children[1] !== undefined && divEl.children[3].children[1].classList.contains('notRealized')) {
                        divEl.children[3].children[1].addEventListener('click', () => {changeStatus(6)});
                    }
                }
            } else {
                divEl.innerHTML = arg.event.title
            }
            let arrayOfDomNodes = [ divEl ]

            return { domNodes: arrayOfDomNodes }
        },
        eventMinHeight: 100,
        eventMouseEnter: function (info) {
            currentEvent = info.event
        },
        eventMouseLeave: function (info) {
            currentEvent = undefined
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
            console.log(response.data)
            setTimeout(() => {
                calendar.refetchEvents()
            }, 200);
        })
        .catch((error) => {
            console.log(error);
        });
}

function changeStatus (status) {
    const date = moment(currentEvent.start).utcOffset('+0000').format('YYYY-MM-DD HH:mm:ss')
    axios.patch('/secretary/event', {date: date, status: status})
        .then((response) => {
            calendar.refetchEvents()
        })
        .catch((error) => {
            console.log(error);
        });
}
