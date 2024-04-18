import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import timeGridPlugin from '@fullcalendar/timegrid';


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        selectable: true,
        editable: true,
        events: '/api/events',
        dateClick: function(info) {
            var title = prompt('Event Title:');
            if (title) {
                var eventData = {
                    title: title,
                    start: info.dateStr,
                    end: info.dateStr
                };
                calendar.addEvent(eventData);
                axios.post('/api/events', eventData);
            }
        },
        eventClick: function(info) {
            if (confirm("Are you sure you want to delete this event?")) {
                info.event.remove();
                axios.delete(`/api/events/${info.event.id}`);
            }
        },
        eventChange: function(info) {
            axios.put(`/api/events/${info.event.id}`, {
                title: info.event.title,
                start: info.event.start,
                end: info.event.end
            });
        }
    });
    calendar.render();
});
