<?php
// Simple upload endpoint for PIS app
// Accepts file fields: appointmentDoc, adjustmentDoc, promotionDoc, deputationDoc, photoFile
// Saves files under uploads/docs or uploads/photos and returns JSON with URLs

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

$baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
$docsDir = $baseDir . DIRECTORY_SEPARATOR . 'docs';
$photosDir = $baseDir . DIRECTORY_SEPARATOR . 'photos';

if (!is_dir($docsDir)) mkdir($docsDir, 0755, true);
if (!is_dir($photosDir)) mkdir($photosDir, 0755, true);

$result = [];

$fileFields = ['appointmentDoc','adjustmentDoc','promotionDoc','deputationDoc','photoFile'];

foreach ($fileFields as $field) {
    if (!isset($_FILES[$field]) || !is_uploaded_file($_FILES[$field]['tmp_name'])) {
        $result[$field] = null;
        continue;
    }

    $file = $_FILES[$field];
    if ($file['error'] !== UPLOAD_ERR_OK) { $result[$field] = null; continue; }

    $orig = basename($file['name']);
    $ext = pathinfo($orig, PATHINFO_EXTENSION);
    $safeName = preg_replace('/[^A-Za-z0-9_.-]/', '_', pathinfo($orig, PATHINFO_FILENAME));
    $unique = $safeName . '_' . time() . '_' . bin2hex(random_bytes(4));

    if ($field === 'photoFile') {
        $dest = $photosDir . DIRECTORY_SEPARATOR . $unique . '.' . $ext;
        $urlPath = 'uploads/photos/' . $unique . '.' . $ext;
    } else {
        $dest = $docsDir . DIRECTORY_SEPARATOR . $unique . '.' . $ext;
        $urlPath = 'uploads/docs/' . $unique . '.' . $ext;
    }

    if (move_uploaded_file($file['tmp_name'], $dest)) {
        $result[$field] = $urlPath;
    } else {
        $result[$field] = null;
    }
}

echo json_encode(['success' => true, 'files' => $result], JSON_UNESCAPED_UNICODE);

?>
