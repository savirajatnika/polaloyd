  <!DOCTYPE html>
<html>
<head>
<title>Fauzia Makeup  </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">


<!-- template portfolio / gallery -->
<link href="<?php echo base_url()?>assets/gallery/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/gallery/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/gallery/css/agency.min.css" rel="stylesheet">

<style>

input::-webkit-input-placeholder {
color: #6b6b6b !important;
text-transform: lowercase;
}
 
input:-moz-placeholder { /* Firefox 18- */
color: #6b6b6b !important;  
text-transform: none;
}
 
input::-moz-placeholder {  /* Firefox 19+ */
color: #6b6b6b  !important;  
text-transform: none;
}
 
input:-ms-input-placeholder {  
color: #6b6b6b  !important;  
text-transform: none;
}

textarea::-webkit-input-placeholder {
color: #6b6b6b  !important;
text-transform: none;
}
 
textarea:-moz-placeholder { /* Firefox 18- */
color: #6b6b6b  !important;  
text-transform: none;
}
 
textarea::-moz-placeholder {  /* Firefox 19+ */
color: #6b6b6b  !important;  
text-transform: none;
}
 
textarea:-ms-input-placeholder {  
color: #6b6b6b  !important;  
text-transform: none;
}

  @font-face {
    font-family: Ampera;
    src: url(<?php echo base_url()?>assets/fonts/ampera.ttf);
}

@font-face {
    font-family: Raleway-Black;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-Black.ttf);
}

@font-face {
    font-family: Raleway-BlackItalic;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-BlackItalic.ttf);
}

@font-face {
    font-family: Raleway-Medium;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-Medium.ttf);
}

@font-face {
    font-family: Raleway-MediumItalic;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-MediumItalic.ttf);
}

@font-face {
    font-family: Lato-Regular;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Regular.ttf);
}

@font-face {
    font-family: Lato-Bold;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Bold.ttf);
}

@font-face {
    font-family: Lato-Black;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Black.ttf);
}
</style>

</head>
<body>
<!--..................................................HEADER..................................................-->
    <nav role="navigation" class="navbar navbar-default" style="top: 0; z-index: 50000; position: fixed; width: 100%; height: 55px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand" style="border: 2px #7F8984; border-radius: 40px; font-family: Lato-Black; font-size: 24px; background-color: #F2E682; opacity: 1;">P O L A L O Y D</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse" style="float: right; color: #7F8984;">
          <ul class="nav navbar-nav">
            <li><a href="#about" class="w3-bar-item w3-button" style="font-family: Lato-Regular; color: #FFFFFF;">About</a> </li>
            <li><a href="#portfolio" class="w3-bar-item w3-button" style="font-family: Lato-Regular; color: #FFFFFF;">Gallery</a> </li>
            <li><a href="#contact" class="w3-bar-item w3-button" style="font-family: Lato-Regular; color: #FFFFFF;">Contact</a></li>
          </ul>
        </div>
    </nav>                           

<!--..................................................SLIDER..................................................-->
    <header id="home" class="carousel slide">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <?php 
          $active = true;
          foreach ($data1 as $x) { ?>
            <div class="item <?php if($active){
              echo 'active';
              }else{
                echo '';
                } ?>"> 
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-size: 564px 564px; background-image:url('<?php echo base_url().$x['gambar_slider']; ?>'); background-color: #F2E682; "></div>
                <div class="carousel-caption">
                    <h2><?php echo $x['caption_slider']; ?></h2>
                  
                </div>
            </div>
            
            <?php $active=false;} ?> 
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#home" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>

<!--..................................................ABOUT..................................................-->

<!-- Page content --> 
<div class="w3-content" id="about" style="max-width:1600px; max-height: 800px;">

  <!-- About Section --> 
  <div class="w3-row w3-padding-64" style="background-color: #162C49;">
    <div align="center" class="w3-col m6">
      <img class="img-responsive" alt="about" width="312" height="312" src="<?php echo base_url()?>img/100.jpg">
    </div>
    <div align="center" class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style="font-family: Raleway-Black; color: white; padding-right: 100px;">P O L A L O Y D</h1><br>
      <h2 class="w3-center" style="font-family: Lato-Regular; color: white; padding-right: 100px;"><strong>Jasa cetak foto polaroid</strong></h2>
      <p class="w3-large" style="text-align: justify; font-family: Lato-Regular; color: white; padding-right: 100px;">
      Polaloyd menghadirkan cara baru untuk mencetak foto dan momen-momen favorit dalam hidupmu. Di Polaloyd, kamu bisa mengubah foto-fotomu menjadi produk cetakan yang menarik dan praktis. Produk cetakan ini berbentuk polaroid, photostrip, dan square photo.
      <br>
      <!-- Fauzia Makeup melayani permintaan rias untuk segala event mulai dari:</p>
      <ul class="w3-large" style="text-align: justify; list-style-image: url('<?php echo base_url()?>img/arrow.png');">
        <li><span style="vertical-align: top;">Arisan</span></li> 
        <li><span style="vertical-align: top;">Wisuda</span></li>
        <li><span style="vertical-align: top;">Pernikahan</span></li>
        <li><span style="vertical-align: top;">Dan berbagai event lainnya</span></li> 
      </ul> -->
      <!-- <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
    </div>
  </div>
</div>
<!-- <hr> -->
  <div class="w3-row" >
  </div>
<!--..................................................GALLERY..................................................-->

