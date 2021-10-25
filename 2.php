<?php include "parts/header.php"; ?>

<?php
$str = 'ave a#a a2a a$a a4a a5a a-a aca';

$res = preg_replace('# #', '!', $str);

echo($str. "<br>". $res);

?>

<?php include "parts/footer.php"; ?>