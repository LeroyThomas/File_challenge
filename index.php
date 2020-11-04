
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Multiple file upload</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" value="Upload">
</form>
<?php
$it = new FilesystemIterator('uploads/');
foreach ($it as $fileinfo) {
    echo $fileinfo->getFilename() . "<br>";
    echo "<figure> <img src=".$fileinfo." > </figure>";
}
?>
</body>
</html>