<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-family: Raleway-Black;">Gallery</h2>
                    <h3 class="section-subheading text-muted">Beberapa contoh hasil pekerjaan kami</h3>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data2 as $q) { ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <h3><?php echo $q['keterangan_gallery']; ?></h3>
                            </div>
                        </div>
                        <img src="<?php echo base_url(). $q['gambar_gallery']; ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $q['caption_gallery']; ?></h4>
                        <p class="text-muted"><?php echo $q['occasion_gallery']; ?></p>
                        <button>Pesan</button>
                    </div> 
                </div>  
                <?php } ?>
            </div>
        </div>   
    </section>         
    
<!--................................................TESTIMONIALS................................................-->

  <!-- <div class="container" id="testimonial">    
      <div class="row">
        <div class="col-md-12 column">    
          <h2 class="page-header" style="font-family: Raleway-Black; font-size: 35px;"><b>TESTIMONIALS</b><br><small style="font-family: Lato-Regular;">apa kata mereka?</small></h2>
        
        <div class="carousel slide" id="testimonials-rotate">

        <div class="carousel-inner">
        <?php 
          $active = true;
          // var_dump($data3);
          foreach ($data3 as $a) { ?>
            <div class="item 
            <?php if($active){
              echo 'active';
              }else{
                echo '';
                } ?>"
            style="border: solid 5px;"> 
              <br> 
              <div class="col-md-2" style="bottom: 10px;"><img alt="" src="<?php echo base_url(). $a['gambar_testimonials']; ?>" class="img-circle img-responsive"/></div>
              <div class="testimonials col-md-10">

                <h3 style="font-family: Georgia; color: black;">
                  "<?php echo $a['caption_testimonials']; ?>" <br><br>
                  <b><i>- <?php echo $a['nama_testimonials']; ?></i></b>
                </h3>

              </div>

            <div class="clearfix"></div>
            </div>

        <?php $active=false;} ?> 
        </div>
        </div>

        <div class="pull-right">
          <a class="left" href="#testimonials-rotate" data-slide="prev"><span><img src="<?php echo base_url()?>img/left.png""></span></a>
          <a class="right" href="#testimonials-rotate" data-slide="next"><span><img src="<?php echo base_url()?>img/right.png""></span></a>
        <div class="clearfix"></div>  
        </div>
        </div>
        </div>
  </div><hr>  -->

<!--..................................................CONTACT..................................................-->

<!-- Page content -->
<section id="contact" style="background-color: #162C49">
    <div class="w3-content">
<!-- Contact Section -->
      <div class="w3-container">
        
        <h1 style="font-family: Lato-Black;color: white; text-align: center; font-size: 35px; color: white;">Contact Us</h1><br>
          <p style="font-family: Lato-Regular; font-size: 20px;text-align: center; color: white"> Sampaikan pertanyaan anda melalui form dibawah ini: </p>
          <p class="w3-text-blue-grey w3-large"></p>
        
    <?php echo form_open(site_url('My_Controller/create'));?>
        <form method="POST" name="komentar">
          <div class="col-sm-5 col-sm-offset-1">
            <label style="font-family: Raleway-Medium; font-size: 18px;text-align: center; color: white">Nama</label>
              <p><input class="w3-input" type="text" placeholder="Ex: John" required name="Name" ></p>
            <label style="font-family: Raleway-Medium; font-size: 18px;text-align: center; color: white">Email</label>
              <p><input class="w3-input" type="text" placeholder="Ex: John@gmail.com" required name="Email"></p>
            <label style="font-family: Raleway-Medium; font-size: 18px;text-align: center; color: white">Nomor Telepon</label>
              <p><input class="w3-input" type="text" placeholder="Ex: 081122223333" required name="number"></p>
            <label style="font-family: Raleway-Medium; font-size: 18px;text-align: center; color: white">Date</label>
              <p><input class="w3-input" type="text" placeholder="<?php
                                                                    date_default_timezone_set("Asia/Jakarta");
                                                                    echo "Ex: " . date("d/m/Y") ;
                                                                  ?>" required name="Date"></p>

          </div>

          <div class="col-sm-5">
            <label style="font-family: Raleway-Medium; font-size: 18px;text-align: center; color: white"> Pesan</label>
               <p><textarea class="w3-input" type="text" placeholder="Masukkan pesan anda disini" required name="Message" rows="10"></textarea></p> 
               
          </div>
            <p style="color: white; font-family: Raleway-Medium;  margin-left:425px; width: 50px; text-align: center;"><br><button type="submit" name="submit" value="Submit" class="w3-button w3-amber">Send Message</button></p>

        </form>

    <!-- <div style="position: absolute; top: 100px; z-index: 1000; background-color: yellow;">
      <?php echo $this->session->flashdata('sukses'); ?> -->
      </div>
        


    <!-- <?php echo $_SESSION['sukses'] ?> -->
    </div>
  </section>
<!-- Footer -->
  <div class="w3-container" style="background-color: #2e2e2e">
  
    <div class="row">
    <br>
    <div class="row">
      <ul class="pull-left" style="padding-bottom: 8px;">
          <li><h5 style="color: white; text-align: left;">&copy; 2017 <a> P O L A L O Y D </a></h5></li>
        </ul>
    </div>        
    </div>
  </div>

    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/npm.js"></script>
    <script src="<?php echo base_url()?>assets/js/index.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/bootstrap/js/bootstrap.min.js"></script>




</body>
</html>
