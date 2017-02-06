<?php

/* Global Variables */

$candidate['page-title'] = 'Team'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Team'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>	
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Team</h1>
				<p class="breadcrumb"><a href="">Home</a> / Team</p>
				
			</section>
			<!-- Page Heading -->
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<h3 class="animate-onscroll no-margin-top">Meet our team</h3>
						
						<?php
						
						$team_member = array(
							'class' => 'big',
							'img' => 'img/team/1.jpg',
							'job' => 'Project Manager',
							'name' => 'Rayan Suryadikara',
							'description' => '<p>Puji dan syukur kami panjatkan kehadirat Allah SWT atas segala berkat, rahmat, taufik, serta hidayah-Nya yang tiada terkira besarnya, sehingga kami dapat menyelesaikan project dengan judul ”SISTEM PAKAR UNTUK MENGETAHUI TIPE KEPRIBADIAN SESEORANG MELALUI KONSEP ENNEAGRAM DALAM MEMBANTU PENGEMBANGAN DIRI MENGGUNAKAN METODE FUZZY K-NEAREST NEIGHBOR”. Sistem ini diharapkan dapat membantu seseorang mengetahui kepribadiannya sehingga dapat mengembangkan potensi diri yang dimilikinya. Tidak lupa pula saya ucapkan terima kasih kepada tim saya Faisol, Andri, Ubaid dan Khoir yang telah bekerja keras susah payah demi selesainya project ini. Tentunya dedikasi kalian tak akan terlupakan sepanjang masa . </p>',
							'facebook' => '#',
							'twitter' => '#',
							'google' => '#',
							'youtube' => '#',
							'flickr' => '#',
							'email' => '#',
							'twitter-follow' => '#'
						);
						
						include('assets/includes/pages/team-member.php');
						
						?>
						
						
						
						<div class="row">
							
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/2.jpg',
									'name' => 'Faisol Andi Sefihara',
									'job' => 'Web Programmer',
									'description' => '<p></p>',
									'facebook' => '#',
									'twitter' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
							</div>
							
							
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/3.jpg',
									'name' => 'Andri Warda P.',
									'job' => 'Documentation',
									'description' => '<p> </p>',
									'facebook' => '#',
									'twitter' => '#',
									'google' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
							</div>
							
							
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/4.jpg',
									'name' => 'M. Ubaidillah',
									'job' => 'Documentation',
									'description' => '<p></p>',
									'facebook' => '#',
									'twitter' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
							</div>
							
							
							<div class="col-lg-3 col-md-3 col-sm-6">
								
								<?php
						
								$team_member = array(
									'img' => 'img/team/5.jpg',
									'name' => 'Abdul Khoir',
									'job' => 'Web Designer',
									'description' => '<p></p>',
									'facebook' => '#',
									'twitter' => '#',
									'google' => '#',
									'twitter-follow' => '#'
								);
								
								include('assets/includes/pages/team-member.php');
								
								?>
							
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