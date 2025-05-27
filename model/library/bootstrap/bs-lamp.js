function lamp() {
    let delay = 250;
    delay *= 2; {
        setTimeout(() => {
            document.getElementById("lamp1").classList.toggle("running1");
        }, 500);
        setTimeout(() => {
            document.getElementById("lamp1").classList.toggle("stop1");
        }, 700);

        setTimeout(() => {
            document.getElementById("lamp2").classList.toggle("running2");
        }, 700);
        setTimeout(() => {
            document.getElementById("lamp2").classList.toggle("stop2");
        }, 900);

        setTimeout(() => {
            document.getElementById("lamp3").classList.toggle("running3");
        }, 900);
        setTimeout(() => {
            document.getElementById("lamp3").classList.toggle("stop3");
        }, 1100);
        
        setTimeout(lamp, delay);
    }
}