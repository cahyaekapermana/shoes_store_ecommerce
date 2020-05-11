<!-- <h1>Welcome <?php echo $this->session->userdata('s_username'); ?> </h1>
<h1>Anda Sebagai <?php echo $this->session->userdata('s_level'); ?> </h1> -->


<h2>Daftar Produk</h2>
<?php
foreach ($produk as $row) {
?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="kotak">
      <form method="POST" action="<?php echo base_url(); ?>c_customer/tambah" method="POST" accept-charset="utf-8">
        <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/customer_template/images/' . $row['gambar']; ?>" /></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row['nama_produk']; ?></a>
          </h4>
          <h5>Rp. <?php echo number_format($row['harga'], 0, ",", "."); ?></h5>
          <p class="card-text"><?php echo $row['deskripsi']; ?></p>
        </div>
        <div class="card-footer">
          <a href="<?php echo base_url(); ?>c_customer/detail_produk/<?php echo $row['id_produk']; ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a>

          <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>" />
          <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
          <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
          <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
          <input type="hidden" name="qty" value="1" />
          <button type="submit" class="btn btn-dark"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
        </div>
      </form>
    </div>
  </div>
<?php
}
?>