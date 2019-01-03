// Select element with Id hamburger-cream and run mobinu function when someone click on this element (in this case span).
// And mobinu function say 'if menu is hiden and someone click, open it but if is open, hide it'
// https://www.w3schools.com/jsref/event_onclick.asp

document.getElementById("hamburger-cream").addEventListener("click", mobinu);

function mobinu() {
  var x = document.getElementById("mobinu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

document.getElementById("ShoSid").addEventListener("click", sidiBer);

function sidiBer() {
  var x = document.getElementById("sidiBer");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
