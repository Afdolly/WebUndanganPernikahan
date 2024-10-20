var countDownDateR = new Date("Oct 26, 2024 21:00:00").getTime();

var xR = setInterval(function() {

  var nowR = new Date().getTime();

  var distanceR = countDownDateR - nowR;

  var days = Math.floor(distanceR / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distanceR % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distanceR % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distanceR % (1000 * 60)) / 1000);

  document.getElementById("daysR").innerHTML = days + "d";
  document.getElementById("hoursR").innerHTML = hours + "h";
  document.getElementById("minutesR").innerHTML = minutes + "m";
  document.getElementById("secondsR").innerHTML = seconds + "s";

  if (distanceR < 0) {
    clearInterval(xR);
    document.getElementById("daysR").innerHTML = "0d";
    document.getElementById("hoursR").innerHTML = "0h";
    document.getElementById("minutesR").innerHTML = "0m";
    document.getElementById("secondsR").innerHTML = "0s";
  }
}, 1000);