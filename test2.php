<?php
echo "<h1>Türkçe</h1>";
$turkce = $_POST['trdogru'];
$turkceyan = $_POST['tryanlis'];
if ($turkceyan>$turkce) {
    $sonuctr= $turkce-($turkceyan/4);
    echo $sonuctr;
}
else{
    $sonuctr= $turkce-($turkceyan/4);
    echo $sonuctr;
}
?>

<hr>

<?php
echo "<h1>Matematik</h1>";
$matematik = $_POST['matdogru'];
$matematikyan = $_POST['matyanlis'];
if ($matematikyan>$matematikyan) {
    $sonuctr= $matematik-($matematikyan/4);
    echo $sonuctr;
}
else{
    $sonuctr= $matematik-($matematikyan/4);
    echo $sonuctr;
}
?>

<hr>

<?php
echo "<h1>Fizik</h1>";
$fizik = $_POST['fizikdogru'];
$fizikyan = $_POST['fizikyanlis'];
if ($fizikyan>$fizikyan) {
    $sonuctr= $fizik-($fizikyan/4);
    echo $sonuctr;
}
else{
    $sonuctr= $fizik-($fizikyan/4);
    echo $sonuctr;
}
?>

<hr>

<?php
echo "<h1>İngilizce</h1>";
$ingilizce = $_POST['ingdogru'];
$ingilizceyan = $_POST['ingyanlis'];
if ($ingilizceyan>$ingilizceyan) {
    $sonuctr= $ingilizce-($ingilizceyan/4);
    echo $sonuctr;
}
else{
    $sonuctr= $ingilizce-($ingilizceyan/4);
    echo $sonuctr;
}
?>

<hr>