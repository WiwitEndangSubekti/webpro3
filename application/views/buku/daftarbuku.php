
<?php if(validation_errors()){?>
               <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>

<?= $this->session->flashdata('pesan'); ?>
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-left my-5">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>

		<div style="padding: 25px;">
			<div class="x_panel">

				<div class="x_content">

					<!-- Tampilkan semua produk -->
					<div class="row">
						<!-- looping products -->
						<?php foreach ($buku as $buku) { ?>
							<div class="col-md-2 col-md-3">
								<div class="thumbnail" style="height: 370px;">
									<img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" style="max-width:100%; max-height: 100%; height: 200px; width: 180px">

									<div class="caption">
										<h5 style="min-height:30px;"><?= $buku->pengarang ?></h5>
										<h5><?= $buku->penerbit ?></h5>
										<h5><?= substr($buku->tahun_terbit, 0, 4) ?></h5>
										<p>
											<?php
											if ($buku->stok < 1) {
												echo "<i class=' disabled btn btn-outline-primary fas fw fa-ban' style='color:red'> Stock&nbsp;&nbsp 0</i>";
												echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> Booking&nbsp;&nbsp 0</i>";
											} else {
													 
											}
											?>

											<a class="btn btn-outline-warning fas fw fa-search" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a></p>
									</div>
								</div>
							</div> <?php } ?>
						<!-- end looping -->
					</div>

				</div>
			</div>
		</div>
