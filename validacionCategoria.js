function validarTodo()
{
 return validarNombre() && validarDescripcion() && validarCategoria();
}



function validarNombre()
{
 var nombre = document.getElementById("txtNombre");
 var nombre2 = document.getElementById("txtNombre2");
 var span = document.getElementById("mensaje_nombre");
 var span2 = document.getElementById("mensaje_nombre_mostrar");

 if (nombre.value.length> 0)
 {
     if(nombre.value.length<=15)
     {
       return true;
     }
     else
     {
        span.innerHTML = "La categoría no puede superar los 15 caracteres";
        span.className = "fail";
        
        return false;
     }
 }
 else
 {
     span.innerHTML = "Escriba el nombre de la categoría";
     span.className = "fail";
     
     return false;
 }

 if (nombre2.value.length> 0)
 {
     if(nombre2.value.length<=15)
     {
       return true;
     }
     else
     {
        
        span2.innerHTML = "La categoría no puede superar los 15 caracteres";
        span2.className = "fail";
        return false;
     }
 }
 else
 {
     
     span2.innerHTML = "Escriba el nombre de la categoría";
     span2.className = "fail";
     return false;
 }


}

function validarDescripcion()
{
    var descripcion = document.getElementById("txtDescripcion");
     var descripcion2 = document.getElementById("txtDescripcion2");
    var span = document.getElementById("mensaje_descripcion");
     var span2 = document.getElementById("mensaje_descripcion_mostrar");

    if(descripcion.value.length>0)
    {
       if (descripcion.value.length<=20) 
       {
           return true;
       }
       else
       {
           span.innerHTML = "La descripción no puede superar los 10 caracteres";
           span.className = "fail";
           
           return false;

       }
    }
    else
    {
        span.innerHTML = "ingrese la descripción de la categoría";
        span.className = "fail";
        
        return false;
    }

    if(descripcion2.value.length>0 )
    {
       if (descripcion2.value.length<=20) 
       {
           return true;
       }
       else
       {
          
           span2.innerHTML = "La descripción no puede superar los 10 caracteres";
           span2.className = "fail";
           return false;

       }
    }
    else
    {
        
        span2.innerHTML = "ingrese la descripción de la categoría";
        span2.className = "fail";
        return false;
    }



}


function validarCategoria()
{
    var categoria = document.getElementById("txtCategoria");
    var span = document.getElementById("mensaje_categoria_mostrar");

    if(categoria.value.length>0)
    {
       if (categoria.value.length<=5) 
       {
           return true;
       }
       else
       {
           span.innerHTML = "El id de la categoria no puede ser mayor a 5 digitos";
           span.className = "fail";
           
           return false;

       }
    }
    else
    {
        span.innerHTML = "El codigo de la categoria no puede quedar vacio";
        span.className = "fail";
        
        return false;
    }

   

}

