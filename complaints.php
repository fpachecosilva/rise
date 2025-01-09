<!DOCTYPE HTML>
<html>
	<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>
    <? $paginaAtual = 'Complaints Channel'; $tituloPagina = $paginaAtual ." - ". $empresa; ?>
    <title><?php echo $tituloPagina ?></title>
  </head>

  <body id="privacy">
		<section class="privacy page">
			<nav id="menu">
        <div class="container">
          <a href="<?php echo $url ?>"> 
            <img src="<?php echo $images?>logo.svg" alt="image">
          </a>  
        </div>
      </nav>
			<div class="container txts">
				<p class="title">Complaints Channel</p>

				<p>
					This space is a secure channel of communication with Rise Life-centered Investments to send complaints about acts or actions that do not comply with our principles and with the Code of Ethics, Compliance Policy, Risk Management Policy and current policies.<br><br>
					Complaints can be made through the email <a href="mailto:compliance@riseventures.com.br"><strong>compliance@riseventures.com.br</strong></a> or by filling out <a href="https://docs.google.com/forms/d/e/1FAIpQLSctm7UVEcT-fvKVQeP4kP5gNIu6rKfb21W0erzbWsSvDcmMbw/viewform" target="_blank">this form</a> anonymously.<br><br>
					In this way, you will be contributing with the Compliance Team in the investigation process.<br><br>
					Rise is committed to secrecy, seriousness and caution regarding requests for complaints of violation of the ethical guidelines contained in the ethics and/or current legislation, as well as the commitment to investigate the fact and not retaliate or adopt any coercive measures against the employee or third party who makes the communication in good faith.
				</p>

			</div>
		</section>

    <?php include ('assets/footer.php') ?>
  </body>
</html>