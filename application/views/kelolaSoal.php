<?php

/* Global Variables */

$candidate['page-title'] = 'Kelola Soal'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kelola Soal'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headerPakar.php');

?>
<section id="content">	
	
	<section id="content">	

		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

			<h1>Kelola Soal Tes Kepribadian Enneagram</h1>
			<p class="breadcrumb"><a href="">Kelola Soal</a></p>

		</section>
		<!-- Page Heading -->


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">
					<a href="tambahSoal" class="button button-arrow">Tambah Soal</a>
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">

							<h3 class="animate-onscroll no-margin-top"></h3>
							<table width="200" border="2">
							<tr>
								<th width="7%">No</th>
								<th width="50%">Soal</th>
								<!-- <th width="20%">Pilihan A</th>
								<th width="20%">Pilihan B</th> -->
								<th width="20%">Action</th>
							</tr>
							<?php 
							$no=1;
							foreach ($query as $row) {
								 ?>
							<tr>
								<td width="7%"><?php echo $no;?></td>
								<td width="50%"><?php echo "$row->SOAL"; ?></td>
								<td width="20%"><a href="editSoal/<?php echo "$row->ID_SOAL";?>" class="button">Edit</a><a href="hapusSoal/<?php echo "$row->ID_SOAL";?>" onclick="return confirm('Anda yakin akan menghapus Soal ini?')" class="button">Hapus</a></td>
							</tr>
							<?php
							$no++;
						}
					 ?>
							</table>
						</div>
					</div>
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