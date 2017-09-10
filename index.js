function progressBar(elem, finalWidth) {
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= finalWidth) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
}

progressBar(document.getElementById('myBar'), 50);
progressBar(document.getElementById('myBar1'), 75);