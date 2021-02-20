<?php
header('Access-Control-Allow-Origin: *');
$host =  'localhost';
$user = 'root';
$password = '';
$dbname = 'cod';
$dsn = 'mysql:host='. $host .';dbname='. $dbname;
$pdo = new PDO($dsn, $user, $password);

if(isset($_FILES['file'])&&isset($_POST['user_name'])&&(isset($_POST['algo']))&&isset($_POST['user_id'])){
include '../uploades/verification/'.$_POST['algo'].'.php';
$file=explode('.',$_FILES['file']['name']);
$filename=$file[0];
$file_extension=$file[1];
$path='C:/Users/PC/Desktop/xamp/htdocs/New_folder/cod/uploades/'.$_POST['user_name'].'/';
//the shell_exec execut command from cmd and it start from the root so you to include a absoulute path for it to work
// print_r($_FILES['file']['tmp_name']) ;
// echo '///'.$path;
if (is_uploaded_file($_FILES['file']['tmp_name']))
{
//     $myfile = fopen($_FILES['file']['tmp_name'], "r") or die("Unable to open file!");
// echo fread($myfile,filesize($_FILES['file']['tmp_name']));
// fclose($myfile);

copy (  str_replace("\\", "/", $_FILES['file']['tmp_name'] ), $path.$_FILES['file']['name']);


}

$path='C:/Users/PC/Desktop/xamp/htdocs/New_folder/cod/uploades/"'.$_POST['user_name'].'"/';
$answer=validate($filename,$path,$file_extension);
// validate is a function that exist in all the file in the folder verification and base on the name of algo it inclue the file specifique to that algo and the validate function specifique to it
echo($answer) ? ("true"):("false");
}

 ?>
