<?php
$target_dir = "uploads/"; // फाइल सेभ हुने फोल्डर
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// फोल्डर छैन भने बनाउने
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// फाइल अपलोड गर्ने प्रोसेस
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "फाइल सफलतापूर्वक अपलोड गरियो: " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
} else {
    echo "माफ गर्नुहोस्, फाइल अपलोड गर्न सकिएन।";
}
?>
