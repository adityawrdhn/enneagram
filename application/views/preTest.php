<?php

/* Global Variables */

$candidate['page-title'] = 'Pretest'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Pretest'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

<section id="content">

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Ketahui Kepribadian Anda, Kembangkan Potensi Diri</h1>
		<p class="breadcrumb"><a href="">Home</a> / Test</p>

	</section>
	<!-- Page Heading -->




	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="animate-onscroll">
					<h3 class="no-margin-top">FORM PENDAFTARAN BEM FILKOM 2016/2017</h3>
				</div>

				<form action="mulaiTest" method="post">

						<h5>ISIKAN BIODATA ANDA *). Wajib Diisi</h5>

						<label>Nama*</label>
						<input type="text" name="nama" placeholder="Nama...." required>
						<br>
						<label>NIM*</label>
						<input type="text" name="nim" placeholder="NIM...." required>
						<br>
						<label>Nomor Telepon*</label>
						<input type="text" name="notelp" placeholder="Nomor Telepon...." required>
						<br>
						<label>Jenis Kelamin*</label><br>
						<!-- <input type="radio" id="jk1" name="jeniskelamin" value="Laki-laki" ><label for="Jenis Kelamin">Laki-Laki</label><br>
						<input type="radio" id="jk2" name="jeniskelamin" value="Perempuan" ><label for="Jenis Kelamin">Perempuan</label><br>
						 -->
						 <input type="radio" name="jenisKelamin" value="Laki-Laki" id="1"/required><label for="1"> Laki-laki</label><br />
						 <input type="radio" name="jenisKelamin" value="Perempuan" id="2"/required><label for="2"> Perempuan</label><br />
						 <?php $no=0;?>
						 <label>Umur*</label><br>
						<input type="number" name="umur" placeholder="Umur" /required></br></br>
						<label>Pilihan Kementrian/Biro Pertama*</label><br>
						<!-- <input type="radio" id="jk1" name="jeniskelamin" value="Laki-laki" ><label for="Jenis Kelamin">Laki-Laki</label><br>
						<input type="radio" id="jk2" name="jeniskelamin" value="Perempuan" ><label for="Jenis Kelamin">Perempuan</label><br>
						 -->
						 <input type="radio" name="Divisi1" value="Kepatuhan Dan Pengembangan Kabinet" id="A"/required><label for="A">Kepatuhan Dan Pengembangan Kabinet</label><br />
						 <input type="radio" name="Divisi1" value="Kajian dan Aksi Strategis" id="B"/required><label for="B">Kajian dan Aksi Strategis</label><br />
						 <input type="radio" name="Divisi1" value="Advokesma" id="C"/required><label for="C">Advokesma</label><br />
						 <input type="radio" name="Divisi1" value="Sosial Masyarakat" id="D"/required><label for="D">Sosial Masyarakat</label><br />
						 <input type="radio" name="Divisi1" value="Pemuda dan Olahraga" id="E"/required><label for="E">Pemuda dan Olahraga</label><br />
						 <input type="radio" name="Divisi1" value="Pengembangan Sumber Daya Manusia" id="F"/required><label for="F">Pengembangan Sumber Daya Manusia</label><br />
						 <input type="radio" name="Divisi1" value="Pendidikan dan Keilmuan" id="G"/required><label for="G">Pendidikan dan Keilmuan</label><br />
						 <input type="radio" name="Divisi1" value="Bisnis dan Mitra" id="H"/required><label for="H">Bisnis dan Mitra</label><br />
						 <input type="radio" name="Divisi1" value="Administrasi" id="I"/required><label for="I">Administrasi</label><br />
						 <input type="radio" name="Divisi1" value="Pusat Komunikasi dan Informasi" id="J"/required><label for="J">Pusat Komunikasi dan Informasi</label><br />

						 <label>Pilihan Kementrian/Biro Kedua</label><br>
						<!-- <input type="radio" id="jk1" name="jeniskelamin" value="Laki-laki" ><label for="Jenis Kelamin">Laki-Laki</label><br>
						<input type="radio" id="jk2" name="jeniskelamin" value="Perempuan" ><label for="Jenis Kelamin">Perempuan</label><br>
						 -->
						 <input type="radio" name="Divisi2" value="Kepatuhan Dan Pengembangan Kabinet" id="K"/><label for="K">Kepatuhan Dan Pengembangan Kabinet</label><br />
						 <input type="radio" name="Divisi2" value="Kajian dan Aksi Strategis" id="L"/><label for="L">Kajian dan Aksi Strategis</label><br />
						 <input type="radio" name="Divisi2" value="Advokesma" id="M"/><label for="M">Advokesma</label><br />
						 <input type="radio" name="Divisi2" value="Sosial Masyarakat" id="N"/><label for="N">Sosial Masyarakat</label><br />
						 <input type="radio" name="Divisi2" value="Pemuda dan Olahraga" id="O"/><label for="O">Pemuda dan Olahraga</label><br />
						 <input type="radio" name="Divisi2" value="Pengembangan Sumber Daya Manusia" id="P"/><label for="P">Pengembangan Sumber Daya Manusia</label><br />
						 <input type="radio" name="Divisi2" value="Pendidikan dan Keilmuan" id="Q"/><label for="Q">Pendidikan dan Keilmuan</label><br />
						 <input type="radio" name="Divisi2" value="Bisnis dan Mitra" id="R"/><label for="R">Bisnis dan Mitra</label><br />
						 <input type="radio" name="Divisi2" value="Administrasi" id="S"/><label for="S">Administrasi</label><br />
						 <input type="radio" name="Divisi2" value="Pusat Komunikasi dan Informasi" id="T"/><label for="T">Pusat Komunikasi dan Informasi</label><br />

						<br><br>
						<br><br>							
					<div class=" align-center animate-onscroll">
					</div>

					<div class="donate-button align-center animate-onscroll">
						<input type="submit" value="Mulai Test">
					</div>

				</form>

			</div>




		</div>

	</section>
	<!-- /Section -->

</section>



<?php

/* <footer> </footer> */
include ('assets/includes/footer.php');

/* JavaScript */
include ('assets/includes/foot.php');

?>