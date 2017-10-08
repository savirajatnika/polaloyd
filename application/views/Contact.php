<!-- Page content -->
<section id="contact" style="background-color: #2D302E" style="height: 0.8" >
    <div class="w3-content" style="max-width:1000px">
<!-- Contact Section -->
      <div class="w3-container" style="background-color: #2D302E">
        
        <h1 style="font-family: Lato-Black;color: white; text-align: center; font-size: 35px; color: white;">Contact Us</h1><br>
          <p style="font-family: Lato-Regular; font-size: 20px;text-align: center; color: white"> Sampaikan pertanyaan yang ingin anda sampaikan </p>
          <p class="w3-text-blue-grey w3-large"></p>
        
    <?php echo form_open(site_url('My_Controller/create'));?>
        <form method="POST" name="komentar">
        <div class="col-sm-5 col-sm-offset-1">
            <label style="color: white"> Nama</label>
              <p><input class="w3-input w3-padding-10" type="text" placeholder="Ex: John" required name="Name"></p>
            <label style="color: white"> Email</label>
              <p><input class="w3-input w3-padding-10" type="text" placeholder="Ex: 1 orang" required name="People"></p>
              <label style="color: white"> No. Telfon </label>
                <p><input class="w3-input w3-padding-10" type="number" placeholder="Ex: 1 orang" required name="number"></p>
              </div>

          <div class="col-sm-5">
              <label style="color: white"> Pesan</label>
                <p><textarea class="w3-input w3-padding-10" type="text" placeholder="Masukkan pesan anda disini" required name="Message" rows="7"></textarea></p> 
                <p style="text-align: center"><button type="submit" name="submit" value="Submit" class="btn btn-default">Send Message</button></p>
              </div>
        </form>
    <!-- <div style="position: absolute; top: 100px; z-index: 1000; background-color: yellow;">
      <?php echo $this->session->flashdata('sukses'); ?> -->
      </div>




    <!-- <?php echo $_SESSION['sukses'] ?> -->
    </div>
  </section>
