function CalendarApp(date) {
  if (!(date instanceof Date)) {
      date = new Date();
  }

  this.days = ['Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'];
  this.months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'];


  this.aptDates = [new Date(2016, 4, 30).toString(), new Date(2016, 4, 1).toString()];
  this.eles = {};
  this.calDaySelected = null;

  this.calendar = document.getElementById("calendar-app");
  this.calendarView = document.getElementById("dates");
  this.calendarMonthDiv = document.getElementById("calendar-month");
  this.calendarMonthLastDiv = document.getElementById("calendar-month-last");
  this.calendarMonthNextDiv = document.getElementById("calendar-month-next");

  this.dayInspirationalQuote = document.getElementById("inspirational-quote");
  this.todayIsSpan = document.getElementById("footer-date");
  this.dayViewEle = document.getElementById("day-view");
  this.dayViewExitEle = document.getElementById("day-view-exit");
  this.dayViewDateEle = document.getElementById("day-view-date");
  this.addDayEventEle = document.getElementById("add-event");
  this.dayEventsEle = document.getElementById("day-events");

  this.dayEventAddForm = {
      cancelBtn: document.getElementById("add-event-cancel"),
      addBtn: document.getElementById("add-event-save"),
      nameEvent: document.getElementById("input-add-event-name"),
      startTime: document.getElementById("input-add-event-start-time"),
      endTime: document.getElementById("input-add-event-end-time"),
      startAMPM: document.getElementById("input-add-event-start-ampm"),
      endAMPM: document.getElementById("input-add-event-end-ampm")
  };

  this.dayEventsList = document.getElementById("day-events-list");
  this.dayEventBoxEle = document.getElementById("add-day-event-box");

  this.apts = []; // Initialize the array to store appointments
  this.fetchEventsFromDatabase(); // Fetch events from the database

  /* Start the app */
  this.showView(date);
  this.addEventListeners();
  this.todayIsSpan.textContent = "Today is " + this.months[date.getMonth()] + " " + date.getDate();
}

CalendarApp.prototype.addEventListeners = function () {
  this.calendar.addEventListener("click", this.mainCalendarClickClose.bind(this));
  this.todayIsSpan.addEventListener("click", this.showView.bind(this));
  this.calendarMonthLastDiv.addEventListener("click", this.showNewMonth.bind(this));
  this.calendarMonthNextDiv.addEventListener("click", this.showNewMonth.bind(this));
  this.dayViewExitEle.addEventListener("click", this.closeDayWindow.bind(this));
  this.dayViewDateEle.addEventListener("click", this.showNewMonth.bind(this));
  this.addDayEventEle.addEventListener("click", this.addNewEventBox.bind(this));
  this.dayEventAddForm.cancelBtn.addEventListener("click", this.closeNewEventBox.bind(this));
  this.dayEventAddForm.cancelBtn.addEventListener("keyup", this.closeNewEventBox.bind(this));

  this.dayEventAddForm.startTime.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.startAMPM.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.endTime.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.endAMPM.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.addBtn.addEventListener("click", this.saveAddNewEvent.bind(this));
};

// Function to fetch events from the database
CalendarApp.prototype.fetchEventsFromDatabase = function () {
  fetch('path/to/your/api') // Replace with the actual path to your API
      .then(response => response.json())
      .then(data => {
          this.apts = data; // Assuming the API returns an array of events
          data.forEach(event => {
              const eventDate = new Date(event.date).toString();
              if (!this.aptDates.includes(eventDate)) {
                  this.aptDates.push(eventDate);
              }
          });
      })
      .catch(error => console.error('Error fetching events:', error));
};

