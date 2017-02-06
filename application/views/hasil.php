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

		<h3>HASIL TEST ANDA "<?php $pengguna=$this->session->userdata('pengguna'); echo "$pengguna";?>"
<?php $ID=$this->session->userdata('pengguna'); echo "$ID";?>
		</h3>
		<p class="breadcrumb"><a href="">Home</a> / Test</p>

	</section>
	<!-- Page Heading -->
	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row">

			<div class="col-lg-12 col-md-6 col-sm-12">

				<div class="animate-onscroll">
	<!-- 							<th width="7.5%">SOAL 1</th>
								<th width="7.5%">SOAL 2</th>
								<th width="7.5%">SOAL 3</th>
								<th width="7.5%">SOAL 4</th>
								<th width="7.5%">SOAL 5</th>
								<th width="7.5%">SOAL 6</th>
								<th width="7.5%">SOAL 7</th>
								<th width="7.5%">SOAL 8</th>
								<th width="7.5%">SOAL 9</th>
								<th width="7.5%">SOAL 10</th>
								<th width="7.5%">SOAL 11</th>
								<th width="7.5%">SOAL 12</th>
								<th width="7.5%">SOAL 13</th>
								<th width="7.5%">SOAL 14</th>
								<th width="7.5%">SOAL 15</th>
								<th width="7.5%">SOAL 16</th>
								<th width="7.5%">SOAL 17</th>
								<th width="7.5%">SOAL 18</th>
								<th width="7.5%">SOAL 19</th>
								<th width="7.5%">SOAL 20</th>
								<th width="7.5%">SOAL 21</th>
								<th width="7.5%">SOAL 22</th>
								<th width="7.5%">SOAL 23</th>
								<th width="7.5%">SOAL 24</th>
								<th width="7.5%">SOAL 25</th>
								<th width="7.5%">SOAL 26</th>
								<th width="7.5%">SOAL 27</th>
								<th width="7.5%">SOAL 28</th>
								<th width="7.5%">SOAL 29</th>
								<th width="7.5%">SOAL 30</th>
								<th width="7.5%">SOAL 31</th>
								<th width="7.5%">SOAL 32</th>
								<th width="7.5%">SOAL 33</th>
								<th width="7.5%">SOAL 34</th>
								<th width="7.5%">SOAL 35</th>
								<th width="7.5%">SOAL 36</th>
	 -->					<?php foreach ($q as $row) {}?>
							<!-- <th width="7.5%"><?php echo "$row->SOAL1";?></th>
								<th width="7.5%"><?php echo "$row->SOAL2";?></th>
								<th width="7.5%"><?php echo "$row->SOAL3";?></th>
								<th width="7.5%"><?php echo "$row->SOAL4";?></th>
								<th width="7.5%"><?php echo "$row->SOAL5";?></th>
								<th width="7.5%"><?php echo "$row->SOAL6";?></th>
								<th width="7.5%"><?php echo "$row->SOAL7";?></th>
								<th width="7.5%"><?php echo "$row->SOAL8";?></th>
								<th width="7.5%"><?php echo "$row->SOAL9";?></th>
								<th width="7.5%"><?php echo "$row->SOAL10";?></th>
								<th width="7.5%"><?php echo "$row->SOAL11";?></th>
								<th width="7.5%"><?php echo "$row->SOAL12";?></th>
								<th width="7.5%"><?php echo "$row->SOAL13";?></th>
								<th width="7.5%"><?php echo "$row->SOAL14";?></th>
								<th width="7.5%"><?php echo "$row->SOAL15";?></th>
								<th width="7.5%"><?php echo "$row->SOAL16";?></th>
								<th width="7.5%"><?php echo "$row->SOAL17";?></th>
								<th width="7.5%"><?php echo "$row->SOAL18";?></th>
								<th width="7.5%"><?php echo "$row->SOAL19";?></th>
								<th width="7.5%"><?php echo "$row->SOAL20";?></th>
								<th width="7.5%"><?php echo "$row->SOAL21";?></th>
								<th width="7.5%"><?php echo "$row->SOAL22";?></th>
								<th width="7.5%"><?php echo "$row->SOAL23";?></th>
								<th width="7.5%"><?php echo "$row->SOAL24";?></th>
								<th width="7.5%"><?php echo "$row->SOAL25";?></th>
								<th width="7.5%"><?php echo "$row->SOAL26";?></th>
								<th width="7.5%"><?php echo "$row->SOAL27";?></th>
								<th width="7.5%"><?php echo "$row->SOAL28";?></th>
								<th width="7.5%"><?php echo "$row->SOAL29";?></th>
								<th width="7.5%"><?php echo "$row->SOAL30";?></th>
								<th width="7.5%"><?php echo "$row->SOAL31";?></th>
								<th width="7.5%"><?php echo "$row->SOAL32";?></th>
								<th width="7.5%"><?php echo "$row->SOAL33";?></th>
								<th width="7.5%"><?php echo "$row->SOAL34";?></th>
								<th width="7.5%"><?php echo "$row->SOAL35";?></th>
								<th width="7.5%"><?php echo "$row->SOAL36";?></th>
							</tr>
							</table> -->

							<?php 
							$arr= array("$row->SOAL1","$row->SOAL2","$row->SOAL3","$row->SOAL4","$row->SOAL5","$row->SOAL6",
							"$row->SOAL7","$row->SOAL8","$row->SOAL9","$row->SOAL10","$row->SOAL11","$row->SOAL12",
							"$row->SOAL13","$row->SOAL14","$row->SOAL15","$row->SOAL16","$row->SOAL17","$row->SOAL18",
							"$row->SOAL19","$row->SOAL10","$row->SOAL21","$row->SOAL22","$row->SOAL23","$row->SOAL24",
							"$row->SOAL25","$row->SOAL26","$row->SOAL27","$row->SOAL28","$row->SOAL29","$row->SOAL30",
							"$row->SOAL31","$row->SOAL32","$row->SOAL33","$row->SOAL34","$row->SOAL35","$row->SOAL36"
							 );
							$kata=implode("", $arr);
							?>
							<?php 
							$Tipe1 = substr_count($kata, "1");
							$Tipe2 = substr_count($kata, "2");
							$Tipe3 = substr_count($kata, "3");
							$Tipe4 = substr_count($kata, "4");
							$Tipe5 = substr_count($kata, "5");
							$Tipe6 = substr_count($kata, "6");
							$Tipe7 = substr_count($kata, "7");
							$Tipe8 = substr_count($kata, "8");
							$Tipe9 = substr_count($kata, "9");
							$Tipe_tertinggi =max($Tipe1,$Tipe2,$Tipe3,$Tipe4,$Tipe5,$Tipe6,$Tipe7,$Tipe8,$Tipe9)
							?>
							<h4>
							<?php 
							if ($Tipe_tertinggi==$Tipe1)
								$tipe = "TIPE 1";
							elseif ($Tipe_tertinggi==$Tipe2)
								$tipe = "TIPE 2";
							elseif ($Tipe_tertinggi==$Tipe3)
								$tipe = "TIPE 3";
							elseif ($Tipe_tertinggi==$Tipe4)
								$tipe = "TIPE 4";
							elseif ($Tipe_tertinggi==$Tipe5)
								$tipe = "TIPE 5";
							elseif ($Tipe_tertinggi==$Tipe6)
								$tipe = "TIPE 6";
							elseif ($Tipe_tertinggi==$Tipe7)
								$tipe = "TIPE 7";
							elseif ($Tipe_tertinggi==$Tipe8)
								$tipe = "TIPE 8";
							elseif ($Tipe_tertinggi==$Tipe9)
								$tipe = "TIPE 9";
							?>
							Anda Termasuk Tipe = <strong> <?php echo "$tipe"; ?></strong>
							
							</h4>
							<br>
			</div>
		</div>
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div class="animate-onscroll">
					<form action="<?php echo base_url(); ?>C_Main/updateDataTraining/<?php echo $row->ID_TRAINING;?>" method="post">
						<input type="hidden" name="tipe" value="<?php echo "$tipe"; ?>" required>
				 		<input type="submit" name="update" value="SIMPAN DATA">
				 		<alert style="color:#ff0000"> SIMPAN DATA ANDA SEBELUM KELUAR</alert>
					</form>
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

