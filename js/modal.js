
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//pega o botao de aceitar
var btnRedirect = document.getElementById("btn-redirect");
//pega o texto de aceitar
var accept = document.getElementById("accept");
//pega o texto de carregamento
var load = document.getElementById("load");

btnRedirect.onclick = function(){
  load.style.display = "inline-block"; 
  accept.style.display = "none"; 
  const redirectTimeOut = setTimeout(redirect, 1500);  
}




function redirect() {
  /* window.location.href = "http://localhost/tela_caixa_decimo/acesso.php"; */
  window.location.href = "http://localhost/step-1";
}
