<?php include "parts/header.php"; ?>

<?php
$str = '12:59:59';

$res = preg_match('#(?<hour>\d{2})\:(?<minute>\d{2})\:(?<second>\d{2})#',  $str, $match);
echo "$str <br> $res <br>";
print_r($match);

?>

<?php include "parts/footer.php"; ?>