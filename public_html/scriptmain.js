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
///////======><===========//////


//جدید برای همه با اضافه کردن کلاس هدر به سکشن هدر
var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       // downscroll code
       $(".header").css({position:'static',background:'#fff'})
       $(".header").css('z-index',5)
   } else {
      // upscroll code
      $(".header").css({position:'fixed',background:'#fff',top:'0',})
      $(".header").css('z-index',5)

   }
   lastScrollTop = st;
});

// جدید برای سبد خرید
$(document).ready(function() {
  $(".basshowside").click(function() {
    $(".hidden-basket").css({transform: "translateX(0%)",transition:"0.4s linear"});
    $(".bodyforclick").css({display:"block",});
    $(".bodyforclick").css('z-index',21);
    $(".bodyforclick").click(function(){
     $(".hidden-basket").css({transform: "translateX(-100%)",transition:"0.4s linear"});
    $(".bodyforclick").css({display:"none",})
    })
    $(".closebas").click(function(){
     $(".hidden-basket").css({transform: "translateX(-100%)",transition:"0.4s linear"});
    $(".bodyforclick").css({display:"none",});
    })
   })
   $(".plus").click(function(){
    var a=parseInt($("#result").text());
    a=a+1;
    $("#result").text(a);
   })
   $(".mines").click(function(){
    var a=parseInt($("#result").text());
    if (a>1) {
      a=a-1;
      $("#result").text(a);
    }
   })
})

$(document).ready(function(){
  $(".closepro").click(function(){
    $(".forclosepro").css({display:"none",});
  })
})



// ==========>برای login

$(document).ready(function() {
  $(".for-show-login").click(function() {
    $(".show-login-hidden").css({transform: "translateX(0%)",transition:"0.4s linear"});
    $(".bodyforclick").css({display:"block",});
    $(".bodyforclick").css('z-index',21);
    $(".bodyforclick").click(function(){
     $(".show-login-hidden").css({transform: "translateX(-100%)",transition:"0.4s linear"});
    $(".bodyforclick").css({display:"none",})
    })
    $(".closelogin-hide").click(function(){
     $(".show-login-hidden").css({transform: "translateX(-100%)",transition:"0.4s linear"});
    $(".bodyforclick").css({display:"none",});
    })
   })

})
$('.Enter').keyup(function (event){
    if (event.key==='Enter'){
        document.querySelector('.btn-Enter').click();
    }
});


$('.owl-carousel1').owlCarousel({
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
function plus(el){
  (el.parentElement.children[1].innerHTML)++;
    el.preventDefault();
 }


 function minus(el){
   const resultpro=el.parentElement.children[1];
   if(resultpro.innerHTML>1)
   (resultpro.innerHTML)--;
   el.preventDefault;
  }




$(document).scroll(function () {
  var navWrap = $('#navWrap'),
nav = $('#nvc'),
startPosition = navWrap.offset().top,
stopPosition = $('#stopHere').offset().top - nav.outerHeight();
//stick nav to top of page
var y = $(this).scrollTop()
if (y > startPosition) {
    nav.addClass('sticky');
    if (y > stopPosition) {
        nav.css('top', stopPosition - y);
    } else {
        nav.css('top', 0);
    }
} else {
    nav.removeClass('sticky');
}

});


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


// for menu hidden in top page
const iconmenutop = document.querySelector("#close-icon-top-mnu");
const divmenutop = document.querySelector(".bgmnuhidden");
const buttonmnutop = document.querySelector(".mnubtnnav");
var bodyforclick=document.querySelector(".bodyforclick");
buttonmnutop.addEventListener("click", (e) => {
  divmenutop.style.right = "0px";
  divmenutop.style.position="fixed"
  divmenutop.style.transitionDuration = "0.8s";
  bodyforclick.style.display = "block";
  // جدید برای همه
  bodyforclick.addEventListener('click',()=>{
    divmenutop.style.right = "-300px";
    bodyforclick.style.display = "none";})
  e.preventDefault;
});
iconmenutop.addEventListener("click",()=>{
  divmenutop.style.right = "-300px";
  bodyforclick.style.display = "none";
  e.preventDefault;
});


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


const func2 = function () {
  const res1 = document.querySelector(".customRange2").value;
  const showrang = document.querySelector(".customRange3");
  showrang.innerHTML = res1 * 1000 + "تومان";
};
const func3 = function () {
  const res2 = document.querySelector(".customRange4").value;
  const showrang1 = document.querySelector(".customRange5");

  showrang1.innerHTML = res2 * 1000 + "تومان";
};

// for like
const clicktolike = function (el) {
  const counter0 = document.querySelector(".counter");
  const counter1 = document.querySelector(".counter1");
  counter0.innerHTML++, counter1.innerHTML++;
  el.remove();
  el.preventdefulte;
};

// for basket
const clicktobaqsket = function (el) {
  const counter2 = document.querySelector(".shownumbas1");
  const counter3 = document.querySelector(".shownumbas");
  console.log(counter2);
  console.log(counter3);
  counter2.innerHTML++, counter3.innerHTML++;
  el.remove();
  el.preventdefulte;
};

const btnorderlist = document.querySelector(".orederrlist");
const orderlistitem = document.querySelector(".menu-for-orderlist");
const iconcloseordrlist = document.querySelector("#close-icon-listhidden");
btnorderlist.addEventListener("click", function (e) {
  orderlistitem.style.top = "250px";
  orderlistitem.style.transitionDuration = "2s";
  bodyforclick.style.display = "block";
});
iconcloseordrlist.addEventListener("click", (e) => {
  orderlistitem.style.top = "-400px";
  orderlistitem.style.transitionDuration = "2s";
  bodyforclick.style.display = "none";
});

const displayblok = function (el) {
  el.parentElement.parentElement.lastElementChild.style.display = "block";
  el.preventDefault;
};








