<?php

/* Global Variables */

$candidate['page-title'] = 'Detail Macam Tipe'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Macam Tipe'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

			
		<?php foreach ($tipeD as $d) {} ?>	
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				 
				<h1><?php echo $d->judul; ?></h1>
				<p class="breadcrumb"><a href="main-v1.php">Home</a> / <?php echo $d->judul; ?></p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row">		
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h3 class="animate-onscroll no-margin-top"><?php echo $d->judul; ?></h3>
								<div align="center"><img style="height:540px; width:480px;" src="<?php echo base_url().$d->gambar?>" alt="" ></div>
								<p class="animate-onscroll"><?php echo $d->keterangan; ?></p>
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