
<?php
if(isset($_POST['adSoyad'])){
$adsoyad=$_POST["adSoyad"];
$email=$_POST["email"];
$konu=$_POST["konu"];
$mesaj=$_POST["mesaj"];


    
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $baglanti=mysqli_connect("localhost","root","123","veritabani"); 

if(!$baglanti){echo "";}
else{echo "";}
		$sql = "insert into mesajlar (adSoyad,email,mesaj,konu) values('$adsoyad','$email','$mesaj','$konu')";
        $kayit = mysqli_query($baglanti,$sql);
		echo"Mesajınız gönderildi. En kısa zamanda geri dönüş yapılacaktır.";  
}
else
{echo "HATA!!! Mesajınız gönderilemedi";}

}
?>