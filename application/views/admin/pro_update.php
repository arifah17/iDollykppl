<?php
    if(!$this->session->has_userdata('username')){
        redirect('Admin/index');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iDolly Admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/adm/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/adm/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/adm/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/adm/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Product
                            <a style="float: right;" href="<?php echo base_url()."index.php/product/readProduct"; ?>">Show Product</a>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="<?php echo base_url()."index.php/product/Updatedata/$id"; ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>ID.product</label>
                                    <input name="id" class="form-control" value="<?php echo $id;?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input name="nama_product" class="form-control" value="<?php echo $nama_product;?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="3" value=""><?php echo $deskripsi;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input name="harga" class="form-control" value="<?php echo $harga;?>">
                                </div>
                                <div class="form-group">
                                     <label>Gambar</label>
                                     <img style="width: 250px; height: 200px;" src="<?php echo base_url()."upload/".$gambar;?>">
                                     <input name="gambar" type="file">
                                </div>
                                <button type="submit">Add Product</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
