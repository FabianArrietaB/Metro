$(document).ready(function(){
  // Agregue desplazamiento suave a todos los enlaces
  $(".mouse").on('click', function(event) {

    // Asegúrese de que this.hash tenga un valor antes de anular el comportamiento predeterminado
    if (this.hash !== "") {
      // Prevenir el comportamiento predeterminado del clic del ancla
      event.preventDefault();

      // Store hash
      var hash = this.hash;

// Usando el método animate () de jQuery para agregar un desplazamiento suave de la página
// El número opcional (800) especifica la cantidad de milisegundos necesarios para desplazarse al área especificada
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Agregue hash (#) a la URL cuando termine de desplazarse (comportamiento de clic predeterminado)
        window.location.hash = hash;
      });
    } // Fin if
  });
});

//abajo hacia arriba
// fadeIn fadeOut
$(window).on('scroll', function () { // Evento de Scroll
  if (($(window).scrollTop() + $(window).height()) == $(document).height()) { // Si estamos al final de la página
      $('.ocultar').stop(true).animate({ // Escondemos el elemento
          opacity: 0
      }, 250);
  } else { // Si no
      $('.ocultar').stop(true).animate({ // Mostramos el elemento
          opacity: 1
      }, 200);
  }
});
