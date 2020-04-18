// Set the date we're counting down to
var countDownDate = new Date("Oct 29, 2016 8:30:00").getTime();
// Update the count down every 1 second
var x = setInterval(function () {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("days").innerHTML = days;

    document.getElementById("hours").innerHTML = hours;

    document.getElementById("minutes").innerHTML = minutes;

    document.getElementById("seconds").innerHTML = seconds;

    document.getElementById("days2").innerHTML = days;

    document.getElementById("hours2").innerHTML = hours;

    document.getElementById("minutes2").innerHTML = minutes;

    document.getElementById("seconds2").innerHTML = seconds;

    // If the count down is over, write some text
    if (distance < 0) {
        window.location = "index2.html";
    }
}, 1000);