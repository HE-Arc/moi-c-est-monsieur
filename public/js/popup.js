// Get the modal
var modal = document.getElementById("myModal");
var modalVictory = document.getElementById("modalVictory");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanVictory = document.getElementsByClassName("closeVictory")[0];

// When the user clicks the button, open the modal 
function openPopup() {
  modal.style.display = "block";
}

function openPopupVictory() {
  modalVictory.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  location.reload();
}

spanVictory.onclick = function() {
  modalVictory.style.display = "none";
  location.reload();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal || event.target == modalVictory) {
    modal.style.display = "none";
    modalVictory.style.display = "none";
    location.reload();
  }
}
