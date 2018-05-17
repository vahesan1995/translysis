<?php
include 'config.php';
$url=$_POST['link'];    //file location
$email=$_POST['email'];
$filename=$_POST['filename'];   //filename

$filequery=$mysqli->query("Select Count(fileid) as count from files");  //num of files
$filecount=$filequery->fetch_object();
$count=$filecount->count;
$count+=1;
$filename=substr($filename, 0, -4); //making unique file name
$filename=$filename.(string)$count.'.pdf';

$path = '/storage/ssd4/319/5689319/public_html/files/'.$filename;  // location to save file
$newfname = $path;
//File Transfer
$file = fopen ($url, "rb");
if($file) {
    $newf = fopen ($newfname, "wb");
    if($newf)
        while(!feof($file)) {
            fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
        }
}
if($file) {
    fclose($file);  //close file
}
if($newf) {
    fclose($newf);
}

$date=date('Y-m-d H:i:s');  //received date and time

$statement = $mysqli->prepare("SELECT * from user where email = ?");   //user details
$statement->bind_param('s',$email);
$statement->execute();
$query=$statement->get_result();
$obj = $query->fetch_object();
$username=$obj->username;

$fileid=$username.(string)$count;   //unique file id
$loc='files/'.$filename;
$size=filesize($loc);

$results=$mysqli->query("INSERT INTO files (`username`,`fileid`, `filename`,`email`,`date`,`size`,`link`,`notification`,`download`) VALUES('$username','$fileid','$filename','$email','$date','$size','$loc',1,1)");

echo "<br>";
if($results){
    echo 'File transfer Successful';
} else {
    echo 'File Transfer Failed';
}

?>