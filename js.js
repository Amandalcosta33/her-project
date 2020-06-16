var myVar;

function Loaderfirst() {
  myVar = setTimeout(showPage, 5000);
}

function showPage() {
  document.getElementById("heartbeatloader").style.display = "none";
  document.getElementById("mainindex").style.display = "block";
}



