(function() {

  var formulario = document.formulario_registro,
    elementos = formulario.elements;

  // Funcion que se ejecuta cuando el evento click es activado

  var validarInputs = function() {
    for (var i = 0; i < elementos.length; i++) {
      // Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
      if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password"|| elementos[i].type == "number") {
        // Si es tipo texto, email o password vamos a comprobar que esten completados los input
        if (elementos[i].value.length == 0) {
          console.log('El campo ' + elementos[i].name + ' esta incompleto' + i);
          elementos[i].className = elementos[i].className + " error";
          return false;
        } else {
          elementos[i].className = elementos[i].className.replace(" error", "");
        }
      }
    }

    // Comprobando que las contraseñas coincidan
    if (elementos.pass.value !== elementos.pass2.value) {
      elementos.pass.value = "";
      elementos.pass2.value = "";
      elementos.pass.className = elementos.pass.className + " error";
      elementos.pass2.className = elementos.pass2.className + " error";
      alert('Las password no coinciden');
      return false;
    } else {
      elementos.pass.className = elementos.pass.className.replace(" error", "");
      elementos.pass2.className = elementos.pass2.className.replace(" error", "");
        return true;
    }

  
  };


  var enviar = function(e) {
    if (!validarInputs()) {
      console.log('Falto validar los Input');
      e.preventDefault();
    } else {
      
 
    }

    
 
  };

  var focusInput = function() {
    this.parentElement.children[1].className = "label active";
    this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
  };

  var blurInput = function() {
    if (this.value <= 0) {
      this.parentElement.children[1].className = "label";
      this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
    }
  };
  //--para solo letras--
  function sololetras(e){
    key=e.keyCode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    letras="qwertyuiopasdfghjklñzxcvbnm";
    especiales="8-37-38-46-164";
    teclado_especial=false;
    for(var i in especiales){
      if(key==especiales[i]){
        teclado_especial=true;
        break;
      }
    }
    if(letras.indexOf(teclado)==-1 && !teclado_especial){
      return false;
    }

  }

  // --- Eventos ---
  formulario.addEventListener("submit", enviar);


  for (var i = 0; i < elementos.length; i++) {
    if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password"|| elementos[i].type == "number") {
      elementos[i].addEventListener("focus", focusInput);
      elementos[i].addEventListener("blur", blurInput);
    }
  }

}())

function Redireccionar(){
	window.location="FormRegis.php";

}
