<?php
/*$connectstr_dbhost='';
$connectstr_dbname='';
$connectstr_dbusername='';
$connectstr_dbpassword='';

foreach ($SERVER as $key => $value){

    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0){
        continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?);.*$/", "\\1", $value);

}
*/
$link = mysqli_connect("127.0.0.1:54480", "azure", "6#vWHD_$", "localdb");
echo $link;

if (!$link){
    echo "Error Unable to Connect to MySQL." . PHP_EOL;
    echo "\n Debugging errno: " . mysqli_connect_errno(). PHP_EOL;
    echo "\n Debugging error: " . mysqli_connect_error(). PHP_EOL;
}
?>



