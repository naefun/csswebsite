function zoneInfo(zone) {
    var x = document.getElementById(zone);

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function eventInfo(event) {
    var e = document.getElementById(event);

    if (e.style.display === "none") {
        e.style.display = "block";
    } else {
        e.style.display = "none";
    }
}