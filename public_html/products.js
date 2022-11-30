// for menu hidden in top page
const iconmenutop=document.querySelector("#close-icon-top-mnu");
const divmenutop=document.querySelector(".bgmnuhidden");
const buttonmnutop=document.querySelector(".mnubtnnav");
buttonmnutop.addEventListener("click",(e)=>{
  divmenutop.style.right="0px";
  divmenutop.style.transitionDuration = "0.8s";
  bodyforclick.style.display = "block";
  e.preventDefault
})

iconmenutop.addEventListener("click", () => {
  divmenutop.style.right = "-300px";
  bodyforclick.style.display = "none";
  e.preventDefault
});


const opensmfilter = document.querySelector("#open-filter-sm");
const filterforsm = document.querySelector(".filter-for-sm");
const bodyforclick = document.querySelector(".bodyforclick");
opensmfilter.addEventListener("click", () => {
  filterforsm.style.right = "0px";
  filterforsm.style.transitionDuration = "0.8s";
  bodyforclick.style.display = "block";
});

const closeiconfilterSm = document.querySelector("#close-icon-filter-sm");
closeiconfilterSm.addEventListener("click", () => {
  filterforsm.style.right= "-300px";
  bodyforclick.style.display = "none";
  e.preventDefault
});

const func2 = function () {
  const res1 = document.querySelector(".customRange2").value;
  const showrang = document.querySelector(".customRange3");
  showrang.innerHTML = res1 * 1000 +"تومان";
};
const func3 = function () {
  const res2 = document.querySelector(".customRange4").value;
 const showrang1 = document.querySelector(".customRange5");

   showrang1.innerHTML = res2 * 1000 +"تومان";
};

// for like
 const clicktolike= function(el){
   const counter0=document.querySelector(".counter");
   const counter1=document.querySelector(".counter1");
    (counter0.innerHTML)++,(counter1.innerHTML)++;
    el.remove();
    el.preventdefulte;

}

// for basket
const clicktobaqsket= function(el){
 const counter2=document.querySelector(".shownumbas1");
 const counter3=document.querySelector(".shownumbas");
 console.log(counter2);
 console.log(counter3);
 (counter2.innerHTML)++,(counter3.innerHTML)++;
 el.remove();
 el.preventdefulte;
}

const btnorderlist=document.querySelector(".orederrlist");
const orderlistitem=document.querySelector(".menu-for-orderlist");
const iconcloseordrlist=document.querySelector("#close-icon-listhidden")
btnorderlist.addEventListener("click",function(e){
orderlistitem.style.top="250px";
orderlistitem.style.transitionDuration = "2s";
  bodyforclick.style.display = "block";
})
iconcloseordrlist.addEventListener("click",(e)=>{
  orderlistitem.style.top="-400px";
orderlistitem.style.transitionDuration = "2s";
  bodyforclick.style.display = "none";
})

const displayblok=function(el){
  el.parentElement.parentElement.lastElementChild.style.display="block";
  el.preventDefault
}

