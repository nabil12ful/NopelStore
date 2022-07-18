$(function(){
    'use strict';
    $(".sub-menu").hover(function(){
        $(".sub-menu .menu").toggleClass("show");
    })
});



//menu toggle
var menu = document.getElementById("menu");
menu.style.maxHeight = "0px";

function menutoggle(){
    if (menu.style.maxHeight == "0px") {
        
        menu.style.maxHeight= "200px";
    }
    else
    {
        
        menu.style.maxHeight = "0px";
    }
    
}

//for product 
 
var productImg = document.getElementById("productImg");
var smallImg = document.getElementsByClassName("small-img");

smallImg[0].onclick = function() {
    productImg.src = smallImg[0].src;
}
smallImg[1].onclick = function() {
    productImg.src = smallImg[1].src;
}
smallImg[2].onclick = function() {
    productImg.src = smallImg[2].src;
}
smallImg[3].onclick = function() {
    productImg.src = smallImg[3].src;
}

//toggle form
var LoginForm = document.getElementById("logform");
var RegForm = document.getElementById("regform");
var ind = document.getElementById("ind");

function reg(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    ind.style.transform = "translateX(100px)";
}

function log(){
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    ind.style.transform = "translateX(0px)";
}

const logi = document.querySelector("#log");

logi.addEventListener();