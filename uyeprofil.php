<?php
require_once("baglanti.php"); 
$kullanici = $_COOKIE['kullanici'];	
$sql = "select * from uyeler where uyeadi='$kullanici'"; 
$sor=mysqli_query($con,$sql);
$yaz = mysqli_fetch_array($sor,MYSQLI_ASSOC);
$uyenick =$yaz['uyeadi'];
// id ye g�re profil sayas�na g�nderdik
/*kontrol etmeden g�ndermekte ba�ka sorunlar do�abilir.
*/
echo "<meta http-equiv='refresh' content='0;url=@$uyenick'/>"
?>