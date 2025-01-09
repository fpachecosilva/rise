
document.addEventListener("DOMContentLoaded", () => {
  const cobre = document.querySelector(".cobre");
  const secao3 = document.querySelector("section.secao3");
  const topo = document.querySelector("section.topo");
  const footer = document.querySelector("footer");
  let timer;

  // Adiciona classe cobrefundo
  const addCobrefundo = () => {
    if (!cobre.classList.contains("cobrefundo")) {
      cobre.classList.add("cobrefundo");
    }

    // Reseta o timer para remover a classe
    document.addEventListener("touchend", ()=> {
      clearTimeout(timer);
      timer = setTimeout(() => {
        cobre.classList.remove("cobrefundo");
      }, 600);
    });
  };

  // Detecta overscroll em section.topo ou footer
  const checkOverscroll = () => {
    const topoTop = topo.getBoundingClientRect().top;
    const footerBottom = footer.getBoundingClientRect().bottom;

    // Verifica se topo está sendo ultrapassado para cima
    if (topoTop > 0) {
      addCobrefundo();
    }

    // Verifica se footer está sendo ultrapassado para baixo
    if (footerBottom < 500) {
      addCobrefundo();
    }
  };

  // Evento de scroll na janela
  document.addEventListener("scroll", checkOverscroll);
  document.addEventListener("touchmove", checkOverscroll);
  
  // Detecta o final do movimento de rolagem (desktop)
  // document.addEventListener("mouseup", checkOverscroll);

  // Detecta o final do movimento de toque (mobile)
  // document.addEventListener("touchend", checkOverscroll);
});


document.addEventListener("DOMContentLoaded", ()=> {

  document.addEventListener("scroll", () => {
    const menu = document.getElementById("menu");
    const secao2 = document.querySelector(".secao2");
    const secao3 = document.querySelector(".secao3");
    const secao3Title = document.querySelector(".secao3 .title");
    const secao2Bottom = secao2.getBoundingClientRect().bottom;  
    let threshold = window.innerWidth < 769 ? 80 : 100;

    // console.log(secao2Bottom)
    

    if (secao2Bottom <= 0) {
      menu.classList.add("fixed");
      //secao3.style.paddingTop = threshold + 'px';
      //secao3Title.style.marginTop = threshold + 'px';
    } else {
      menu.classList.remove("fixed");
      
      //secao3.style.paddingTop = '0';
      //secao3Title.style.marginTop = '0';
      //secao3Title.style.marginTop = '-' + threshold + 'px';
    }
  });

})








