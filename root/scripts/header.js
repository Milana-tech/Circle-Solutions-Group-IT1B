/*
    When the navigation bar is not large and it hides the page links, this function is used to change the state 
*/
function expandedMenuStateChange() {
    var x = document.getElementById("navbar");
    if (x.className === "header") 
        {
            x.className = "header expanded";
        } else {
            x.className = "header";
        }
  }

function expandedUserStateChange(){
    var x = document.getElementById("userMenuBtn");
    if (x.className === "userMenuBtn") 
        {
            x.className = "userMenuBtn expanded";
        } else {
            x.className = "userMenuBtn";
        }
  }
  