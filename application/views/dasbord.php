<div class="containert-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/kebab.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/kebab.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <div class="row text-center mt-4">
    <?php foreach ($barang as $brg) : ?>
      <div class="card ml-4" style="width: 16rem;">
        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $brg->nama_brg; ?></h5>
          <small><?php echo $brg->keterangan; ?></small><br>
          <span class="badge bg-light text-dark mb-3">Rp.<?php echo $brg->harga; ?></span><br>
          <a href="#" class="btn btn-sm btn-primary">Cart</a>
          <a href="#" class="btn btn-sm btn-success">detail</a>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>