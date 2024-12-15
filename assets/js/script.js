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

  //banner homepage slider
  let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
  const slider = document.querySelector('.slider');
  slider.style.transform = `translateX(-${index * 100}%)`;

  // Menampilkan headline untuk slide yang aktif
  const headlines = document.querySelectorAll('.headline-text');
  headlines.forEach((headline, i) => {
    headline.style.display = (i === index) ? 'block' : 'none';
  });
}

document.querySelector('.next').addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % totalSlides; // Jika sudah di slide terakhir, kembali ke awal
  showSlide(currentIndex);
});

document.querySelector('.prev').addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Jika sudah di slide pertama, kembali ke slide terakhir
  showSlide(currentIndex);
});

// Menampilkan slide pertama ketika halaman pertama dimuat
showSlide(currentIndex);



