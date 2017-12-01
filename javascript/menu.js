var menuleft = document.querySelector(".menuleft");
var menuright = document.querySelector(".menuright");
var hamburger = document.getElementById("hamburger");
// function openNav() {
// 		menuleft.style.display = "block";
//     menuright.style.display = "block";
// }

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
