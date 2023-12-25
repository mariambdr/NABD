<?php
$username= $_REQUEST ['username '];
$email=$_REQUEST['eamail'];
$passward=$_REQUEST [ 'passward '];
$procedures=$_REQUEST ['procedures'];
$male=$_REQUEST['male'];
$female =$_REQUEST['female'];
if(
isset($_post)['btntest']){
    $host= "localhost ";
    $user = "root";
    $passward ="";
    $db="nabd clients";

    $conn = mysqli_connect($host,$user,$passward,$db);


$insert ="insert into clients values ('$username','$email','$passward','$procedures','$male','$female')";
mysqli_query ($conn,$insert);

if ($conn){
echo (" 
<h1 style='color :green;'> your regisration is done!
</h1>
")
else("<h1 style='color :red;'> your regisration is not  done!

</h1>
")
};
}
?>
