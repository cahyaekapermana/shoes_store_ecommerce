<div class="kotak2">

    <div class="row">

        <?php foreach ($tampil_article->result() as $tpl) { ?>

            <div class="col-sm-4">
                <img src="<?php echo base_url() ?>assets/admin/img/article/<?php echo $tpl->gambar ?>" class="img-responsive" style="width:100%" alt="Image">
                <div>
                    <p><?php echo $tpl->judul ?></p>
                    <a href="<?php echo site_url('c_customer/v_detail_article/' . $tpl->id) ?>">Baca Selengkapnya</a>
                </div>
                <br><br>
            </div>

        <?php } ?>

    </div>
</div>