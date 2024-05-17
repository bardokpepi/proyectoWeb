function registro(){
    document.getElementById("inicio").style.display='none';
    document.getElementById("final").style.display="block";
}

function registro2(){
    document.getElementById("inicio").style.display='block';
    document.getElementById("final").style.display="none";
}
function validar(){
    var user= document.getElementById("registro1").value;
    
}
function validarFormulario() {
    var user= document.getElementById("registro1").value;
    if(user.length>5){
        var correo = document.getElementById("registro2").value;
        var formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(formatoCorreo.test(correo)){
            var password= document.getElementById("registro3").value;
            if(password.length>5){
                return true
            }else{
                alert("contraseña muy corta")
                return false;
            }
        }else{
            alert("formato de correo incorrecto");
            return false;
        }
    }else{
        alert("el usario es muy corto");
        return false;
    }
    
  }

  

  function cerrar(){
    window.location.href = "http://localhost/proyecto/php/cerrar.php";
  }
  
  function cerrar(){
    window.location.href = "http://localhost/proyecto/php/cerrar.php";
  }

  function Allogin(){
    window.location.href = "http://localhost/proyecto/login.php";
  }
  
  function aCasa(){
    window.location.href = "http://localhost/proyecto/index.php";
  }

  function noticias_mundiales(){
    window.location.href = "http://localhost/proyecto/noticias_mundiales.php";
  }