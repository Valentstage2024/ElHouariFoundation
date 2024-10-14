document.addEventListener('DOMContentLoaded', function () {
    // Gebedstijden ophalen uit de HTML
    const prayerTimes = {
        Fajr: document.getElementById('fajr-time').innerText,
        Dhuhr: document.getElementById('dhuhr-time').innerText,
        Asr: document.getElementById('asr-time').innerText,
        Maghrib: document.getElementById('maghrib-time').innerText,
        Isha: document.getElementById('isha-time').innerText
    };

    // Functie om de volgende gebedstijd te berekenen
    function getNextPrayer() {
        const now = new Date();
        let nextPrayer = null;
        let nextPrayerTime = null;

        for (const prayer in prayerTimes) {
            const prayerTime = new Date(now.toDateString() + ' ' + prayerTimes[prayer]);
            if (prayerTime > now) {
                nextPrayer = prayer;
                nextPrayerTime = prayerTime;
                break;
            }
        }

        if (!nextPrayer) {
            // Als er geen volgende gebed is, ga naar de eerste op de volgende dag
            const tomorrow = new Date(now);
            tomorrow.setDate(tomorrow.getDate() + 1);
            nextPrayerTime = new Date(tomorrow.toDateString() + ' ' + prayerTimes.Fajr);
            nextPrayer = 'Fajr';
        }

        return { nextPrayer, nextPrayerTime };
    }

    // Countdown functie
    function updateCountdown() {
        const { nextPrayer, nextPrayerTime } = getNextPrayer();
        const now = new Date();
        const timeDiff = nextPrayerTime - now;

        if (timeDiff > 0) {
            const hours = Math.floor((timeDiff / 1000 / 60 / 60) % 24);
            const minutes = Math.floor((timeDiff / 1000 / 60) % 60);
            const seconds = Math.floor((timeDiff / 1000) % 60);

            document.getElementById('countdown').innerText = 
                `${hours}u ${minutes}m ${seconds}s`;
        } else {
            document.getElementById('countdown').innerText = 'Gebedstijd!';
        }
    }

    // Countdown bijwerken elke seconde
    setInterval(updateCountdown, 1000);
});
