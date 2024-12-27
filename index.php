<!DOCTYPE HTML>
<html>
	<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>
    <? $paginaAtual = 'Home'; $tituloPagina = $paginaAtual ." - ". $empresa; ?>
    <title><? echo $tituloPagina ?></title>
  </head>

  <body id="home">    
    
    <section class="topo">
      <div class="centro">
        <img src="<?php echo $images?>centroimg.svg" alt="image">
        <p>
          We drive positive change by placing life at the center of every investment decision.
        </p>
        <div class="explore desk">
          <img src="<?php echo $images?>explore.svg" alt="image">
          EXPLORE
        </div>
      </div>
      <div class="explore mobflex">
          <img src="<?php echo $images?>explore.svg" alt="image">
          EXPLORE
        </div>
    </section>

    <section class="secao2">
      <nav id="menu">
        <div class="container">
          <a href="<?php echo $url ?>"> 
            <img src="<?php echo $images?>logo.svg" alt="image">
          </a>  
        </div>
      </nav>
      <div class="container wrapper5050">
        <div class="esq">          
          <p class="title">We are an impact asset<br class="desk"> management firm.</p>
          <p>Our private equity funds invest in<br class="desk"> businessess tackling the planet's most<br class="desk"> pressing environmental, climate and<br class="desk"> social challenges.</p>
        </div>
        <div class="dir">
          <img src="<?php echo $images?>secao2.png" alt="image" class="desk">
          <img src="<?php echo $images?>secao2-mobile.png" alt="image" class="mob">
        </div>
      </div>
    </section>

    <section class="secao3">
      <div class="background-fixed"></div>
      <div class="container">
        <div class="primeirobloco">
          <p class="title">
            Our site is undergoing<br class="desk"> a full regeneration,
          </p>
          <p>
            with the new experience launching in 2025.<br>
            This is just a preview.
          </p>
        </div>
        <div class="segundobloco">
        <div class="wrapper5050">
          <div class="bloco">
          If you're an investor, a purpose-driven company with ambitious goals, a talent, or someone eager to drive systemic change with us, please leave us a <a href="mailto:hello@riseventures.com.br" target="_blank">message.</a>
          </div>
          <div class="bloco">
            Join us as we rise to our planet's biggest challenge
            <div class="bloco-menor">
              <div class="esq">
                <a href="https://www.linkedin.com/company/rise_ventures/?originalSubdomain=pt" target="_blank"> <img src="<?php echo $images?>linkedin.svg" alt="image"></a>
                <a href="https://www.instagram.com/rise_ventures/" target="_blank"> <img src="<?php echo $images?>insta.svg" alt="image"></a>
              </div>
              <div class="dir">
              <a href="mailto:hello@riseventures.com.br" target="_blank">hello@riseventures.com.br</a><br><br>
              Aya Hub • nº 28<br> 
              Alameda Rio Claro • Bela Vista<br> 
              São Paulo • SP • Brazil<br>
              01332-010
              </div>
            </div>
          </div>
        </div> 
        </div>
      </div>
    </section>  

    <? include ('assets/footer.php') ?>
  </body>
</html>