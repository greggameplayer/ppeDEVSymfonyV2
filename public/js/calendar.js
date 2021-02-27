document.addEventListener('DOMContentLoaded', () => {
    var calendarEl = document.getElementById('calendar-holder');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        defaultView: 'timeGridWeek',
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
        locale: 'fr',
        editable: true,
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
                    filters: JSON.stringify({})
                },
                failure: () => {
                    // alert("There was an error while fetching FullCalendar!");
                },
            },
        ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay',
        },
        plugins: [ 'interaction', 'dayGrid', 'timeGrid' ], // https://fullcalendar.io/docs/plugin-index
        timeZone: 'Europe/Paris',
    });
    calendar.render();
});