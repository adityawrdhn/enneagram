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

		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

			<h1>Edit Soal Tes Kepribadian Enneagram</h1>
			<p class="breadcrumb"><a href="">Edit Soal</a></p>

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
									<th width="10%">No Soal</th>
									<th width="30%">Soal</th>
									<!-- <th width="20%">Pilihan A</th>
									<th width="20%">Pilihan B</th> -->
								</tr>
								<?php 
								foreach ($query as $row) {
									?>
									<form action="<?php echo base_url(); ?>C_Pakar/updateSoal/<?php echo "$row->ID_SOAL";?>" method="post">
										<tr>
											<td width="10%">
												<input type="text" name="id_soal" value="<?php echo "$row->ID_SOAL"; ?>">
											</td>

											<td width="90%">
												<textarea rows="7" name="soal"><?php echo "$row->SOAL"; ?></textarea>
											</td>
										</tr>
										<div class="donate-button align-center animate-onscroll">
											<input type="submit" value="Update Soal">
											</div><br>
									</form>
									<?php
								}
								?>
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