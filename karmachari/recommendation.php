<?php
$title = "कर्मचारी विवरण";
include 'header.php';
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recommendation_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sifaris_miti = $_POST['sifaris_miti'];
    $sifaris_karyalaya = $_POST['sifaris_karyalaya'];
    $niyukti_miti = $_POST['niyukti_miti'];
    $niyukti_karyalaya = $_POST['niyukti_karyalaya'];
    $samayojan_miti = $_POST['samayojan_miti'];
    $samayojan_karyalaya = $_POST['samayojan_karyalaya'];
    $hajir_miti = $_POST['hajir_miti'];
    
    $file_name = $_FILES['document']['name'];
    $file_tmp = $_FILES['document']['tmp_name'];
    $file_path = "uploads/" . basename($file_name);
    move_uploaded_file($file_tmp, $file_path);

    $sql = "INSERT INTO sifaris (sifaris_miti, sifaris_karyalaya, niyukti_miti, niyukti_karyalaya, samayojan_miti, samayojan_karyalaya, hajir_miti, document) 
            VALUES ('$sifaris_miti', '$sifaris_karyalaya', '$niyukti_miti', '$niyukti_karyalaya', '$samayojan_miti', '$samayojan_karyalaya', '$hajir_miti', '$file_path')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('सफलतापूर्वक सेभ गरियो!'); window.location='view_details.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>सिफारिस फारम</title>
</head>
<body>
    <h2>सिफारिस फारम</h2>
    <form method="post" enctype="multipart/form-data">
        सिफारिस मिति: <input type="date" name="sifaris_miti" required><br>
        सिफारिस कार्यालय: <input type="text" name="sifaris_karyalaya" required><br>
        नियुक्ति मिति: <input type="date" name="niyukti_miti" required><br>
        नियुक्ति कार्यालय: <input type="text" name="niyukti_karyalaya" required><br>
        समायोजन मिति: <input type="date" name="samayojan_miti"><br>
        समायोजन कार्यालय: <input type="text" name="samayojan_karyalaya"><br>
        हाजिर भएको मिति: <input type="date" name="hajir_miti"><br>
        कागजात अपलोड गर्नुहोस्: <input type="file" name="document" required><br>
        <input type="submit" value="सेभ गर्नुहोस्">
    </form>
    <br>
    <a href="view_details.php">विवरण हेर्नुहोस्</a>
</body>
</html>

?>

<h1>कर्मचारी विवरण</h1>
<p>यहाँ कर्मचारीको विवरण राख्नुहोस्।</p>

<?php include 'footer.php'; ?>
