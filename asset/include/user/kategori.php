<h1 class="text-center mt-5">Kategori</h1>
<div class="row d-flex justify-content-around">
  <?php foreach($allkategori as $kategori) : ?>
    <div class="card mb-3" style="width: 14rem;">
      <img src="asset/img/produk/<?= $kategori['img_kategori'] ?>" class="card-img-top mt-3" alt="..." height="150px">
      <div class="card-body">
        <h5 class="card-title"><?= $kategori['nama_kategori']; ?></h5>
      </div>
    </div>
    <?php endforeach; ?>
</div>
