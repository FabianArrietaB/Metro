
//invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
$(window).scroll(function(){
  if($(this).scrollTop() > 300){ //condición a cumplirse cuando el usuario aya bajado 301px a más.
    $("#js_up").slideDown(300); //se muestra el botón en 300 mili segundos
  }else{ // si no
    $("#js_up").slideUp(300); //se oculta el botón en 300 mili segundos
  }
});

//creamos una función accediendo a la etiqueta i en su evento click
$("#js_up i").on('click', function (e) { 
  e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
  $("body,html").animate({ // aplicamos la función animate a los tags body y html
    scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
  },700); //el valor 700 indica que lo ara en 700 mili segundos
  return false; //rompe el bucle
});

$(document).ready(function(){
  $('.button-left').click(function(){
      $('.sidebar').toggleClass('fliph');
  });
    
});

function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
  
}

window.addEventListener("load", () => {

  //localStorage.setItem('active', '');
  let activeTab = localStorage.getItem('active');
  let btn = document.querySelectorAll('#pills-tab li .nav-link')
  let tabContent = document.querySelectorAll('.tab-content .tab-pane')

  // read active tab from storage
  if ( activeTab ) {

      // show active tab
      tabSelected = document.querySelector(activeTab+'-tab')
      tabSelected.className += ' active'

      // show active content
      contentSelected = document.querySelector(activeTab)
      contentSelected.className += ' active show'

  } else {

      // default tab
      btn[0].className += ' active'
      tabContent[0].className += ' active show'
  }

  //btn = document.querySelectorAll('#pills-tab li .nav-link')
  btn.forEach( tab => {

      // read selected tab from EventListener (bootstrap)
      tab.addEventListener('show.bs.tab', (e) => {
          dataTarget = tab.getAttribute('data-bs-target')
          localStorage.setItem('active', dataTarget);
      })

  })

})