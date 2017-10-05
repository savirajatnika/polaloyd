
<!DOCTYPE html>
<html>
<title>About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/npm.js"></script>
<script src="<?php echo base_url()?>assets/js/index.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

<body>

<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(<?php echo base_url()?>assets/fonts/ampera.ttf);
}
</style>

<nav role="navigation" class="navbar navbar-default"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- <div class="navbar-header"> -->
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a href="<?php echo base_url(); ?>" class="navbar-brand" style="font-family: myFirstFont;">Fauzia Makeup</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse" style="float: right;">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo 'about'; ?>" class="w3-bar-item w3-button">About</a> </li>
            <li><a href="<?php echo 'catalog'; ?>" class="w3-bar-item w3-button">Catalog</a></li>
            <li><a href="#Contact" class="w3-bar-item w3-button">Contact</a></li>
          </ul>
        </div>
    </nav>
</div>

<!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

  <footer class="w3-center w3-light-grey w3-padding-32">
    <p>Powered by <a href="#" title="Female Wardrobe" target="_blank" class="w3-hover-text-green">5215100090</a></p>
  </footer>

</body>
</html>