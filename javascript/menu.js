/*------Menu fix-------*/

/*-----5 dec 2017 https://stackoverflow.com/questions/18004938/responsive-dropdown-menu-hide-previously-displayed-menu-items-when-screen-size -------*/



    var subitem1 = document.querySelector(".sub-menu");
    var subitem2 = document.querySelectorAll(".sub-menu")[1];

            document.querySelector(".sub-menu-1").addEventListener("click", function(){
                if(subitem1.style.display == "block"){
                    subitem1.style.display = "none";
                } else {
                  subitem1.style.display = "block";
                }
            });

            document.querySelector(".sub-menu-2").addEventListener("click", function(){
                if(subitem2.style.display == "block"){
                    subitem2.style.display = "none";
                } else {
                    subitem2.style.display = "block";
                }
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
