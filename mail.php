<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<title>rifnyproject.xyz | Website Rifny Project</title>
<style>
.mail{ width: 730px; margin: 10px auto; border: 1px solid #ddd; padding: 10px; }
.mail div{ padding: 5px 0; border-bottom: 1px solid #ddd; }
label{ width: 100px; display: inline-block; }
.bottom{ font-size: 12px; text-align: right; }
</style>
</head>

<body>
	<div class=”mail”>
		<div class=”top”><a href=”https://rifnyproject.xyz”>rifnyproject.xyz</a></div>
		<h1>Kontak Kami</h1>
		<form action=”send_mail.php” method=”post”>

			<div>
			<label for=”nama”>Nama</label>
			<input type=”text” name=”nama”>
			</div>

			<div>
			<label for=”nomorhp”>Nomor HP</label>
			<input type=”text” name=”nomorhp”>
			</div>

			<div>
			<label for=”email”>Email</label>
			<input type=”text” name=”email”>
			</div>

			<div>
				<label for=”subjek”>Subjek</label>
				<input type=”text” name=”subjek”>
			</div>

			<div>
				<label for=”pesan”>Pesan</label>
				<textarea name=”pesan” id=”” cols=”30″ rows=”10″></textarea>
			</div>

			<div>
				<input type=”submit” value=”Kirim Pesan”>
			</div>

		</form>
		<div class=”bottom”><a href=”https://www.rifnyproject.xyz”>Kembali ke tutorial</a></div>			
	</div>
</body>
</html>