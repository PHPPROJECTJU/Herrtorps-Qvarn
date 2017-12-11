/*------Menu fix-------*/

/*-----5 dec 2017 https://stackoverflow.com/questions/18004938/responsive-dropdown-menu-hide-previously-displayed-menu-items-when-screen-size -------*/

/*---Enable function when doc is loaded---*/
$(document).ready(function(){

      function windowSize() {
        windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
        return windowWidth;
      }

      function openSub(){
          if(this.children[1].style.display == "block"){
              this.children[1].style.display = "none";
          } else {
            this.children[1].style.display = "block";
          }
      };

      function sizeFunction(){
        var subitem1 = document.querySelector(".sub-menu");
        var subitem2 = document.querySelectorAll(".sub-menu")[1];

        var menuleft = document.querySelector(".menuleft");
        if (windowSize() < 960) {
                /*width is under 960px.*/

                document.querySelector(".sub-menu-1").addEventListener("click", openSub);
                document.querySelector(".sub-menu-2").addEventListener("click", openSub);

        } else {
          /*width is 960px or larger.*/
          document.querySelector(".sub-menu-1").removeEventListener("click", openSub);
          document.querySelector(".sub-menu-2").removeEventListener("click", openSub);
          subitem1.style = "";
          subitem2.style = "";
          menuleft.style = "";
        }
      };
/*to ba able to open submenu without resizing window*/
      sizeFunction();

      // For example, get window size on window resize
      $(window).resize(function() {
            windowSize();

            var subitem1 = document.querySelector(".sub-menu");
            var subitem2 = document.querySelectorAll(".sub-menu")[1];

            sizeFunction();
      });
});


var menuleft = document.querySelector(".menuleft");

function openNav(x) {
    x.classList.toggle("change");

    if(menuleft.style.display == "block"){
      menuleft.style.display = "none";
    } else {
      menuleft.style.display = "block";
    }

}

/*slimming the logo when scrolling*/

window.onscroll = function() {

  if ($(this).width() >= 640) {

    var header = document.querySelector('header');
    var logo = document.getElementById('logo');

      if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400){

        $("#logo").removeClass("logofull");
        $("#logo").addClass("logoslim");

      } else if (document.body.scrollTop < 400 || document.documentElement.scrollTop < 400) {

        $("#logo").removeClass("logoslim");
        $("#logo").addClass("logofull");

      }

  }
}

/*öppettider-dropdown*/

var clock = document.getElementById('clock');
var oppettider = document.getElementById('oppetdropdown');
oppettider.style.display = "none";

function clickClock(x){

x.classList.toggle("change");

  if(oppettider.style.display == "block"){
    oppettider.style.display = "none";
  } else {
    oppettider.style.display = "block";
  }
};
