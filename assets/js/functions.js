// Verifica se as senhas são iguais para Diarista
var password_diarista = document.getElementById("password_diarista"), confirm_password_diarista = document.getElementById("confirm_password_diarista");

function validatePasswordDiarista(){
    if(password_diarista.value != confirm_password_diarista.value) {
        confirm_password_diarista.setCustomValidity("As senhas não correspondem");
    } else {
        confirm_password_diarista.setCustomValidity('');
    }
}


password_diarista.onchange = validatePasswordVisitante;
confirm_password_diarista.onkeyup = validatePasswordVisitante;



// Verifica se as senhas são iguais para Visitantes
var password_visitante = document.getElementById("password_visitante"), confirm_password_visitante = document.getElementById("confirm_password_visitante");

function validatePasswordVisitante(){
    if(password_visitante.value != confirm_password_visitante.value) {
      confirm_password_visitante.setCustomValidity("As senhas não correspondem");
    } else {
      confirm_password_visitante.setCustomValidity('');
    }
  }

password_visitante.onchange = validatePasswordVisitante;
confirm_password_visitante.onkeyup = validatePasswordVisitante;

