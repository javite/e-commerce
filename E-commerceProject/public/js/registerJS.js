window.addEventListener("load", function(){

var campoUsuario = document.querySelector('input[name=usuario]')

if(!campoUsuario.value == ''){
  campoUsuario.style.backgroundColor= '#66FFCC';
}

campoUsuario.addEventListener('focus', function(){
    campoUsuario.style.backgroundColor= '#FFF59D';
});

campoUsuario.addEventListener('blur', function(){
if(!campoUsuario.value == ''){
  campoUsuario.style.backgroundColor= '#66FFCC';
}
  else {
    campoUsuario.style.backgroundColor= 'white';
  }

});

var campoEmail = document.querySelector('input[name=email]')
if(!campoEmail.value == ''){
  campoEmail.style.backgroundColor= '#66FFCC';
}

campoEmail.addEventListener('focus', function(){
    campoEmail.style.backgroundColor= '#FFF59D';
});

campoEmail.addEventListener('blur', function(){
if(!campoEmail.value == ''){
  campoEmail.style.backgroundColor= '#66FFCC';
}
  else {
    campoEmail.style.backgroundColor= 'white';
  }

});

var campoPassword = document.querySelector('input[name=password]')
if(!campoPassword.value == ''){
  campoPassword.style.backgroundColor= '#66FFCC';
}

campoPassword.addEventListener('focus', function(){
    campoPassword.style.backgroundColor= '#FFF59D';
});

campoPassword.addEventListener('blur', function(){
if(!campoPassword.value == ''){
  campoPassword.style.backgroundColor= '#66FFCC';
}
  else {
    campoPassword.style.backgroundColor= 'white';
  }
});

var campoConfirmPassword = document.querySelector('input[name=password_confirmation]')
if(!campoConfirmPassword.value == ''){
  campoConfirmPassword.style.backgroundColor= '#66FFCC';
}

campoConfirmPassword.addEventListener('focus', function(){
    campoConfirmPassword.style.backgroundColor= '#FFF59D';
});

campoConfirmPassword.addEventListener('blur', function(){
if(!campoConfirmPassword.value == ''){
  campoConfirmPassword.style.backgroundColor= '#66FFCC';
}
  else {
    campoConfirmPassword.style.backgroundColor= 'white';
  }
});
domicilio
var campoDomicilio = document.querySelector('input[name=domicilio]')
if(!campoDomicilio.value == ''){
  campoDomicilio.style.backgroundColor= '#66FFCC';
}

campoDomicilio.addEventListener('focus', function(){
    campoDomicilio.style.backgroundColor= '#FFF59D';
});

campoDomicilio.addEventListener('blur', function(){
if(!campoDomicilio.value == ''){
  campoDomicilio.style.backgroundColor= '#66FFCC';
}
  else {
    campoDomicilio.style.backgroundColor= 'white';
  }
});


});
