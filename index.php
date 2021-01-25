<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file = fopen("reg_info.txt","r");
    $file_content = fread($file,filesize("reg_info.txt"));
    echo $file_content;
    fclose($file);
    ?>
</body>
</html>