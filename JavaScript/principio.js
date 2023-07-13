const nav = document.querySelector('.nav');
	window.addEventListener('scroll', function(){
		nav.classList.toggle('active', window.scrollY >0)
	})
//

let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});

//Libro de reclamaciones
function enviarFormulario() {
  event.preventDefault(); // Detiene el comportamiento predeterminado del botón de enviar

  //DATOS PERSONALES
  let nombre
  let apellido
  let email
  let tel
  let tipdoc
  nombre=document.form1.nombre.value
  apellido=document.form1.Apellido.value
  email=document.form1.email.value
  tel=document.form1.tel.value
  tipdoc=document.form1.tdoc.value
  

  //DATOS NECESARIOS
  let boleta
  boleta=document.form1.Boleta.value

  //INFORMACION GENERAL
  let monto
  let text
  monto=document.form1.monto.value
  text=document.form1.text.value
  //DETALLE DE SU RECLAMO
  let tex2
  text2=document.form1.text2.value
  text3=document.form1.text3.value

  if (nombre === "") {
      alert("Por favor, agregue su nombre");
  } else if(apellido===""){
      alert("Agregue su Apellido")
      
  }else if(email===""){
      alert("Agregue su correo el ectronico")

  }else if(tel===""){
      alert("Agregue su Numero Telefonico")

  }else if(tipdoc===""){
      alert("Agregue su nro de documento")

  }else if(monto===""){
      alert("Agregue su monto")

  }else if(text===""){
      alert("Agregue una descripcion al monto")

  }else if(text2===""){
      alert("Agregue una descripcion al reclamo/queja")

  }else if(text3===""){
      alert("Agregue una descripcion al pedido")
  }
  
  else{
      alert("enviado exitosamente")
      document.form1.submit(); //para qe no se borren los datos
      
  } 
}