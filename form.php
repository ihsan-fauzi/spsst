<?php
  include "header.php";
  include "menu.php";
?>

<!-- Page Content -->
<div id="page-content">

   <!-- Page Content -->
   <div class="content dimmed-effect padded-short">
    	<div class="row">

         <!-- Forms -->
         <form role="form">
            <div class="col-lg-12">
               <!-- Box - Education & Jobs -->
               <div class="resume-box animated slide-in-left">
                  <i class="title-icon text-blue flaticon-document56"></i>
                  <h1>Form Pendaftaran</h1>
                  <hr />
                  <!-- Post Carousel -->
                  <div class="post-carousel animated">
                    <!-- Single Post -->
                    <article class="post post-carousel-item">
                        <div class="post-image"><img src="images/blog/student.png" alt="" /></div>
                        <div class="post-content-holder">
                            <div class="post-content">
                                <div class="post-info clearfix">
                                   <h3>Data Diri</h3>
                                </div>
                                <div class="post-text">
                                   <div class="form-group">
                                     <label for="inputNISN">NISN</label>
                                     <input type="text" class="form-control" id="inputNISN" name="nisn" placeholder="Masukkan NISN Jika Ada">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputNama">Nama</label>
                                     <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukkan Nama Lengkap">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputJenisKelamin">Jenis Kelamin</label>
                                     <input type="text" class="form-control" id="inputJenisKelamin" name="jenisKelamin" placeholder="Pilih Jenis Kelamin">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputTempatLahir">Tempat Lahir</label>
                                     <input type="text" class="form-control" id="inputTempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputTanggalLahir">Tanggal Lahir</label>
                                     <input type="text" class="form-control" id="inputTanggalLahir" name="tanggalLahir" placeholder="Pilih Tanggal Lahir">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputAlamat">Alamat Tempat Tinggal</label>
                                     <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukkan Alamat Tempat Tinggal">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Single Post -->
                    <article class="post post-carousel-item">
                        <div class="post-image"><img src="images/blog/school.png" alt="" /></div>
                        <div class="post-content-holder">
                            <div class="post-content">
                                <div class="post-info clearfix">
                                    <h3>Data Sekolah</h3>
                                </div>
                                <div class="post-text">
                                   <div class="form-group">
                                     <label for="inputNama">Sekolah Asal</label>
                                     <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukkan Nama Lengkap">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputJenisKelamin">Kota/ Kabupaten Sekolah Tujuan</label>
                                     <input type="text" class="form-control" id="inputJenisKelamin" name="jenisKelamin" placeholder="Pilih Jenis Kelamin">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputTempatLahir">Jenis Sekolah Tujuan</label>
                                     <input type="text" class="form-control" id="inputTempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputTanggalLahir">Sekolah Tujuan</label>
                                     <input type="text" class="form-control" id="inputTanggalLahir" name="tanggalLahir" placeholder="Pilih Tanggal Lahir">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputAlamat">TKB Tujuan</label>
                                     <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukkan Alamat Tempat Tinggal">
                                  </div>
                                  <div class="form-group">
                                     <label for="inputIjazah">Upload Ijazah Pendidikan Terakhir</label>
                                     <input type="file" id="inputIjazah" name="ijazah">
                                     <p class="help-block">Example block-level help text here.</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </article>
                 </div>

                  <div class="row">
                     <!-- Box - Education & Jobs -->
                     <div class="col-lg-12 offset-lg-6">
                        <button type="button" class="btn btn-primary pull-right">Submit</button>
                     </div>
                  </div>

               </div>

            </div>
         </form>

    	</div>

      <div class="bottom-bar">
        	Sistem Penerimaan Siswa Sekolah Terbuka
      </div>

   </div>

</div>
<!-- Page Content / End -->

<script type="text/javascript">
   document.getElementById("menu3").className += " active";
</script>

<?php
  include "footer.php";
?>
