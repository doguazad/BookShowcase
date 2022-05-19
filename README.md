# BookShowcase

Yeni kitaplar ekleyip, vitrine eklenmiş kitapları inceleyebileceğiniz kitap vitrini.Php ve JavaScript ile geliştirildi.


# Kurulum

- Dosyalarınızı FTP sunucusuna yükleyin
-  `taban1.sql` adlı dosyayı PhpMyAdmine ekleyin.
-  `acces.php` isimli dosyadan veritabanı bilgilernini doldurun
  ```bash

   <?php 
$db=new PDO("
mysql:host=localhost; 
dbname=taban1", 
'root', '');

?>
```
  
# Ekran Görüntüleri

![ScreenShot](https://raw.githubusercontent.com/doguazad/BookShowcase/main/Screenshot_1.png)
![ScreenShot](https://raw.githubusercontent.com/doguazad/BookShowcase/main/Screenshot_2.png)
