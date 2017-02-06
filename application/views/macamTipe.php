<?php

/* Global Variables */

$candidate['page-title'] = 'Macam Tipe'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Macam Tipe'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>

		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Macam Tipe</h1>
				<p class="breadcrumb"><a href="main-v1.php">Home</a> / Macam Tipe</p>	
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">			
				<div class="row">		
					<div class="col-lg-12 col-md-12 col-sm-12">					
						<div class="row">
						<?php foreach ($tipe as $t) {
								# code...
							 ?>	
							<div class="col-lg-4 col-md-4 col-sm-12 animate-onscroll">
								
								<div class="issue-block">
									
									<div class="issue-image">
										<img src="<?php echo base_url().$t->gambar?>" alt="">
									</div>
									
									<div class="issue-content">
									
										<h4><?php echo $t->judul; ?></h4>
										<p><?php echo substr($t->keterangan,0,115)?></p>
										
										<a class="button big button-arrow" href="<?php echo site_url('C_Main/single/'.$t->id);?>" target="_blank">Read more</a>
									
									</div>
									
								</div>
							
							</div>
							<?php } ?>	
						</div>
						<br><br>
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