//Switch button. When the hamburger menu is clicked, the classname of the item
//with id "myTopnav"
//"myTopnav" changes from "header_navBar" to "MyTopnav.responsive".
//Click again, and the class is back to "header_navBar"

function responsiveNavigator() {
  var x = document.getElementById("myTopnav");
  if (x.className === "header__navBar") {
    x.className += " responsive";
  } else {
    x.className = "header__navBar";
  }
}
