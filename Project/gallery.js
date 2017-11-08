//Only jpegs are uploaded
var jpgcontainer = document.getElementById('jpg');

var files = {
  'jpg': 30
};

//Go trough each existing picture
for (var jpgext in files) {
  for (var i = 0; i < files[jpgext]; i++) {
    var jpgsrc = "./Photos/" + (i + 1) + "." + jpgext;
    var jpgimg = new Image();
    jpgimg.src = jpgsrc;
    jpgcontainer.appendChild(jpgimg);
  }
}

        

        
        
        