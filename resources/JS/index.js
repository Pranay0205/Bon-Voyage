//-------------------------------------//
//-------Hamburger Menu Effect--------//
//-----------------------------------//

var toggleButton = document.getElementById("toggle-btn");
toggleButton.addEventListener("click", function() {
  {
    var icon = document.getElementById("toggle-btn");
    var sideBar = document.getElementById("sidebar");
    if (icon.classList.contains("ion-navicon-round")) {
      sideBar.style.cssText = "left:0px";
      icon.classList.remove("ion-navicon-round");
      icon.classList.add("ion-close-round");
      console.log(sideBar);
    } else {
      sideBar.style.cssText = "left:-200px";
      icon.classList.add("ion-navicon-round");
      icon.classList.remove("ion-close-round");
    }
  }
});

function packagepage() {
  window.location.href = "packages.html";
}
function register() {
  window.location.href = "Register.html";
}

function login() {
  window.location.href = "Login.html";
}

function bookingpage() {
  window.location.href = "Booking.html";
}

function contactUspage() {
  window.location.href = "ContactUs.html";
}
