document.addEventListener('DOMContentLoaded', function() {
    const days = document.querySelectorAll('.calendar-day'); // Zorg dat je dagen een class "calendar-day" hebben
    days.forEach(day => {
        day.addEventListener('click', function() {
            const selectedDate = this.getAttribute('data-date'); // Haal de datum van de aangeklikte dag op
            fetchEventForDate(selectedDate);
        });
    });
});

function fetchEventForDate(date) {
    // AJAX-verzoek naar PHP om het evenement op te halen
    fetch(`getEvent.php?date=${date}`)
        .then(response => response.json())
        .then(data => {
            // Check of er een evenement is gevonden
            if (data.success) {
                document.getElementById('day-view-date').innerText = date;
                document.getElementById('day-events-list').innerHTML = `
                    <h3>${data.event.title}</h3>
                    <p>${data.event.description}</p>
                    <p>${data.event.date}</p>
                `;
            } else {
                document.getElementById('day-view-date').innerText = date;
                document.getElementById('day-events-list').innerHTML = '<p>Geen evenement gepland op deze dag.</p>';
            }
        })
        .catch(error => console.error('Error fetching event:', error));
}
