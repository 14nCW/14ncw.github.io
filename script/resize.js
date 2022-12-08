setInterval(runFunction, 1000);

    function runFunction() {
      if (screen.width <= 800 && screen.width < screen.height) {
        document.location = "../m.index.html";
      }
    }