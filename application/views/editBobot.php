<?php

/* Global Variables */

$candidate['page-title'] = 'Kelola Bobot'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kelola Bobot'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headerPakar.php');

?>

<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Edit Bobot Data Training</h1>
		<p class="breadcrumb"><a href="">Edit Bobot</a></p>

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
							<th width="20%">Nomor Soal Training</th>
							<th width="50%">Bobot</th>
									<!-- <th width="20%">Pilihan A</th>
									<th width="20%">Pilihan B</th> -->
								</tr>
								<?php 
								foreach ($query as $row) {
									?>
									<form action="<?php echo base_url(); ?>C_Pakar/updateBobot/<?php echo "$row->ID_TRAINING";?>" method="post">
									<tr>	
										<td width="10%">
											Soal <?php $i=1; echo $i;?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL1; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL2; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL3; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL4; ?>">
										</t
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL5; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL6; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL7; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL8; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL9; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL10; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL11; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL12; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL13; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL14; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL15; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL16; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL17; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL18; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL19; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL20; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL21; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL22; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL23; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL24; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL25; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL26; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL27; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL28; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL29; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL30; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL31; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL32; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL33; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL34; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL35; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL36; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL37; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL38; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL39; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL40; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL41; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL42; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL43; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL44; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL45; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL46; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL47; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL48; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL49; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL50; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL51; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL52; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL53; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL54; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL55; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL56; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL57; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL58; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL59; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL60; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL61; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL62; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL63; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL64; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL65; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL66; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL67; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL68; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL69; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL70; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL71; ?>">
										</td>
									</tr>
									<tr>
										<td width="10%">
											Soal <?php $i++; echo $i; ?>
										</td>
										<td width="90%">
											<input type="text" name="soal<?php echo $i; ?>" value="<?php echo $row->SOAL72; ?>">
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