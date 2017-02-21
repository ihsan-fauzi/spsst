<?php
  include "header.php";
  include "menu.php";
?>

<!-- Page Content -->
<div id="page-content">

	<!-- Profile -->
	<section id="profile" class="black">

    	<!-- Background photo -->
    	<div id="profile-bg" class="editable-alpha" data-alpha="40"><img src="images/backgrounds/banner01.png" alt="" /></div>

    	<div class="content padded dark">

        	<!-- Top Bar -->
        	<div class="top-bar">

            	<!-- Social media -->
            	<div class="pull-left">
                	<span class="hiddend-sm hidden-xs">Dinas Pendidikan Provinsi Jawa Barat &nbsp; &nbsp; </span>
                    <ul class="social-icons si-pull-up">
                        <li><a href="https://twitter.com/disdikjbr"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

                <!-- URL -->
                <div class="pull-right">
                	<a href="http://disdik.jabarprov.go.id" class="hidden-xs">disdik.jabarprov.go.id</a>
                </div>

            </div>

			<!-- Profile Content -->
            <div class="profile-content">
            	<h1 class="short">Sistem Penerimaan Siswa Sekolah Terbuka</h1>
                <h5>Provinsi <span class="text-primary">Jawa Barat</span></h5>
                <a href="form.php" class="btn btn-primary" target="_blank">Daftar Sekarang</a>
            </div>

            <!-- Bottom Bar -->
            <div class="bottom-bar profile-bottom-bar hidden-xs">

            	<!-- Contact List -->
                <ul class="list-inline">
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-map-marker"></i>Alamat: Jln. Dr. Radjiman No.6 Bandung - 404171</li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-phone"></i>Telp: (022) 426-4318</li>
                  <li><i class="inline-icon icon-before-and-after text-primary fa fa-envelope"></i><a href="mailto:disdik@jabarprov.go.id">Email: disdik@jabarprov.go.id</a></li>
                </ul>

            </div>

        </div>

    </section>
    <!-- Profile / End -->

</div>
<!-- Page Content / End -->

<script type="text/javascript">
   document.getElementById("menu1").className += " active";
</script>

<?php
  include "footer.php";
?>
