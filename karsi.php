<html>
    <head>
    </head>
    <body>
       <?php
$servername = "localhost";
$database = "vto";
$username = "root";
$password = "";
$msg = "hoşgeldiniz";
// kontrolü oluştur 
$conn = mysqli_connect($servername, $username, $password, $database);
// kontrolü doğrula 
if (!$conn) {
    die("Bağlantı yapılamadı : " . 
mysqli_connect_error());
}
echo "Veri tabanına Bağlanıldı ";
mysqli_close($conn);
echo $msg . $_POST ["isminiz"];
?>

    </body>
</html>
