const countdown = () => {
    const targetDate = new Date("December 31, 2024 23:59:59").getTime(); // Set target date
    const now = new Date().getTime();
    const difference = targetDate - now;
  
    if (difference < 0) {
      document.querySelector('.timer').innerHTML = '<h3>Event has started!</h3>';
      return;
    }
  
    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);
  
    document.getElementById("days").innerText = String(days).padStart(2, "0");
    document.getElementById("hours").innerText = String(hours).padStart(2, "0");
    document.getElementById("minutes").innerText = String(minutes).padStart(2, "0");
    document.getElementById("seconds").innerText = String(seconds).padStart(2, "0");
  };
  
  setInterval(countdown, 1000); // Update every second
  