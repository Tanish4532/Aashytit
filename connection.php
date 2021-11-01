<?php
$username="root";
$password="";
$server='localhost';
$db='aashytit';

$con=mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "Connection Successful";
    ?>
    <script>
        alert('connection successfull');
    </script>
    <?php
}



else{
    //echo "No Connection";
    die("No connection".mysqli_connect_error());
}
?>