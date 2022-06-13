
<?php
echo 'test';
if($_SERVER["REQUEST_METHOD"] == "POST"){
//_POST['hiddenImage']
    $folderPath = 'upload/';

    $image_parts = explode(";base64,", $_POST['hiddenImage']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.png';
    file_put_contents($file, $image_base64);

    echo json_encode(["image uploaded successfully."]);
}

