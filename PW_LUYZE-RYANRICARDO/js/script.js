var banners = [
  "img/campus_banner1.jpg",
  "img/campus_banner2.jpg",
  "img/campus_banner3.jpg",
  "img/campus_banner4.jpg",
  "img/campus_banner5.jpg",
  "img/campus_banner6.jpeg",
];
var currentBanner = 0;

function switchBanner() {
  currentBanner = (currentBanner + 1) % 6;
  document.querySelector(".campus-img img").src = banners[currentBanner];
}

var timer = setInterval(switchBanner, 1000);
