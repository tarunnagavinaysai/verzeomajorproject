<!--STARTING CONNECTION-->
<?php
$db_host="sql203.epizy.com";
$db_user="epiz_26980832";
$db_pass="iAKY1TB2Lfe";
$db_name="epiz_26980832_design";
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$conn)
{
    die("Connection Interrupted");
}
//echo"Connection Successful";
?>
<!--ENDING CONNECTION-->