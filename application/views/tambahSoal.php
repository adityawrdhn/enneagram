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

			<h1>Tambah Soal Tes Kepribadian Enneagram</h1>
			<p class="breadcrumb"><a href="">Tambah Soal</a></p>

		</section>
		<!-- Page Heading -->


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">

					<div class="row">
						

							<h3 class="animate-onscroll no-margin-top"></h3>
							<table width="200" border="2">
								<tr>
									<!-- <th width="10%">No Soal</th> -->
									<th width="40%">Soal</th>
									<!-- <th width="30%">Pilihan A</th>
									<th width="30%">Pilihan B</th> -->
								</tr>
									<form action="<?php echo base_url(); ?>C_Pakar/addSoal" method="post">
										<tr>
											<td width="">
												<textarea rows="7" name="soal"></textarea>
											</td>
											<!-- <td width="30%">
												<textarea rows="7" name="pilihan_a"></textarea>
											</td>
											<td width="30%">
												<textarea rows="7" name="pilihan_b"></textarea>
											</td>	 -->	
										</tr>
										<div class="donate-button align-center animate-onscroll">
											<input type="submit" value="Tambah Soal">
											</div><br>
									</form>
							</table>
			
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