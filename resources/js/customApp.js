// let divMain = document.createElement("div");
// divMain.onclick=function() {openNav()};


function openNav() {
    document.getElementById("loginSlide").style.marginLeft = "50%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  export const searchInput =   function searchInputFocus1(){
    var element = document.getElementById('searchInput1');
    element.classList.toggle('active'); 
}

export function searchInputFocus(){
    var element = document.getElementById('searchInput');
    element.classList.toggle('active'); 
}
