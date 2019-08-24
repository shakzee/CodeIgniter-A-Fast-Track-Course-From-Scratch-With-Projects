<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/31/2018
 * Time: 3:26 PM
 */
?>

<html>
<head>
    <title>CI Fast Track</title>
</head>
<body>
<?php
    echo validation_errors();
    echo $this->session->flashdata('error');
echo form_open('home/signup23','','');
echo form_input('name','',array('class'=>'myClass','id'=>'myid'));
echo form_password('password','','class="myClass"');
echo form_password('confPassword','','class="myClass"');
echo form_submit('upload','Upload');

echo form_close();

?>

</body>
</html>
