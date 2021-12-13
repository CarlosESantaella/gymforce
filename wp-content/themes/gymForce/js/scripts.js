jQuery(document).ready(($) => {
   $('.site-header .menu-principal .menu').slicknav({
       label: '',
       appendTo: '.site-header'
   });

   //Agregar slider
   if($('.listado-testimoniales').length > 0){

       $('.listado-testimoniales').bxSlider({
           auto: true,
           mode: 'fade',
           controls: false
   
       });
   }

   //mapa de leaflet
   let lat = document.querySelector('#lat').value;
   let lng = document.querySelector('#lng').value;
   let direccion = document.querySelector('#direccion').value;

   if(lat && lng && direccion){

       var map = L.map('mapa').setView([lat, lng], 13);
   
       L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
           attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
       }).addTo(map);
   
       L.marker([lat, lng]).addTo(map)
       .bindPopup(direccion)
       .openPopup();
   }
});

//agrega posición fija en el header al hacer scroll

window.onscroll = () => {
    const scroll = window.scrollY;

    const headerNav = document.querySelector('.barra-navegacion');
    documentBody = document.querySelector('body');

    //si la cantidad de scroll es mayor a, agregar una clase
    if(scroll > 300){
        headerNav.classList.add('fixed-top');
        documentBody.classList.add('ft-activo');
    }else{
        headerNav.classList.remove('fixed-top');
        documentBody.classList.remove('ft-activo');

    }
}