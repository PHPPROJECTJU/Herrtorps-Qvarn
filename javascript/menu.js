var menuleft = document.querySelector(".menuleft");
var menuright = document.querySelector(".menuright");
var hamburger = document.getElementById("hamburger");
// function openNav() {
// 		menuleft.style.display = "block";
//     menuright.style.display = "block";
// }
var subitem = document.querySelector(".sub-menu");

document.querySelector(".menu-item-460").addEventListener("click", function(){
  if(subitem.style.display == "block"){
      subitem.style.display = "none";
  } else {
    subitem.style.display = "block";
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
