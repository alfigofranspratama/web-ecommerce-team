<h1 class="text-center mt-5">5 produk terbaru</h1>
<div class="row justify-content-around">
    <?php foreach($allproduk as $produk) : ?>
    <div class="card mb-3" style="width: 14rem;">
    <img src="asset/img/produk/<?= $produk['images']; ?>" class="card-img-top pt-2" alt="..." height="150px">
    <div class="card-body">
        <h5 class="card-title"><?= $produk['produk']; ?></h5>
        <p class="card-text" style="text-decoration: line-through;">Rp<?= number_format($produk['harga']); ?></p>
        <p class="card-text text-danger">Rp<?= number_format($produk['harga_diskon']); ?></p>
        <p class="card-text text-secondary" style="font-size:12px;">Stok : <?= $produk['stok']; ?></p>
    </div>
    </div>
    <?php endforeach; ?>
</div>