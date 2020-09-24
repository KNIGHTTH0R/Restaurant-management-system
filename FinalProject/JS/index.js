
var d = new Date();
document.getElementById("demo").innerHTML = d;

function myFunction() {
    var x, text;


    x = document.getElementById("numb").value;


    if (isNaN(x) || x < 1 || x > 5) {
        text = "Input not valid";

    } else if (x == 1) {


        text = "Worst!thank you <p>&#128542;</p>";

    } else if (x == 2) {


        text = " Bad! thank you<p>&#128543;</p>";


    } else if (x == 3) {


        text = "Average!thank you<p>&#128512;</p>";

    } else if (x == 4) {


        text = "Good!Thank you<p>&#128516;</p>";

    } else {
        text = "Excellent! Thank you <p>&#128525;</p>";
    }
    document.getElementById("dm").innerHTML = text;
}


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.5)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "#535453";
}

