var dark = {
  color1:'#A3BE8C',
  color2:'#d08770',
  color3:'#8fa1b3',
  bg:'#26353f',
};

var light = {
  type:'#5E6E50',
  color2:'#7E5446',
  color3:'#5A646E',
  bg:'#DAE2EB',
};

function change(theme) {
  if (theme == 1) {
    var current = dark;
  } else if (theme == 2) {
    var current = light;
  }

  document.getElementById('body').style.backgroundColor = current.bg;
}
