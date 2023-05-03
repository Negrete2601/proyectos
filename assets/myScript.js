function dobig() 
  {
    document.getElementById("demo").style.fontSize='90px';
  }
function showmore()
  {
    document.getElementById('more').innerHTML = 'Fundada en 1982 por un pequeño grupo de emprendedores, MagicSoft comenzó en México proporcionando servicios de TI a la comunidad y hoy es un líder nacional en soluciones digitales de próxima generación.'
  }
document.getElementById('dates').innerHTML = Date();


(async ()=>{
 const {value: nombre} = await swal.fire({
  title:'¡Bienvenido!',
  text:'Ingresa tu nombre',
  icon:'info',
  confirmButtonText:'Aceptar',
  footer:'Aceptar para seguir navegando',
  width:'30%',
  position:'center',
  allowOutsideClick: false,
  allowEscapekey: false,
  allowEnterkey: false,
  input:'text',
  confirmButtonColor:'#269abc',
  confirmButtonAriaLabel:'confirmar',
  showCancelButton: false,
  cancelButtonText:'Cancelar',
  cancelButtonAriaLabel:'Cancelar',
  buttonsStyling: true, 
  showCloseButton: true,
  closeButtonAriaLabel:'cerrar alerta',

  imageUrl:'img/welcome.jpg',
  imageWidth:'200',
  imageAlt:'welcome',
});
if(nombre){
    swal.fire({
      title:`Hola ${nombre}`,
      confirmButtonText:'Aceptar',
      footer:'Aceptar para seguir navegando',
      //width:'30%',
      position:'center',
      allowOutsideClick: true,
      allowEscapekey: true,
      allowEnterkey: false,
      confirmButtonColor:'#269abc',
      confirmButtonAriaLabel:'confirmar',
      showCancelButton: false,
      cancelButtonText:'Cancelar',
      cancelButtonAriaLabel:'Cancelar',
      buttonsStyling: true, 
      showCloseButton: true,
      closeButtonAriaLabel:'cerrar alerta',
    });

  }
})();






