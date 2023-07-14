function countDown(thedate = "Jan 5, 2024 15:37:25"){
    // Set the date we're counting down to
    var countDownDate = new Date(thedate).getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        // Display the result in the element with id="demo"
        $(".counter .days:first-child  p:first-child span").text(days);
        $(".counter .days:nth-child(2) p:first-child span").text(hours);
        $(".counter .days:nth-child(3) p:first-child span").text(minutes);
        $(".counter .days:nth-child(4) p:first-child span").text(seconds);
        // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        //     + minutes + "m " + seconds + "s ";
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
}
countDown();
