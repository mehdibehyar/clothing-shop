const opensmfilter = document.querySelector("#open-filter-sm");
const filterforsm = document.querySelector(".filter-for-sm");
const bodyforclick = document.querySelector(".bodyforclick");
opensmfilter.addEventListener("click", () => {
    filterforsm.style.right = "0px";
    filterforsm.style.transitionDuration = "0.8s";
    bodyforclick.style.display = "block";

    const closeiconfilterSm = document.querySelector("#close-icon-filter-sm");
    closeiconfilterSm.addEventListener("click", () => {
        filterforsm.style.right = "-300px";
        bodyforclick.style.display = "none";
        e.preventDefault;
    });
    // جدید برای همه
    bodyforclick.addEventListener('click',()=>{
        filterforsm.style.right = "-300px";
        bodyforclick.style.display = "none";})
    e.preventDefault;
});


// for menu hidden in top page
const iconmenutop = document.querySelector("#close-icon-top-mnu");
const divmenutop = document.querySelector(".bgmnuhidden");
const buttonmnutop = document.querySelector(".mnubtnnav");
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

// ///////////////////////////////////////for gap
$('.gap').click(function(){
    $('.page-gap').css({transform: "translateX(0%)",transition:"0.7s linear"});
    $('.closegap').click(function(){
        $('.page-gap').css({transform: "translateX(120%)",transition:"0.6s linear"});
    })
})
// send message in gap by user
$('.send-icon').click(function(){
    var message =$('.input-for-chat').val();
    console.log(message.length);
    if (message.length>0) {
        var div=$("<div>");
        var p=$("<p>")
        var br=$("br")
        p.text(message);
        div.addClass('message');
        div.append(p)
        $(".main-gap").append(div);
        document.querySelector('.input-for-chat').value="";
    }
})

$(".input-for-chat").keyup(function(event){
    if(event.key==='Enter'){
        var message =$('.input-for-chat').val();
        if (message.length>0) {
            var div=$("<div>");
            var p=$("<p>")
            var br=$("br")
            p.text(message);
            div.addClass('message');
            div.append(p)
            $(".main-gap").append(div);
            document.querySelector('.input-for-chat').value="";
        }
    }
})


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

