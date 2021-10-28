<?php include "parts/header.php"; ?>
    <form method="GET">
        <input name="num1">
        <input name="num2">
        <input type="submit">
    </form>
<?php
session_start();

if (!empty($_GET)) {
    $_SESSION['num1'] = $_GET['num1'];
    $_SESSION['num2'] = $_GET['num2'];
}
if (!empty($_SESSION)) {
    echo $_SESSION['num1'] + $_SESSION['num2'];
}
?>

<?php include "parts/footer.php"; ?>