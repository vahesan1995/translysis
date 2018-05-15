<?php
include 'config.php';
$url=$_POST['link'];
$email=$_POST['email'];
$filename=$_POST['filename'];

$filequery=$mysqli->query("Select Count(fileid) as count from files");
$filecount=$filequery->fetch_object();
$count=$filecount->count;
$count+=1;
$filename=substr($filename, 0, -4);
$filename=$filename.(string)$count.'.pdf';

$path = '/storage/ssd4/319/5689319/public_html/files/'.$filename;
$newfname = $path;
echo 'Starting File Transfer!<br>';
$file = fopen ($url, "rb");
if($file) {
    $newf = fopen ($newfname, "wb");
    if($newf)
        while(!feof($file)) {
            fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
        }
}
if($file) {
    fclose($file);
}
if($newf) {
    fclose($newf);
}
echo 'File Transfered!';

$date=date('Y-m-d H:i:s');

$query = $mysqli->query("SELECT * from user where email = '$email'");
$obj = $query->fetch_object();
$username=$obj->username;

$fileid=$username.(string)$count;
$loc='files/'.$filename;
$size=filesize($loc);

$results=$mysqli->query("INSERT INTO files (`username`,`fileid`, `filename`,`email`,`date`,`size`,`link`,`notification`,`download`) VALUES('$username','$fileid','$filename','$email','$date','$size','$loc',1,1)");

echo "<br>";
if($results){
    echo 'success';
} else {
    echo 'failed';
}

?>