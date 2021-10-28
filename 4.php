<?php include "parts/header.php"; ?>
    <form method="GET">
        <input name="num1">
        <input name="num2">
        <input type="submit">
    </form>
<?php
file_put_contents('test.txt', '!');
?>

<?php include "parts/footer.php"; ?>