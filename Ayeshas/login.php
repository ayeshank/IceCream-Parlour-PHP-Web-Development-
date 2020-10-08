<!DOCTYPE html>

<html lang="en">

<head>
    <title>Practice</title>
</head>
<body>
<?php 
$filename = "php.txt";
$file =fopen($filename,"r");
if($file == false)
{
    echo ("Error! File not found");
    exit();
}
$filesize = filesize($filename);
$filetext = fread($file,$filesize);
fclose($file);
echo ("The filesize in bytes is : $filesize");
echo("$filetext");
?>
</body>
</html>

