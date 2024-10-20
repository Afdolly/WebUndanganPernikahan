var countDownDate = new Date("Oct 26, 2024 15:30:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("daysA").innerHTML = days + "d";
  document.getElementById("hoursA").innerHTML = hours + "h";
  document.getElementById("minutesA").innerHTML = minutes + "m";
  document.getElementById("secondsA").innerHTML = seconds + "s";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("daysA").innerHTML = "0d";
    document.getElementById("hoursA").innerHTML = "0h";
    document.getElementById("minutesA").innerHTML = "0m";
    document.getElementById("secondsA").innerHTML = "0s";
  }
}, 1000);