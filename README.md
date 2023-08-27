# PHP Socket Programlama İngilizce

* An application that performs data communication between server and client.
* More than one client can communicate with the server.
* While a client and server are communicating, other clients can communicate with the server.
* These communications appear in the application console.
* TCP protocol is used.

To make it run;

1. You must have Xampp installed on your computer (C:\xampp) -> https://www.apachefriends.org/en/download.html
2. In C:\xampp\htdocs\ add the files in this repo -> https://github.com/serkankisacik/PHP-SocketProgramming/archive/refs/heads/main.zip
3. Assuming you added it as C:\xampp\htdocs\socket.
4. Open run with Win+R key combination and run cmd.
5. Run php -f C:\xampp\htdocs\socket\server.php. Now your server can accept the request.
6. Run Xampp Apache service.
7. Go to http://localhost/socket/client.php in the browser.
8. Now the server and client can communicate.

https://www.youtube.com/watch?v=75CCxIBs4Ak has been used as a source.
Thank you Alma Mae Bernales.

# PHP Socket Programlama Türkçe

* Sunucu ve istemci arasında veri iletişimi gerçekleştiren bir uygulama.
* Sunucu ile birden fazla istemci haberleşebilir.
* Bir istemci ile sunucu iletişimde iken başka istemciler sunucu ile iletişime geçebilir.
* Bu iletişimler uygulama konsolunda görünür.
* TCP protokolü kullanılmıştır.

Çalıştırmak için;

1. Bilgisayarınızda Xampp Kurulu olması gerekir (C:\xampp) -> https://www.apachefriends.org/tr/download.html
2. C:\xampp\htdocs\ içerisine bu repo içerisindeki dosyaları ekleyin -> https://github.com/serkankisacik/PHP-SocketProgramming/archive/refs/heads/main.zip
3. Varsayalım ki dosyaları C:\xampp\htdocs\socket klasörüne eklediniz.
4. Win+R Tuş kombinasyonu ile çalıştırı açın ve cmd'yi çalıştırın.
5. php -f C:\xampp\htdocs\socket\server.php komutunu çalıştırın. Artık sunucunuz istekleri kabul edebilir durumda olacak.
6. Xampp Apache servisini çalıştırın.
7. Tarayıcınızda http://localhost/socket/client.php adresine gidin.
8. Artık sunucu ve istemci iletişim kurabilir.

https://www.youtube.com/watch?v=75CCxIBs4Ak kaynak olarak kullanılmıştır.
Alma Mae Bernales'e teşekkür ederiz.
