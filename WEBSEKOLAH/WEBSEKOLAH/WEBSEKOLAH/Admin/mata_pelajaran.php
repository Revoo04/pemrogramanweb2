<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SMK TERPADU</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="SMK Terpadu" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="../css/swipebox.css">
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/roma.css" />
	<!-- //css files -->
	<!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>

	<?php include('../napigasi2.php'); ?>
	<div class="clearfix"> </div>

	<!-- Mata Pelajaran -->
	<div id="Akun_Control">
		<div class="container">
			<h3 class="w3l-title"> Mata Pelajaran </h3>
			<a href="tambah_mata_pelajaran.php"> <button class="btn"> Tambah Mata Pelajaran </button> </a>
			<div>
				<table class="table table-bordered text-center">
					<tr>
						<td><b> Kode Mata Pelajaran </td>
						<td><b> Nama Mata Pelajaran </td>
						<td><b> Nama Guru </td>
						<td width="100"><b> Kelas </td>
						<td width="100"><b> Jurusan </td>
						<td colspan="2"><b> Aksi </td>
					</tr>

					<?php
					include('../koneksi.php');
					$tampil = "SELECT * FROM `mata_pelajaran`";
					$hasil = mysqli_query($koneksi, $tampil);

					while ($data = mysqli_fetch_array($hasil)) {
						$tampil_guru = "SELECT * FROM `guru` WHERE nip = '$data[nip]'";
						$hasil_guru = mysqli_query($koneksi, $tampil_guru);
						$data_guru = mysqli_fetch_array($hasil_guru);

						echo "	</TR>
			<td> $data[kode_mata_pelajaran] </td>
            <td> $data[nama_matapelajaran] </td>
			<td> $data_guru[nama_guru] </td>
			<td width='100'> $data[kelas] </td>
			<td width='100'> $data[jurusan] </td>
			<td width='100'><a href='mata_pelajaran_edit.php?kode=$data[kode_mata_pelajaran]'> Edit </a></td>
			<td width='100'><a href='Hapus_Mata_Pelajaran.php?kode=$data[kode_mata_pelajaran]'> Hapus</a></td>
			</TR>";
					}
					?>
				</table>
			</div>

			<div class="clearfix margin-bawah"></div>
		</div>
	</div>

	<!-- //Mata Pelajaran -->

	<!-- footer -->

	<div class="w3layouts_copy_right">
		<div class="container">
			<p>© 2024 SMK TERPADU | Design by <a href="http://w3layouts.com">Revo Maulana Saputra.</a></p>
		</div>
	</div>
	<!-- //footer -->

	<!-- js-scripts -->
	<!-- js-files -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js-files -->
	<!-- Baneer-js -->



	<!-- smooth scrolling -->
	<script src="../js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- stats -->
	<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
	<!-- //stats -->
	<!-- moving-top scrolling -->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //moving-top scrolling -->
	<!-- gallery popup -->
	<script src="../js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!--/script-->
	<script src="../js/simplePlayer.js"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
	</script>
	<!-- //Baneer-js -->
	<!-- Calendar -->
	<script src="../js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- //js-scripts -->
</body>

</html>