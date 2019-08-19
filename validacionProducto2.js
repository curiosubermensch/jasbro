function validarTodo()
{
 return validarNombre() && validarPrecio();
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
        span.innerHTML = "El nombre del producto no puede superar los 15 caracteres";
        span.className = "fail";
        return false;
     }
 }
 else
 {
     span.innerHTML = "Escriba el nombre del producto";
     span.className = "fail";
     return false;
 }
}

function validarPrecio()
{
    var precio = document.getElementById("txt_Precio");
    var span = document.getElementById("mensaje_precio");

    if(precio.value.length>0){
    
    if(isNaN(precio.value))
    {
        span.innerHTML = "Ingrese un valor numérico";
        span.className = "fail";
        return false;
    }
    else if(precio.value %1 == 0 ) 
    {
        return true;
    }
    else
    {
        span.innerHTML = "Ingrese un número entero";
        span.className = "fail";
        return false; 
    }
}
else
{
    span.innerHTML = "ingrese un número"
    span.className = "fail";
    return false;
}
}