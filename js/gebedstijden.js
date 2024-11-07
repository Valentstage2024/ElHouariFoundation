document.addEventListener('DOMContentLoaded', function () {
    let prayerTimes = {};

    // Fetch prayer times based on hardcoded latitude and longitude
    function fetchPrayerTimes(lat, lon) {
        const today = new Date().toISOString().split('T')[0]; // YYYY-MM-DD format
        const apiUrl = `https://api.aladhan.com/v1/timings/${today}?latitude=${lat}&longitude=${lon}&method=2`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Store prayer times
                prayerTimes = {
                    Fajr: data.data.timings.Fajr,
                    Dhuhr: data.data.timings.Dhuhr,
                    Asr: data.data.timings.Asr,
                    Maghrib: data.data.timings.Maghrib,
                    Isha: data.data.timings.Isha
                };

                // Update prayer times in the HTML
                document.getElementById('fajr-time').innerText = prayerTimes.Fajr;
                document.getElementById('dhuhr-time').innerText = prayerTimes.Dhuhr;
                document.getElementById('asr-time').innerText = prayerTimes.Asr;
                document.getElementById('maghrib-time').innerText = prayerTimes.Maghrib;
                document.getElementById('isha-time').innerText = prayerTimes.Isha;

                // Start countdown and update it every second
                updateCountdown();
                setInterval(updateCountdown, 1000); // Update countdown every second
            })
            .catch(error => console.error('Error fetching prayer times:', error));
    }

    // Call fetchPrayerTimes with hardcoded coordinates (for example, for Mecca)
    const latitude = 21.4225;
    const longitude = 39.8262;
    fetchPrayerTimes(latitude, longitude);

    // Calculate the next prayer time
    function getNextPrayer() {
        const now = new Date();
        let nextPrayer = null;
        let nextPrayerTime = null;

        for (const prayer in prayerTimes) {
            const [hours, minutes] = prayerTimes[prayer].split(':').map(Number);
            const prayerTime = new Date(now);
            prayerTime.setHours(hours, minutes, 0, 0);

            if (prayerTime > now) {
                nextPrayer = prayer;
                nextPrayerTime = prayerTime;
                break;
            }
        }

        if (!nextPrayer) {
            // If no more prayers today, start with Fajr tomorrow
            const tomorrow = new Date(now);
            tomorrow.setDate(tomorrow.getDate() + 1);
            const [hours, minutes] = prayerTimes.Fajr.split(':').map(Number);
            nextPrayerTime = new Date(tomorrow);
            nextPrayerTime.setHours(hours, minutes, 0, 0);
            nextPrayer = 'Fajr';
        }

        return { nextPrayer, nextPrayerTime };
    }

    // Update countdown timer
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
});
