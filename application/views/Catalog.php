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
            <li><a href="#Catalog" class="w3-bar-item w3-button">Catalog</a></li>
            <li><a href="<?php echo 'contact'; ?>" class="w3-bar-item w3-button">Contact</a></li>
          </ul>
        </div>
    </nav>
</div>

<!-- Page content -->
<!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="catalog">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Catalog</h1><br>
          
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img class="img-responsive" alt="about" width="1024" height="766" style="display: block; margin: auto;" src="<?php echo base_url().'img/4.jpg'; ?>" >
    </div>

  </div>

  <footer class="w3-center w3-light-grey w3-padding-32">
    <p>Powered by <a href="#" title="Female Wardrobe" target="_blank" class="w3-hover-text-green">5215100090</a></p>
  </footer>

</body>
</html>