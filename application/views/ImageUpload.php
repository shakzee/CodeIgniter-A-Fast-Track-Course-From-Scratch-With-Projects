<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/31/2018
 * Time: 12:27 PM
 */
?>

<html>
<head>
    <title>CI Fast Track</title>
</head>
<body>
<h1>Hello world</h1>
<form action="<?php echo site_url('home/uploadNow'); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="myImage">
    <button type="submit">Upload</button>
</form>
</body>
</html>
