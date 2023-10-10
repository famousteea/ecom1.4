<?php
$server='localhost';
$username='root';
$pwd='';
$db='ecom_1';
$connection=mysqli_connect($server,$username,$pwd,$db);
if ($connection) {
   echo"connected to the $db database succesfully";
}else{
    echo"Error :Not connected to the $db database";
}
$results=mysqli_query($connection,"SELECT * FROM userr");
$data1=($rangeedata=mysqli_fetch_row($results));
$data2=($rangeedata=mysqli_fetch_assoc($results));
echo('</br>');
echo('first fecth');
echo('</br>');
var_dump($data1);
echo('</br>');
echo('second fecth');
echo('</br>');
var_dump($data2);
echo('</br>');
echo('</br>');
echo('second fecth');
echo('</br>');
?>
