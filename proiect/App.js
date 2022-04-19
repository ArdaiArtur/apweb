const popup=document.querySelector('.pop-up'); //afiseaza/ascunde popup task
console.log(popup); //optiune de verificare de existenta a variabilei/constantei
//poate sa ramana setat ca null daca <script src="App.js"> </script> nu este pus ca ultima linie in body
//sau inainte de elementele care folosesc cod din App.js
function TogglePopup(){
popup.classList.toggle('hidden');
}

var password = document.getElementById("Parola").value;
  var confirm_password = document.getElementById("confirm_parola").value;

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
ConfirmPassword.onkeyup = validatePassword;