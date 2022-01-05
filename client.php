<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İstemci</title>

</head>
<body>
	<div align="center">
		<form method="post">
			<table>
				<tr>
					<td>
						<label>Mesajınızı yazınız</label>
						<input type="text" name="txtMessage">
						<input type="submit" name="btnSend" value="Gönder">
					</td>
				</tr>
				<?php 
				$host = '127.0.0.1';
				$port = 25003;

				if (isset($_POST['btnSend'])) {
					$msg = $_REQUEST['txtMessage'];
					$sock = socket_create(AF_INET, SOCK_STREAM, 0);
					socket_connect($sock, $host, $port) or die("Baglanmadi");

					socket_write($sock,$msg,strlen($msg)) or die("Yazilamadi");

					$reply = socket_read($sock, 1024);
					$reply = trim($reply);
					$reply = "Sunucu cevabi:\t".$reply;
				}
				?>
				<tr>
					<td>
						<textarea rows="8" cols="30"><?php echo @$reply;?></textarea>
					</td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>