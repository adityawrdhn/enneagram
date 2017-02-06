<?php

/* Global Variables */

$candidate['page-title'] = 'Dasboard'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Dasboard'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/headerPakar.php');

?>
<section id="content">	
	
	<section id="content">	

		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

			<h1>Selamat Datang Pakar Enneagram</h1>
			<p class="breadcrumb"><a href="">Dasboard</a></p>

		</section>
		<!-- Page Heading -->


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row">
				
				<div class="col-lg-9 col-md-9 col-sm-8">

					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">

							<!-- <h3 class="animate-onscroll no-margin-top">About us</h3> -->

							<p class="animate-onscroll">Kata Enneagram berasal dari bahasa Yunani ennea berarti sembilan dan grammos berarti sesuatu yang digambarkan. Tes ini dikembangkan oleh Oscar Ichazo (Psikolog kelahiran Bolivia) dan Claudio Naranjo (Psikiater kelahiran Chili) pada tahun 1950-an dan didasarkan pada pengajaran G.I.Gurdjieff. Kesembilan jenis kepribadian ini digambarkan dalam diagram yang masing-masing kepribadian saling memiliki hubungan. Saat ini ada banyak ahli teori psikologi yang memiliki penafsiran yang bervariasi terhadap tes Enneagram ini. Tes Enneagram ini juga merupakan salah satu tes psikologi yang paling banyak dipakai di dunia setelah tes psikologi MBTI.</p>

							<blockquote class="align-left animate-onscroll" style="width:90%">"SP Enneagram adalah sahabat Pakar Enneagram"</blockquote>
						</div>

					</div>
				</div>



				<!-- Sidebar -->
				<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

					<!-- Image Banner -->
					<div class="sidebar-box image-banner animate-onscroll">
						<a href="https://www.facebook.com/<?php $facebook=$this->session->userdata('facebook'); echo "$facebook";?>" target="_blank">
							<?php $foto=$this->session->userdata('foto');?>
							<img src="<?php echo base_url()."assets/img/pakar/".$foto;?>" alt="">
							<h3>Pakar Enneagram</h3>
							<span class="button transparent button-arrow"><?php $nama=$this->session->userdata('nama'); echo "$nama";?></span>
						</a>
					</div>
					<!-- /Image Banner -->							


					<!-- Upcoming Events -->
					<div class="sidebar-box white animate-onscroll">
					<h3>Jadwal Selanjutnya</h3>
						<ul class="upcoming-events">

							<!-- Event -->
							<li>
								<div class="date">
									<span>
										<span class="day">25</span>
										<span class="month">Juni</span>
									</span>
								</div>

								<div class="event-content">
									<h6><a href="event-post-v2.html">Pertemuan Pembahasan Enneagram ke 3</a></h6>
									<ul class="event-meta">
										<li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
										<li><i class="icons icon-location"></i> Hotel Sahid Montana</li>
									</ul>
								</div>
							</li>
							<!-- /Event -->

							<!-- Event -->
							<li>
								<div class="date">
									<span>
										<span class="day">30</span>
										<span class="month">Juni</span>
									</span>
								</div>

								<div class="event-content">
									<h6><a href="event-post-v2.html">Konferensi Pakar Psikologi Indonesia</a></h6>
									<ul class="event-meta">
										<li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
										<li><i class="icons icon-location"></i> Hotel Gajahmada Surabaya</li>
									</ul>
								</div>
							</li>
							<!-- /Event -->

						</ul>
						<a href="#" class="button transparent button-arrow">Lebih banyak</a>
					</div>
					<!-- /Upcoming Events -->		
			
				</div>
				<!-- /Sidebar -->




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