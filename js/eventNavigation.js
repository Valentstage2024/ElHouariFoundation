function updateEvent() {
    const title = document.getElementById('event-title');
    const description = document.getElementById('event-description');
    const date = document.getElementById('event-date');
    const status = document.getElementById('event-status');

    if (events.length === 0) {
        title.innerText = "Geen evenementen gevonden";
        description.innerText = "";
        date.innerText = "";
        status.innerText = "";
        return;
    }

    const event = events[currentIndex];
    const eventDate = new Date(event['date']);
    const today = new Date();

    today.setHours(0, 0, 0, 0);
    eventDate.setHours(0, 0, 0, 0);

    title.innerText = event['title'];
    description.innerText = event['description'];
    date.innerText = new Date(event['date']).toLocaleDateString();

    console.log("Event Date: " + eventDate);
    console.log("Today: " + today);

    if (eventDate < today) {
        status.innerText = 'Dit evenement is al gebeurd.';
        status.style.color = 'red';
        status.style.fontWeight = 'bold';
    } else if (eventDate > today) {
        status.innerText = 'Dit evenement moet nog gebeuren.';
        status.style.color = 'green';
        status.style.fontWeight = 'bold';
    } else {
        status.innerText = 'Dit evenement is vandaag.';
        status.style.color = 'blue';
        status.style.fontWeight = 'bold';
    }
}

function previousEvent() {
    if (currentIndex > 0) {
        currentIndex--;
        updateEvent();
    }
}

function nextEvent() {
    if (currentIndex < events.length - 1) {
        currentIndex++;
        updateEvent();
    }
}

window.onload = function () {
    updateEvent();
};
