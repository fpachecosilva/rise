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


  document.addEventListener('scroll', function () {
		const parallaxSections = document.querySelectorAll('.parallax-js');

		parallaxSections.forEach(section => {
			const speed = parseFloat(section.getAttribute('data-speed')) || 0.5;
			const offset = window.scrollY * speed;
			section.querySelector('::before').style.transform = `translateY(${offset}px)`;
		});
	});

})






