//Picture to be changed more than once
var pic = document.getElementById("picGiraffe");

//Hide the text at the beginning
$('#txtGreyGir').css({'display' : 'none'});

//func making it smaller
function makeItSmaller() {
    pic.style.width = '10%';
    pic.style.height = '10%';
}

//func making it larger
function makeItLarger() {
    pic.style.width = '150%';
    pic.style.height = '150%';
}

//btnSmaller resize picture and make it smaller 
//Done in JavaScript
var btnSmall = document.getElementById("btnSmaller");
btnSmall.addEventListener("click", makeItSmaller);

//btnLarger resize picture and make it huger
//Done with JS & jQuery
$('#btnLarger').on('click', makeItLarger);


//Start playing the music
function playMusic() {
    var music = new Audio("TimeWarp.wav");
    music.play();
}

//change the picture on hovering
pic.addEventListener("mouseover", doChanges);


function doChanges() {
    //... and make the text visible!
    $('#txtGreyGir').css({'display' : 'inline'});
    changeGrey();
}

//Change the picture to black and white
function changeGrey() {
    pic.style.WebkitFilter="grayscale(100%)"; 
}

//change the picture back to color
function changeBack() {
     pic.style.WebkitFilter="grayscale(0%)"; 
}

//Change the content of the text
function alterText() {
    $('#txtGreyGir').text('Great! It is full of colors again!');
}

//When clicking on the picture, start the music, change the color and change the text
function timeWarpClick() {
    playMusic();
    changeBack();
    alterText();
}

//include sound to picture
pic.addEventListener("click", timeWarpClick);

