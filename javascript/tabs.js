// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//----------------------------BOENDE----------------------------//

function rumTab(evt, rumsTyp) {

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(rumsTyp).style.display = "block";
    evt.currentTarget.className += " active";
}


function hogtidTab(evt, hogtidTyp) {

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(hogtidTyp).style.display = "block";
    evt.currentTarget.className += " active";
}


function oppetTab(evt, oppettid) {

    // Declare all variables
    var i, oppet_tabell, kontaktTablinks;

    // Get all elements with class="oppet_tabell" and hide them
    oppet_tabell = document.getElementsByClassName("oppet_tabell");
    for (i = 0; i < oppet_tabell.length; i++) {
        oppet_tabell[i].style.display = "none";
    }

    // Get all elements with class="kontaktTablinks" and remove the class "active"
    kontaktTablinks = document.getElementsByClassName("kontaktTablinks");
    for (i = 0; i < kontaktTablinks.length; i++) {
        kontaktTablinks[i].className = kontaktTablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(oppettid).style.display = "block";
    evt.currentTarget.className += " active";
}
