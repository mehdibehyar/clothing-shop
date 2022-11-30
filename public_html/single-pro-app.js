$('.owl-carousel').owlCarousel({
  rtl:true,
  loop:false,
  margin:10,
  responsive:{
    0:{
      items:2,
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

// for menu hidden in top page
const iconmenutop=document.querySelector("#close-icon-top-mnu");
const divmenutop=document.querySelector(".bgmnuhidden");
const buttonmnutop=document.querySelector(".mnubtnnav");
const bodyforclick = document.querySelector(".bodyforclick");
buttonmnutop.addEventListener("click",(e)=>{
  divmenutop.style.right="0px";
  divmenutop.style.transitionDuration = "0.8s";
  bodyforclick.style.display = "block";
  e.preventDefault();
})

iconmenutop.addEventListener("click", (e) => {
  divmenutop.style.right = "-300px";
  bodyforclick.style.display = "none";
  e.preventDefault();
});

const clicktolike= function(el){
  const counter0=document.querySelector(".counter");
  const counter1=document.querySelector(".counter1");
  (counter0.innerHTML)++,(counter1.innerHTML)++;
  el.preventDefault;
  el.remove();
}

// for basket
const clicktobaqsket= function(el){
  const counter2=document.querySelector(".shownumbas1");
  const counter3=document.querySelector(".shownumbas");
  console.log(counter2);
  console.log(counter3);
  (counter2.innerHTML)++,(counter3.innerHTML)++;
  el.remove();
  e.preventDefault();
}


// function selection(event,id)
// {
//     document.getElementById('mystyle').innerHTML=''
//     let stylemehdi=({id})=>{
//         return `
//                 #color-${id} {
//             position: relative;
//             display: inline-block;
//             width: 30px;
//             height: 30px;
//         }
//
//         #color-${id}::before {
//             position: absolute;
//             left: 0;
//             top: 50%;
//             height: 50%;
//             width: 3px;
//             background-color: white;
//             content: "";
//             transform: translateX(15px) rotate(-30deg);
//             transform-origin: left bottom;
//         }
//
//         #color-${id}::after {
//             position: absolute;
//             left: 0;
//             bottom: 0;
//             height: 3px;
//             width: 100%;
//             background-color: white;
//             content: "";
//             transform: translateX(15px) rotate(-60deg);
//             transform-origin: left bottom;
//         }
//     `;
//     }
//     document.getElementById('mystyle').append(stylemehdi({id}));
//     let color_id=document.getElementById('color-'+id);
//
// }




