<?php
    if(!$this->session->has_userdata('username')){
        redirect('MyController/home');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>iDolly</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php $this->load->view('sesudah/header') ?>
         <h3 class="w3_agile_head"> Form Order</h3>
    <br>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Jumlah</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    //var_dump($this->cart->contents());
                    $i=0;
                    foreach ($this->cart->contents() as $items) : 
                    $i++;
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $items['name'] ?></td>
                    <td><?= $items['qty'] ?></td>
                    <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
                    <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td align="right" colspan="4">Total </td>
                    <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                </tr>
            </tfoot>
        </table>
        <div class="row">
             <div class="col-md-6 col-md-offset-1">
            <form method="POST" action="<?php echo site_url().'/ShoppingCart/addOrder'?>">
            <div class="form-group">
                    <label>Tanggal Pengiriman</label>
                    <input name="tanggal" class="form-control">
             </div>
             <div class="form-group">
                    <label>Alamat Pengiriman</label>
                    <input name="alamat" class="form-control" required>
             </div>
             <button type="submit">Pesan</button>
             </form>
        </div>
        </div>
       
        <?php $this->load->view('sesudah/footer') ?>
    </body>
</html>