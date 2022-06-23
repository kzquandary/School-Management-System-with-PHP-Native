<div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
                <div class="row page-titles mx-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Kelas</a></li>
			</ol>
    </div>
                <div class="row">

                <?php
                $mykelas = "SELECT * FROM anggota_kelas WHERE nim='$_SESSION[nim]'";
                $mykelas1 = mysqli_query($con, $mykelas);
                foreach ($mykelas1 as $data){
                ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="<?= $data['sampul']; ?>" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="ecom-product-detail.html" class="text-black"><?= $data['pelajaran']; ?></a></h4>
                                        <span class="price">
                                        <?php
                                        $namdos = "SELECT * FROM dosen WHERE kode_dosen='$data[kode_dosen]'";
                                        $namdos1 = mysqli_query($con, $namdos);
                                        foreach ($namdos1 as $data1){
                                            echo"$data1[nama]";
                                        }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                </div>
            </div>
</div>