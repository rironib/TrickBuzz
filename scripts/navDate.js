function updateClock() {
  const now = new Date();
  const day = now.getDate().toString().padStart(2, "0");
  const monthNames = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  const month = monthNames[now.getMonth()];
  const year = now.getFullYear();
  const hours = (now.getHours() % 12 || 12).toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");
  const seconds = now.getSeconds().toString().padStart(2, "0");
  const ampm = now.getHours() >= 12 ? "PM" : "AM";

  const timeString = `<i class="ri-calendar-line"></i> ${day} ${month} ${year}<i class="ri-hourglass-line"></i> ${hours}:${minutes}:${seconds} ${ampm}`;
  document.getElementById("currentDateTime").innerHTML = timeString;
}

// Update the clock every second
setInterval(updateClock, 1000);

// Call updateClock immediately to display the initial time
updateClock();
