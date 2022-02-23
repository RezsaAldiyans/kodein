document.addEventListener('DOMContentLoaded', function() {
    // initial date
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    var calendarEl = document.getElementById('calender');

    var calendar = new FullCalendar.Calendar(calendarEl, {

    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listDay,listWeek'
    },
      // customize the button names,
      // otherwise they'd all just say "list"
    views: {
        dayGridMonth: { buttonText: 'Month' },
        listDay: { buttonText: 'Day' },
        listWeek: { buttonText: 'Week' },
    },

    initialView: 'dayGridMonth',
    initialDate: today,
    navLinks: true,
    // editable: true,
    // dayMaxEvents: true,
    events: [ //semua event calendar dari data
        {
            title: 'Menyelesaikan tugas dasar',
            start: '2021-05-17T00:00:00',
            end: '2021-05-17T01:00:00'
        },
        {
            title: 'Menyelesaikan tugas menengah',
            start: '2021-05-18T14:00:00',
            end: '2021-05-18T01:00:00',
        },
        {
            title: 'Menyelesaikan tugas menengah',
            groupId: 'testGroupId',
            start: '2021-05-19T10:00:00',
            end: '2021-05-05T16:00:00',
            // display: 'inverse-background'
        }
    ]
    });

    calendar.render();
  });