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

/// Url actual
let url = window.location.href;

/// Elementos de li
const tabs = ["somos", "prov", "sedes", "catl"];

tabs.forEach(e => {
    /// Agregar .php y ver si lo contiene en la url
    if (url.indexOf(e + ".php") !== -1) {
        /// Agregar tab- para hacer que coincida la Id
        setActive("tab-" + e);
    }

});

/// Funcion que asigna la clase active
function setActive(id) {
    document.getElementById(id).setAttribute("class", "nav-item active");
}