CalendarApp.prototype.showView = function (date) {
  if (!date || (!(date instanceof Date))) date = new Date();
  var now = new Date(date),
      y = now.getFullYear(),
      m = now.getMonth();
  var today = new Date();

  var lastDayOfM = new Date(y, m + 1, 0).getDate();
  var startingD = new Date(y, m, 1).getDay();
  var lastM = new Date(y, now.getMonth() - 1, 1);
  var nextM = new Date(y, now.getMonth() + 1, 1);

  this.calendarMonthDiv.classList.remove("cview__month-activate");
  this.calendarMonthDiv.classList.add("cview__month-reset");

  while (this.calendarView.firstChild) {
      this.calendarView.removeChild(this.calendarView.firstChild);
  }

  // Build up spacers
  for (var x = 0; x < startingD; x++) {
      var spacer = document.createElement("div");
      spacer.className = "cview--spacer";
      this.calendarView.appendChild(spacer);
  }

  for (var z = 1; z <= lastDayOfM; z++) {
      var _date = new Date(y, m, z);
      var day = document.createElement("div");
      day.className = "cview--date";
      day.textContent = z;
      day.setAttribute("data-date", _date);
      day.onclick = this.showDay.bind(this);

      // Check if today's date
      if (z == today.getDate() && y == today.getFullYear() && m == today.getMonth()) {
          day.classList.add("today");
      }

      // Check if has events to show
      if (this.aptDates.indexOf(_date.toString()) !== -1) {
          day.classList.add("has-events");
      }

      this.calendarView.appendChild(day);
  }

  var _that = this;
  setTimeout(function () {
      _that.calendarMonthDiv.classList.add("cview__month-activate");
  }, 50);

  this.calendarMonthDiv.textContent = this.months[now.getMonth()] + " " + now.getFullYear();
  this.calendarMonthDiv.setAttribute("data-date", now);

  this.calendarMonthLastDiv.textContent = "← " + this.months[lastM.getMonth()];
  this.calendarMonthLastDiv.setAttribute("data-date", lastM);

  this.calendarMonthNextDiv.textContent = this.months[nextM.getMonth()] + " →";
  this.calendarMonthNextDiv.setAttribute("data-date", nextM);
};

CalendarApp.prototype.showDay = function (e, dayEle) {
  e.stopPropagation();
  if (!dayEle) {
      dayEle = e.currentTarget;
  }
  var dayDate = new Date(dayEle.getAttribute('data-date'));

  this.calDaySelected = dayEle;

  this.openDayWindow(dayDate);
};

CalendarApp.prototype.openDayWindow = function (date) {
  var now = new Date();
  var day = new Date(date);
  this.dayViewDateEle.textContent = this.days[day.getDay()] + ", " + this.months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
  this.dayViewDateEle.setAttribute('data-date', day);
  this.dayViewEle.classList.add("calendar--day-view-active");

  /* Contextual lang changes based on tense. Also show btn for scheduling future events */
  var _dayTopbarText = '';
  if (day < new Date(now.getFullYear(), now.getMonth(), now.getDate())) {
      _dayTopbarText = "had ";
      this.addDayEventEle.style.display = "none";
  } else {
      _dayTopbarText = "have ";
      this.addDayEventEle.style.display = "inline";
  }
  this.addDayEventEle.setAttribute("data-date", day);

  var eventsToday = this.showEventsByDay(day);
  if (!eventsToday) {
      _dayTopbarText += "no ";
      var _rand = Math.round(Math.random() * ((this.quotes.length - 1) - 0) + 0);
      this.dayInspirationalQuote.textContent = this.quotes[_rand];
  } else {
      _dayTopbarText += eventsToday.length + " ";
      this.dayInspirationalQuote.textContent = '';
  }

  this.dayEventsEle.textContent = _dayTopbarText + " event(s) scheduled";
};

CalendarApp.prototype.showEventsByDay = function (day) {
  var eventsToday = this.apts.filter(event => new Date(event.date).toDateString() === day.toDateString());
  this.dayEventsList.innerHTML = ""; // Clear existing events
  eventsToday.forEach(event => {
      const eventLi = document.createElement("li");
      eventLi.textContent = event.title; // Customize as per your event structure
      this.dayEventsList.appendChild(eventLi);
  });
  return eventsToday;
};

CalendarApp.prototype.closeDayWindow = function () {
    this.dayViewEle.classList.remove("active");
  };
  

CalendarApp.prototype.addNewEventBox = function () {
  this.dayEventBoxEle.classList.add("add-day-event-box-visible");
};

CalendarApp.prototype.closeNewEventBox = function () {
  this.dayEventBoxEle.classList.remove("add-day-event-box-visible");
};

CalendarApp.prototype.saveAddNewEvent = function () {
  // Gather input values
  const title = this.dayEventAddForm.nameEvent.value;
  const startTime = this.dayEventAddForm.startTime.value + " " + this.dayEventAddForm.startAMPM.value;
  const endTime = this.dayEventAddForm.endTime.value + " " + this.dayEventAddForm.endAMPM.value;

  // Create an event object (you can expand this as needed)
  const newEvent = {
      title: title,
      startTime: startTime,
      endTime: endTime,
      date: this.calDaySelected.getAttribute('data-date')
  };

  // Send the new event to the database (you'll need to implement the API call)
  fetch('path/to/your/api', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify(newEvent),
  })
  .then(response => response.json())
  .then(data => {
      // Optionally update the events list
      this.fetchEventsFromDatabase();
      this.closeNewEventBox();
  })
  .catch((error) => {
      console.error('Error saving event:', error);
  });
};

// Initialize the calendar
var calendarApp = new CalendarApp();
