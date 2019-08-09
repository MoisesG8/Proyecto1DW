/*function btn_guardar_datos()
{
    var nombre, segundo, apellidos, dpi, edad, email, telefono;
    nombre=document.getElementById("nombre").value;
    segundo=document.getElementById("segundo").value;
    apellidos=document.getElementById("apellidos").value;
    dpi=document.getElementById("dpi").value;
    edad=document.getElementById("edad").value;
    email=document.getElementById("email").value;
    telefono=document.getElementById("telefono").value;;

   alert(nombre+" - "+segundo+" - "+apellidos+" - "+dpi+" - "+edad+" - "+email+" - "+telefono);
    var ob = {nombre:nombre, segundo:segundo, apellidos:apellidos, dpi:dpi, edad:edad, email:email, telefono:telefono}
    $.ajax({
        type: "POST",
        url:'php/Personas.php',
        data: ob,
        beforeSend: function(ob) {

        },
        success: function(data)
        {
            $("#panel_respuesta").html(data);
        }
    });
}*/
var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');
formulario.addEventListener('submit',function(e) {
    e.preventDefault();
    console.log('me diste un click')
    var datos= new FormData(formulario)
    console.log(datos)
    console.log(datos.get('nombre'))
    console.log(datos.get('segundo'))
    console.log(datos.get('apellidos'))
    console.log(datos.get('dpi'))
    console.log(datos.get('edad'))
    console.log(datos.get('email'))
    console.log(datos.get('telefono'))
    fetch('php/Personas.php',{
        method: 'POST',
        body: datos
    })
        .then(res=>res.json())
        .then(data=>{
            console.log(data)
            if (data==='error'){
                respuesta.innerHTML=`
                 <div class="alert alert-danger" role="alert">
     llena todos los campos  
</div>
     `}else{
                respuesta.innerHTML=`
                 <div class="alert alert-info" role="table">
    ${data}
</div>
     `

            }
        })
})