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