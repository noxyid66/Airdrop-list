function load() {
    setTimeout(() => {
        document.getElementById("container").style.display = "block";
    }, 1200);
    let delay = 500;
    delay *= 2; {
        setTimeout(() => {
            document.getElementById("rotasi1").classList.toggle("atas");
        }, 100);
        setTimeout(() => {
            document.getElementById("rotasi1").classList.toggle("bawah");
        }, 1100);
        setTimeout(() => {
            document.getElementById("rotasi2").classList.toggle("atas");
        }, 100);
        setTimeout(() => {
            document.getElementById("rotasi2").classList.toggle("bawah");
        }, 1100);
        setTimeout(() => {
            document.getElementById("rotasi3").classList.toggle("kiri");
        }, 100);
        setTimeout(() => {
            document.getElementById("rotasi3").classList.toggle("kanan");
        }, 1100);
        setTimeout(() => {
            document.getElementById("rotasi4").classList.toggle("kiri");
        }, 100);
        setTimeout(() => {
            document.getElementById("rotasi4").classList.toggle("kanan");
        }, 1100);
        setTimeout(() => {
            document.getElementById("rotasi5").classList.toggle("kiriatas");
        }, 400);
        setTimeout(() => {
            document.getElementById("rotasi5").classList.toggle("kananbawah");
        }, 1400);
        setTimeout(() => {
            document.getElementById("rotasi6").classList.toggle("kiriatas");
        }, 400);
        setTimeout(() => {
            document.getElementById("rotasi6").classList.toggle("kananbawah");
        }, 1400);
        setTimeout(() => {
            document.getElementById("rotasi7").classList.toggle("kiribawah");
        }, 800);
        setTimeout(() => {
            document.getElementById("rotasi7").classList.toggle("kananatas");
        }, 1800);
        setTimeout(() => {
            document.getElementById("rotasi8").classList.toggle("kiribawah");
        }, 800);
        setTimeout(() => {
            document.getElementById("rotasi8").classList.toggle("kananatas");
        }, 1800);
        setTimeout(load, delay);
    }
    setTimeout(() => {
        window.location.href = "public/index.php";
    }, 8600);
}