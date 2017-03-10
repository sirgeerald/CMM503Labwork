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

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);

if (!$link){
    echo "Error Unable to Connect to MySQL." . PHP_EOL;
    echo "\n Debugging errno: " . mysqli_connect_errno(). PHP_EOL;
    echo "\n Debugging error: " . mysqli_connect_error(). PHP_EOL;

}*/



$connstrfile = 'd:\\home\\data\\MySQL\\MYSQLCONNSTR_localdb.txt';
$siteMySqlEnabledVal = getenv('WEBSITE_MYSQL_ENABLED');
$siteMySqlEnabled = $siteMySqlEnabledVal == "1" || (strcasecmp($siteMySqlEnabledVal, 'true') == 0);
if ($i == 0 && $siteMySqlEnabled && file_exists($connstrfile)) {
    /* Read connection string file */
    $handle = fopen($connstrfile, 'rb');
    $value = fread($handle, 1024);
    fclose($connstrfile);
    $i++;
    /* Authentication type */
    $cfg['Servers'][$i]['auth_type'] = 'config';
    /* Server parameters */
    $cfg['Servers'][$i]['host'] = preg_replace("/^.*Data Source=(.+?):.*$/", "\\1", $value);
    $cfg['Servers'][$i]['port'] = preg_replace("/^.*:(.+?);.*$/", "\\1", $value);
    $cfg['Servers'][$i]['connect_type'] = 'tcp';
    $cfg['Servers'][$i]['compress'] = false;
    $cfg['Servers'][$i]['user'] = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $cfg['Servers'][$i]['password'] = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    /* Select mysql if your server does not have mysqli */
    $cfg['Servers'][$i]['extension'] = 'mysqli';
    $cfg['Servers'][$i]['AllowNoPassword'] = false;
}

?>


