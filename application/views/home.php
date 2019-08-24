<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/29/2018
 * Time: 8:34 PM
 */

?>
<html>
<head>
    <title>CI Fast Track</title>
</head>
<body>
    <h1>Hello world</h1>
    <form action="<?php echo site_url('home/login'); ?>" method="post">
        <input type="text" name="email">
        <input type="password" name="password">]
        <button type="submit">Login</button>
    </form>
    <img src="<?php echo base_url('assets/car.jpeg')?>" style="width: 50px;">
</body>
</html>
