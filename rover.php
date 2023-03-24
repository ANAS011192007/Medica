<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rover</title>
  <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("mars.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<div class="bg">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rover";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}
else{
    
}
?>
<?php
$sql = " SELECT * FROM sensors ";
$result=$conn->query($sql);
if($result->num_rows>0){
  ?>
  <form method="POST">
<form action="" method="POST">
<input style="background-color: #92a8d1; font-weight: bold;" type="text"  name="gps" size="20%" value="<?php echo "Gps" ?>">
<input style=" background-color: #92a8d1; font-weight: bold;" type="text" name="gas_sensor" size="20%" value="<?php echo 'Gas_Sensor' ?>">
<input style="background-color: #92a8d1; font-weight: bold;" type="text" name="solar_sensor"size="20%" value="<?php echo 'Solar_Sensor' ?>">
<input style="background-color: #92a8d1; font-weight: bold;" type="text" name="ir_sensor" size="20%" value="<?php echo 'IR_Sensor' ?>">
<input style="background-color: #92a8d1; font-weight: bold;" type="text" name="voltage_sensor"size="20%" value="<?php echo 'Voltage_Sensor' ?>">
<input style="background-color: #92a8d1; font-weight: bold;" type="text" name="humidity_sensor"size="20%" value="<?php echo 'Humidity_Sensor' ?>">
<input style="background-color: #92a8d1; font-weight: bold;" type="text" name="accelerometer" size="20%"value="<?php echo 'Accelerometer' ?>">
<input style="background-color: #92a8d1; font-weight: bold;" type="text" name="time" size="20%"value="<?php echo 'time' ?>">
</form>
  <?php  
   while($row=$result->fetch_assoc()){
    ?>   
     <form method="POST">
    <input style="font-weight: bold;" type="text" name="gps" size="20%" value="<?php echo $row['gps'] ?>">
    <input style="font-weight: bold;" type="text" name="gas_sensor" size="20%" value="<?php echo $row['gas_sensor'] ?>">
    <input style="font-weight: bold;" type="text" name="solar_sensor"size="20%" value="<?php echo $row['solar_sensor'] ?>">
    <input style="font-weight: bold;" type="text" name="ir_sensor" size="20%" value="<?php echo $row['ir_sensor'] ?>">
    <input style="font-weight: bold;" type="text" name="voltage_sensor"size="20%" value="<?php echo $row['voltage_sensor'] ?>">
    <input style="font-weight: bold;" type="text" name="humidity_sensor"size="20%" value="<?php echo $row['humidity_sensor'] ?>">
    <input style="font-weight: bold;" type="text" name="accelerometer" size="20%"value="<?php echo $row['accelerometer'] ?>">
    <input style="font-weight: bold;" type="text" name="time" size="20%"value="<?php echo $row['time'] ?>">
    </form>
    <?php
    }
  }
  else
  echo "No results<br><br>";
?>
</div>
</body>
</html>