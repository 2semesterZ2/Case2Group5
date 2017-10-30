//picture of a man, we make variable to use it multiple times - to make it smaller and bigger
var pic = document.getElementById("pictureguy");

//smallbutton to resize the picture and make it smaller

//function making it smaller
function makeItSmaller () {
	pic.style.width = "10%";
	pic.style.height = "10%";
}
function makeItLarger () {
	pic.style.width = "150%";
	pic.style.height = "150%";
}
function playMusic () {
	var playMusic = new Audio("song.wav");
	playMusic.play();
}
//variables can be incldued in the functions

var smallbutton = document.getElementById("smallbutton");
smallbutton.addEventListener("click", makeItSmaller);
//smallbutton.onclick = makeItSmaller();

var largebutton = document.getElementById("largebutton");
largebutton.addEventListener("click", makeItLarger);


pic.addEventListener("click", playMusic);

//to detect that somebody clicked on it

//largebutton to resize the picture and make it larger
