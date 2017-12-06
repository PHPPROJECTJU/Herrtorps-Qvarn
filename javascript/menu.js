/*------Menu fix-------*/

/*-----5 dec 2017 https://stackoverflow.com/questions/18004938/responsive-dropdown-menu-hide-previously-displayed-menu-items-when-screen-size -------*/


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
        console.log('hej');
        var subitem1 = document.querySelector(".sub-menu");
        var subitem2 = document.querySelectorAll(".sub-menu")[1];
        if (windowSize() < 960) {
                console.log('width is under 960px!');

                document.querySelector(".sub-menu-1").addEventListener("click", openSub);
                document.querySelector(".sub-menu-2").addEventListener("click", openSub);

        } else {
          console.log('width is over 960px!');
          document.querySelector(".sub-menu-1").removeEventListener("click", openSub);
          document.querySelector(".sub-menu-2").removeEventListener("click", openSub);
          subitem1.style = "";
          subitem2.style = "";
        }
      };
/*to ba able to open submenu without resizing window*/
      sizeFunction();

      // For example, get window size on window resize
      $(window).resize(function() {
            windowSize();
            console.log('width is :', windowSize());

            var subitem1 = document.querySelector(".sub-menu");
            var subitem2 = document.querySelectorAll(".sub-menu")[1];

            sizeFunction();
      });
});

            // $(window).resize(function() {
            //    if ($(window).width() <= 959) {
            //      var subitem1 = document.querySelector(".sub-menu");
            //      var subitem2 = document.querySelectorAll(".sub-menu")[1];
            //
                         // document.querySelector(".sub-menu-1").addEventListener("click", function(){
                         //     if(subitem1.style.display == "block"){
                         //         subitem1.style.display = "none";
                         //     } else {
                         //       subitem1.style.display = "block";
                         //     }
                         // });
                         //
                         // document.querySelector(".sub-menu-2").addEventListener("click", function(){
                         //     if(subitem2.style.display == "block"){
                         //         subitem2.style.display = "none";
                         //     } else {
                         //         subitem2.style.display = "block";
                         //     }
                         // });
            //    }
            //   else {
            //      subitem1.style.display = "none";
            //      subitem2.style.display = "none";
            //   }
            //   });


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
