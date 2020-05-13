<div class="kotak2">

    <input type="hidden" value="<?php echo $tampil_article_id['id'] ?>">

    <div class="card">
        <div class="card-header">
            Article
        </div>
        <br>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h3><?php echo $tampil_article_id['judul'] ?></h3>
                <img src="<?php echo base_url() ?>assets/admin/img/article/<?php echo $tampil_article_id['gambar']; ?>" alt="">
                <br><br>
                <p style="font-size: 15px"><?php echo $tampil_article_id['deskripsi'] ?></p>
            </blockquote>
        </div>
    </div>
</div>