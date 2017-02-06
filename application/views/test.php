<?php

/* Global Variables */

$candidate['page-title'] = 'Test'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Test'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

<section id="content">

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h3>SELAMAT MENGERJAKAN "<?php $pengguna=$this->session->userdata('pengguna'); echo "$pengguna";?>"</h3>
		<p class="breadcrumb"><a href="">Home</a> / Test</p>

	</section>
	<!-- Page Heading -->
	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-6 col-sm-12">

				<div class="animate-onscroll">
					<blockquote>"Jawablah pertanyaan sesuai dengan sifat anda !"</blockquote>
					</div>
					<form action="TambahData" method="post" id="">
						<input type="hidden" name="pengguna" value="<?php $this->session->userdata('pengguna');?>" /><br />
						<table width="200" border="1">
							<tr>
								<th width="7%">No</th>
								<th width="93%">Jawaban *). wajib diisi</th>
							</tr>
							<?php 
							$no=1;
							foreach ($query as $row) {
								 ?>
							<tr>
								<td><?php echo $no;?></td>
								<td><div class="col-lg-11 col-md-11 col-sm-9 animate-onscroll" style="color:ff0000;">*<br>
								</div>
								<br />
								<div class="col-lg-10 col-md-10 col-sm-9 animate-onscroll">
									<br />
									<input type="radio" name="opsino<?php echo $row->ID_SOAL;?>" value="<?php echo "$row->TIPE_A"; ?>" id="A<?php echo $no;?>"/required><label for="A<?php echo $no;?>"> <?php echo "$row->JAWABAN_A"; ?></label><br />
									<input type="radio" name="opsino<?php echo $row->ID_SOAL;?>" value="<?php echo "$row->TIPE_B"; ?>" id="B<?php echo $no;?>"/required><label for="B<?php echo $no;?>"><?php echo "$row->JAWABAN_B"; ?></label><br />
									<input type="hidden" name="soalno<?php echo $no;?>" value="" /><br />
								</div></td>
							</tr>
							<?php
							$no++;
						}
					 ?>
					</table>
					<input type="submit" value="submitjawaban"/ onclick=selesai()>
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