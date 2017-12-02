var menuleft = document.querySelector(".menuleft");
var menuright = document.querySelector(".menuright");
var hamburger = document.getElementById("hamburger");
// function openNav() {
// 		menuleft.style.display = "block";
//     menuright.style.display = "block";
// }
var subitem1 = document.querySelector(".sub-menu");

document.querySelector(".sub-menu-1").addEventListener("click", function(){
  if(subitem1.style.display == "block"){
      subitem1.style.display = "none";
  } else {
    subitem1.style.display = "block";
  }
});


var subitem2 = document.querySelectorAll(".sub-menu")[1];
document.querySelector(".sub-menu-2").addEventListener("click", function(){
  if(subitem2.style.display == "block"){
      subitem2.style.display = "none";
  } else {
    subitem2.style.display = "block";
  }
});


function openNav(x) {
    x.classList.toggle("change");

    if(menuleft.style.display == "block"){
      menuleft.style.display = "none";
      menuright.style.display = "none";
    } else {
      menuleft.style.display = "block";
      menuright.style.display = "block";
    }

}
