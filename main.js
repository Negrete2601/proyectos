function login()
{
	var user, password
	user = document.getElementById("usuario").value;
	password = document.getElementById("contrase").value;

	if (user == "root" && password == "root"){
		    swal.fire({
  title:'Contraseña Correcta',
  icon: 'success',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  },
  confirmButtonText:'Aceptar',
  footer:'¡Bienvenido!',
  width:'30%',
  position:'center',
  allowOutsideClick: false,
  allowEscapekey: false,
  allowEnterkey: false,
  confirmButtonColor:'#269abc',
  confirmButtonAriaLabel:'confirmar',
  showCancelButton: false,
  cancelButtonText:'Cancelar',
  cancelButtonAriaLabel:'Cancelar',
  buttonsStyling: true, 
  showCloseButton: true,
  closeButtonAriaLabel:'cerrar alerta',

  //imageUrl:'img/contra.png',
  imageWidth:'100',
  imageAlt:'welcome',
});
	}else
	{
				    swal.fire({
  title:'Contraseña Incorrecta',
  icon: 'error',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  },
  confirmButtonText:'Aceptar',
  footer:'¡Intente de nuevo!',
  width:'30%',
  position:'center',
  allowOutsideClick: false,
  allowEscapekey: false,
  allowEnterkey: false,
  confirmButtonColor:'#269abc',
  confirmButtonAriaLabel:'confirmar',
  showCancelButton: false,
  cancelButtonText:'Cancelar',
  cancelButtonAriaLabel:'Cancelar',
  buttonsStyling: true, 
  showCloseButton: true,
  closeButtonAriaLabel:'cerrar alerta',

  //imageUrl:'img/contra.png',
  imageWidth:'100',
  imageAlt:'welcome',
});
	}
}