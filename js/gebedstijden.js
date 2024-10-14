var prayerTimes = {
    Fajr: "06:00",
    Dhuhr: "13:32",
    Asr: "16:19",
    Maghrib: "18:59",
    Isha: "20:44"
};


function getNextPrayerTime() {
    var currentTime = new Date();
    var prayerOrder = ["Fajr", "Dhuhr", "Asr", "Maghrib", "Isha"];
    var nextPrayer = null;

    for (var i = 0; i < prayerOrder.length; i++) {
        var prayer = prayerOrder[i];
        var prayerTime = new Date();
        var timeParts = prayerTimes[prayer].split(":");
        prayerTime.setHours(timeParts[0], timeParts[1], 0); // Uren, minuten, seconden

        if (prayerTime > currentTime) {
            nextPrayer = prayerTime;
            break;
        }
    }

    // Als de laatste gebedstijd van de dag al voorbij is, terug naar Fajr van morgen
    if (!nextPrayer) {
        nextPrayer = new Date();
        nextPrayer.setDate(currentTime.getDate() + 1); // Voeg een dag toe
        var timeParts = prayerTimes["Fajr"].split(":");
        nextPrayer.setHours(timeParts[0], timeParts[1], 0);
    }

    return nextPrayer;
}

function updateTimeUntilPrayer(prayerName, prayerTime) {
    var now = new Date();
    var prayerTimeObj = new Date();
    var timeParts = prayerTime.split(":");
    prayerTimeObj.setHours(timeParts[0], timeParts[1], 0);

    var timeDiff = prayerTimeObj - now; // Verschil in milliseconden
    if (timeDiff > 0) {
        var hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
        document.getElementById(prayerName.toLowerCase() + "-time").innerHTML = "(" + hours + "u " + minutes + "m)";
    } else {
        document.getElementById(prayerName.toLowerCase() + "-time").innerHTML = "(Voorbij)";
    }
}

function updateAllPrayerTimes() {
    updateTimeUntilPrayer("Fajr", prayerTimes.Fajr);       
    updateTimeUntilPrayer("Dhuhr", prayerTimes.Dhuhr);
    updateTimeUntilPrayer("Asr", prayerTimes.Asr);
    updateTimeUntilPrayer("Maghrib", prayerTimes.Maghrib);
    updateTimeUntilPrayer("Isha", prayerTimes.Isha);
}

function updateCountdown() {
    var now = new Date();
    var nextPrayerTime = getNextPrayerTime();
    var timeDiff = nextPrayerTime - now; // Verschil in milliseconden

    var hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = hours + "u " + minutes + "m " + seconds + "s ";

    if (timeDiff < 0) {
        // Countdown is voorbij, update om naar de volgende gebedstijd af te tellen
        getNextPrayerTime();
    }
}

// Update de countdown en de gebedstijden elke seconde
setInterval(updateCountdown, 1000);
setInterval(updateAllPrayerTimes, 60000); // Elke minuut update de tijden voor elk gebed
updateCountdown();
updateAllPrayerTimes();