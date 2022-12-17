function hide() {
    setTimeout(
        () => {
            document.getElementById("al").hidden = true;
            document.getElementById("al").style.display = "none";
    },250
      );

    document.getElementById("al").style.opacity = "0%";
}

function fuckoff() {
    document.getElementById("al_box").style.display = "none";
    document.getElementById("al_box").hidden = true;
    document.getElementById("al").innerHTML = "ПОДРАСТИ, СЫНОК";
    

    setTimeout(
        () => {window.location = 'https://natribu.org/ru/. html';},2 * 1000
      );
}

function show_info() {
  if (window.innerWidth <= 990) {
    var info = document.getElementById("info");
    info.style.display =  "flex";
  }
}