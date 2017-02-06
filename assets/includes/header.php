		
		<!-- Container -->
		<div class="container">
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				
				<!-- Main Header -->
				<!-- /Main Header -->
								
				<!-- Lower Header -->
				<div id="lower-header">
					
					<div class="container">
					
					<div id="menu-button">
						<div>
						<span></span>
						<span></span>
						<span></span>
						</div>
						<span>Menu</span>
					</div>
					
					<ul id="navigation">
						
						<!-- Home -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Home') echo 'current-menu-item'; ?>">					
							<a href="<?php echo base_url()?>C_main/home"><i class="icons icon-home"></i></a>						
						</li>
						<!-- /Home -->

						<!--  Penjelasan -->
						<!-- /Penjelasan -->

						<!--  Macam Tipe -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Macam Tipe') echo 'current-menu-item'; ?>">
							<a href="<?php echo base_url()?>C_main/macamTipe">Tipe</a>
						</li>
						<!-- /Macam Tipe -->

						<!--  Macam Insting -->
						<!-- /Macam Insting -->

						<!--  System Work -->
						<!-- /System Work -->

						<!--  Misidentifikasi -->
						<!-- /Misidentifikasi -->	

						<!--  Hubungan Tipe -->
						<!-- /Hubungan Tipe -->

						<!--  Hubungan Tipe -->
						<!-- /System Work -->					

						<!-- Donate -->
						<li class="donate-button <?php if($candidate['current-menu-item'] == 'Mulai Test') echo 'current-menu-item'; ?>">
							<a href="<?php echo base_url()?>C_main/preTest">Test</a>
						</li>
						<!-- /Donate -->
						
					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->