<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>P O L A L O Y D</title>
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<style type="text/css">

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="font-family: Lato-Black; font-size: 28px;">P O L A L O Y D</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url()?>index.php/My_Controller/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                	<li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/readDataKomentar"><i class="fa fa-lg fa-comments"> Pertanyaan User</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/admin"><i class="fa fa-lg fa-edit"> Ganti Password </i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>index.php/My_Controller/slider"><i class="fa fa-lg fa-desktop"> Slider</i></a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-lg fa-image"> Gallery</i></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gallery
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/readDataKomentar"><i class="fa fa-lg fa-comments"> Pertanyaan User</i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/admin"><i class="fa fa-lg fa-edit"> Ganti Password </i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/My_Controller/slider"><i class="fa fa-lg fa-desktop"> Slider</i></a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-lg fa-image"> Gallery</i></a>
                            </li>
                        </ol>
                    </div>
                </div>

              <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo validation_errors();?>

                            <?php echo form_open_multipart('My_Controller/createGallery'); ?>
                            
                            <table>
                                <div class="form-group">
                                    <label for="f_caption_gallery">Caption</label>
                                    <input class="form-control" type="text" name="f_caption_gallery" required>
                                </div>
                                <div class="form-group">
                                    <label for="f_occasion_gallery">Occasion</label>
                                    <input class="form-control" type="text" name="f_occasion_gallery" required>
                                </div>
                                <div class="form-group">
                                    <label for="f_gambar_gallery">Gambar</label>
                                    <input type="file" name="f_gambar_gallery" size="20">
                                </div>
                                <div class="form-group">
                                    <label for="f_keterangan_gallery">Keterangan</label>
                                    <input class="form-control" type="text" name="f_keterangan_gallery" required>
                                </div>

                                
                              <tr>
                                <td><input type="hidden" name="is_submit" value="1" /></td>
                                <button type="submit" name="submit" value="Submit" class="btn btn-default" style="margin-bottom: 20px; margin-top: 10px;">Submit Button</button>
                              </tr>
                            </table>

                        <?php echo form_close(); ?>
                </div>
                <!-- /.row -->

                <table align="center" style="width: 100%;">
                    <thead>
                        <th style="padding-right: 20px;"></th>
                        <th style="text-align: center;">ID</th>  
                        <th style="text-align: center;">Caption</th>
                        <th style="text-align: center;">Occasion</th>
                        <th style="text-align: center;">Gambar</th>
                        <th style="text-align: center;">Keterangan</th>
                    </thead>
                    <form method="post" action="<?php echo base_url()?>index.php/My_Controller/delete_gallery"> <!-- delete banyak row -->
                    <tbody style="text-align: center;">
                        <?php foreach ($data2 as $z) { ?>
                        <tr>
                        <td><input type="checkbox" name="gallery[]" value="<?php echo $z['ID_gallery']?>"></td>
                        <td><?php echo $z['ID_gallery']; ?></td>
                        <td><?php echo $z['caption_gallery']; ?></td>
                        <td><?php echo $z['occasion_gallery']; ?></td>
                        <td><img alt="" src="<?php echo base_url(). $z['gambar_gallery']; ?>" class="img-circle img-responsive" height="200" width="200" style="display: inline-block;"/></td>
                        <td><?php echo $z['keterangan_gallery']; ?></td>

                        <td align="center">
                            <a href="<?php echo base_url()."index.php/My_Controller/deletegallery".$z['ID_gallery']; ?>"><button class="btn-danger" style="border: solid 1px; margin-top: 10px; margin-bottom: 10px;">Delete</button></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                        <input class="btn-primary" type="submit" value="Delete All Checked">
                    </form>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url()?>assets/admin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
