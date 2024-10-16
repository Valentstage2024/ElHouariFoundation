document.addEventListener('DOMContentLoaded', function () {
    // Gebedstijden ophalen uit de HTML
    const prayerTimes = {
        Fajr: document.querySelector('.footer-prayer-times p:nth-child(1)').innerText.split(' ')[1],
        Dhuhr: document.querySelector('.footer-prayer-times p:nth-child(2)').innerText.split(' ')[1],
        Asr: document.querySelector('.footer-prayer-times p:nth-child(3)').innerText.split(' ')[1],
        Maghrib: document.querySelector('.footer-prayer-times p:nth-child(4)').innerText.split(' ')[1],
        Isha: document.querySelector('.footer-prayer-times p:nth-child(5)').innerText.split(' ')[1]
    };

    // Functie om de volgende gebedstijd te berekenen
    function getNextPrayer() {
        const now = new Date();
        let nextPrayer = null;
        let nextPrayerTime = null;

        for (const prayer in prayerTimes) {
            const prayerTime = new Date(`${now.toDateString()} ${prayerTimes[prayer]}`);
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
            nextPrayerTime = new Date(`${tomorrow.toDateString()} ${prayerTimes.Fajr}`);
            nextPrayer = 'Fajr';
        }

        return { nextPrayer, nextPrayerTime };
    }

    // Countdown functie
    function updateCountdown() {
        const { nextPrayerTime } = getNextPrayer();
        const now = new Date();
        const timeDiff = nextPrayerTime - now;

        if (timeDiff <= 0) {
            document.getElementById('countdown').innerText = '00:00:00';
            return;
        }

        const hours = Math.floor(timeDiff / (1000 * 60 * 60));
        const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

        document.getElementById('countdown').innerText = 
            `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }

    setInterval(updateCountdown, 1000); // Update elke seconde
    updateCountdown(); // Initiele update
});
