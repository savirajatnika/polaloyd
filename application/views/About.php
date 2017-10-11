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

  #borderimg2 { 
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url(<?php echo base_url()?>img/border.png) 30 stretch; /* Safari 3.1-5 */
    -o-border-image: url(<?php echo base_url()?>img/border.png) 30 stretch; /* Opera 11-12.1 */
    border-image: url(<?php echo base_url()?>img/border.png) 30 stretch;
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
        
        <!-- Collection of nav links and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse" style="float: right;">
    <ul class="nav navbar-nav">
      <li><a href="#About" class="w3-bar-item w3-button">About</a> </li>
      <li><a href="<?php echo 'catalog'; ?>" class="w3-bar-item w3-button">Ideas</a></li>
      <li><a href="<?php echo 'contact'; ?>" class="w3-bar-item w3-button">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- Page content --> 
<div class="w3-content" style="max-width:1100px">

  <!-- About Section --> 
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large">
      <img class="img-responsive" id="borderimg2" alt="about" width="1024" height="766" style="display: block; margin: auto;" src="<?php echo base_url().'img/1.png'; ?>" >
    </div>
    <hr>
    <div class="w3-col m6 w3-padding-large" id="borderimg2">
      <h1 class="w3-center">About Us</h1><br>
      <h4 class="w3-center"><strong>Since 2010</strong></h4>
      <p class="w3-large" style="text-align: justify;">Fauzia Makeup melayani permintaan rias untuk segala event mulai dari:</p>
      <ul class="w3-large" style="text-align: justify;">
        <li>Arisan</li> 
        <li>Wisuda</li>
        <li>Pernikahan</li>
        <li>Dan berbagai event lainnya</li> 
      </ul>
      <p class="w3-large" style="text-align: justify;">Fauzia Makeup berpusat di Gresik, tapi tetap menerima permintaan rias luar kota dalam lingkup Jawa Timur. Kepuasan pelanggan adalah acuan kami untuk terus berkembang.</p>
      <!-- <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
    </div>
  </div>
</div>

<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="#" title="Fauzia Makeup" target="_blank" class="w3-hover-text-green">5215100090</a></p>
</footer>

</body>
</html>