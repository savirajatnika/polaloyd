  <!DOCTYPE html>
<html>
<head>
<title>P O L A L O Y D </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/polaloyd.css">


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
    <nav role="navigation" class="navbar navbar-default" id="plydheader">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand " id="plydlogo" >P O L A L O Y D</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse plydheadercolor">
          <ul class="nav navbar-nav">
            <li><a href="#about" class="w3-bar-item w3-button" id="plydheaderfont">About</a> </li>
            <li><a href="#portfolio" class="w3-bar-item w3-button" id="plydheaderfont">Gallery</a> </li>
            <li><a href="#contactt" class="w3-bar-item w3-button"  id="plydheaderfont">Contact</a></li>
            <li><a href="#" class="w3-bar-item w3-button"  id="plydheaderfont">Login</a></li>

          </ul>
        </div>
    </nav>                           

<!--..................................................SLIDER..................................................-->
    <header id="home" class="carousel slide">
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
<div class="plydcontent" id="about" >

  <!-- About Section --> 
  <div class="w3-row w3-padding-64 plydblue">
    <div align="center" class="w3-col m6">
      <img class="img-responsive" alt="about" width="312" height="312" src="<?php echo base_url()?>img/100.jpg">
    </div>
    <div align="center" class="w3-col m6 w3-padding-large">
      <h1 class="w3-center plydcontenttitle" >P O L A L O Y D</h1><br>
      <h2 class="w3-center plydcontenttitle">Jasa cetak foto polaroid</h2>
      <p class="w3-large plydcontentisi" >
      Polaloyd menghadirkan cara baru untuk mencetak foto dan momen-momen favorit dalam hidupmu. Di Polaloyd, kamu bisa mengubah foto-fotomu menjadi produk cetakan yang menarik dan praktis. Produk cetakan ini berbentuk polaroid, photostrip, dan square photo.
      <br>
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
                    <h2 class="section-heading plydgalleryjudul ">Gallery</h2>
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

<!--..................................................CONTACT..................................................-->

<!-- Page content -->
<section class="plydblue" id="contactt">
    <div class="w3-content">
<!-- Contact Section -->
      <div class="w3-container">
        
        <h1 class="plydcontactjudul">Contact Us</h1><br>
          <p class="plydcontactp"> Sampaikan pertanyaan anda melalui form dibawah ini: </p><br>
          <p class="w3-text-blue-grey w3-large"></p>
        
    <?php echo form_open(site_url('My_Controller/create'));?>
        <form method="POST" name="komentar">
        <div class="col-sm-5 col-sm-offset-1">
            <label class="plydcontactisi">Nama</label>
              <p><input class="w3-input" type="text" placeholder="Ex: John" required name="Name" required="required" ></p>
            <label class="plydcontactisi">Email</label>
              <p><input class="w3-input" type="Email" placeholder="Ex: polaloyd@gmail.com" required name="Email" required="required"></p>
              <label class="plydcontactisi">Nomor Telepon</label>
                <p><input class="w3-input" type="Number" placeholder="Ex: 081122223333" required name="No_Telp" required="required"></p>
              </div>

          <div class="col-sm-5">
              <label class="plydcontactisi"> Pesan</label>
                <p><textarea class="w3-input" type="text" placeholder="Masukkan pesan anda disini" required name="Message" rows="7"></textarea></p> 
                <p class="plydsendcontact"><br><button type="submit" name="submit" value="Submit" class="w3-button w3-amber">Send Message</button></p>
              </div>
        </form>
      </div>
    </div>
  </section>
<!-- Footer -->
  <div class="w3-container plydfooter">
  
    <div class="row">
    <br>
    <div class="row">
      <ul class="pull-left plydpadbot">
          <li><h5 class="plydh5">&copy; 2017 <a> P O L A L O Y D </a></h5></li>
        </ul>
    </div>        
    </div>
  </div>

    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
