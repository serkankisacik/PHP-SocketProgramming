<?php 

$host = "127.0.0.1";
$port = 25003;
set_time_limit(0);

$sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("Soket oluşturulamadı\n");
$result = socket_bind($sock, $host,$port) or die("Sokete Baglanamadi\n");

$result = socket_listen($sock,3) or die("Soket dinleyicisi ayarlanılamadi");

echo "Baglanti bekleniyor";

/**
 * Okuma Sınıfı
 */
class Chat
{
	function readline()
	{
		return rtrim(fgets(STDIN));
	}
}

do
{
	$accept = socket_accept($sock) or die("Gelen baglanti kabul edilemedi");
	$msg = socket_read($accept, 1024) or die("girdi okunamadi");
	$msg = trim($msg);

	echo "Istemci iletisi:\t".$msg."\n\n";

	$line = new Chat();

	echo "Cevap yaz:\t";
	$reply = $line->readline();

	socket_write($accept, $reply, strlen($reply)) or die("cikti yazilamadi");
}while (true);
	socket_close($accept,$sock);
?>
<!-- php -f C:\xampp\htdocs\socket\server.php-->