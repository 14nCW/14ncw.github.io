setInterval(runFunction, 100);

    function runFunction() {
      let proj = document.getElementById("projekty")
let dropdown = document.getElementById("dropdown")

dropdown.style.width = proj.clientWidth + "px"
    }