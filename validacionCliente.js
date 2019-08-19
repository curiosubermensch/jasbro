//JavaScript Document
function validarTodo()
{
 return validarRut() && validarNombre() && validarApellido() && validarDireccion();
}

function validarRut()
{
    var rut = document.getElementById("txtRut");
    var span = document.getElementById("mensaje_rut");

    if(rut.value.length>0)
    {
       if (rut.value.length<=10)
       {
           return true;
       }
       else
       {
           span.innerHTML = "El rut no puede superar los 10 caracteres";
           span.className = "fail";
           return false; 
       }
    }
    else
    {
        span.innerHTML = "Ingrese un rut";
        return false;
    }
}

function validarNombre()
{
 var nombre = document.getElementById("txtNombre");
 var span = document.getElementById("mensaje_nombre");
 if (nombre.value.length> 0)
 {
     if(nombre.value.length<=15)
     {
       return true;
     }
     else
     {
        span.innerHTML = "El nombre no puede superar los 15 caracteres";
        span.className = "fail";
        return false;
     }
 }
 else
 {
     span.innerHTML = "Escriba el nombre del cliente";
     span.className = "fail";
     return false;
 }
}

function validarApellido()
{
    var apellido = document.getElementById("txtApellido");
    var span = document.getElementById("mensaje_apellido");

    if(apellido.value.length>0)
    {
        if(apellido.value.length<=15)
        {
            return true;
        }
        else
        {
            span.innerHTML = "El apellido no puede superar los 15 caracteres";
            span.className = "fail";
            return false;
        }
    }
    else
    {
        span.innerHTML = "Escriba su apellido";
        span.className = "fail";
        return false;
    }
}

function validarDireccion()
{
    var direccion = document.getElementById("txtDireccion");
    var span = document.getElementById("mensaje_direccion");

    if(direccion.value.length>0)
    {
      if(direccion.value.length<=30)
      {
          return true;
      }
      else
      {
          span.innerHTML = "Su dirección excede los 30 caracteres permitidos";
          span.className = "fail";
          return false;
      }
    }
    else
    {
        span.innerHTML = "ingrese su dirección";
        span.className = "fail";
        return false;
    }
}
