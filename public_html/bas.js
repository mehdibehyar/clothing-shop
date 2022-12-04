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
