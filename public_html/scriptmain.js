$('.owl-carousel').owlCarousel({
  rtl:true,
  loop:false,
  margin:10,
  responsive:{
    0:{
      items:1,
    },
    600:{
      items:3,
    },
    1000:{
      items:6,
    }
  }
})
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
});


let shownumlike=document.querySelector(".counter");
let shownumlike1=document.querySelector(".counter1");
let like1=document.querySelector(".iconlike1");
let select1=document.querySelector('.iconselect1');
like1.addEventListener('click',function(e){
  e.preventDefault();
  like1.style.display="none";
  select1.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let like2=document.querySelector(".iconlike2");
let select2=document.querySelector('.iconselect2')
like2.addEventListener('click',function(e){
  e.preventDefault();
  like2.style.display="none";
  select2.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let like3=document.querySelector(".iconlike3");
let select3=document.querySelector('.iconselect3')
like3.addEventListener('click',function(e){
  e.preventDefault();
  like3.style.display="none";
  select3.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let like4=document.querySelector(".iconlike4");
let select4=document.querySelector('.iconselect4')
like4.addEventListener('click',function(e){
  e.preventDefault();
  like4.style.display="none";
  select4.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let like5=document.querySelector(".iconlike5");
let select5=document.querySelector('.iconselect5')
like5.addEventListener('click',function(e){
  e.preventDefault();
  like5.style.display="none";
  select5.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let like6=document.querySelector(".iconlike6");
let select6=document.querySelector('.iconselect6')
like6.addEventListener('click',function(e){
  e.preventDefault();
  like6.style.display="none";
  select6.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let like7=document.querySelector(".iconlike7");
let select7=document.querySelector('.iconselect7')
like7.addEventListener('click',function(e){
  e.preventDefault();
  like7.style.display="none";
  select7.style.display="block"
  return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
})


let selectbas1=document.querySelector('.selbas1');
let addtobas1=document.querySelector('#addbas1');
let showbas=document.querySelector('#shownumbas');
let showbas1=document.querySelector('.shownumbas1');

addtobas1.addEventListener('click',function(e){
  e.preventDefault();
  addtobas1.style.display="none";
  selectbas1.style.display="block";
  return (showbas.innerHTML)++,(showbas1.innerHTML)++;
})


let selectbas2=document.querySelector('.selbas2');
let addtobas2=document.querySelector('#addbas2');

addtobas2.addEventListener('click',function(e){
  e.preventDefault();
  addtobas2.style.display="none";
  selectbas2.style.display="block";
  return (showbas.innerHTML)++;
})


let selectbas3=document.querySelector('.selbas3');
let addtobas3=document.querySelector('#addbas3');

addtobas3.addEventListener('click',function(e){
  e.preventDefault();
  addtobas3.style.display="none";
  selectbas3.style.display="block";
  return (showbas.innerHTML)++;
})


let selectbas4=document.querySelector('.selbas4');
let addtobas4=document.querySelector('#addbas4');

addtobas4.addEventListener('click',function(e){
  e.preventDefault();
  addtobas4.style.display="none";
  selectbas4.style.display="block";
  return (showbas.innerHTML)++;
})


let selectbas5=document.querySelector('.selbas5');
let addtobas5=document.querySelector('#addbas5');

addtobas5.addEventListener('click',function(e){
  e.preventDefault();
  addtobas5.style.display="none";
  selectbas5.style.display="block";
  return (showbas.innerHTML)++;
})


let selectbas6=document.querySelector('.selbas6');
let addtobas6=document.querySelector('#addbas6');

addtobas6.addEventListener('click',function(e){
  e.preventDefault();
  addtobas6.style.display="none";
  selectbas6.style.display="block";
  return (showbas.innerHTML)++;
})


let selectbas7=document.querySelector('.selbas7');
let addtobas7=document.querySelector('#addbas7');

addtobas7.addEventListener('click',function(e){
  e.preventDefault();
  addtobas7.style.display="none";
  selectbas7.style.display="block";
  return (showbas.innerHTML)++;
})
