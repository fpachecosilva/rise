document.addEventListener("DOMContentLoaded", ()=> {

  document.addEventListener("scroll", () => {
    const menu = document.getElementById("menu");
    const secao2 = document.querySelector(".secao2");    
    const secao2Bottom = secao2.getBoundingClientRect().bottom;    
  
    if (secao2Bottom <= 120) {
      menu.classList.add("fixed");
    } else {
      menu.classList.remove("fixed");
    }
  });



})






