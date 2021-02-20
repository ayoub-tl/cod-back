<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
if(isset($_POST['user_token'])&&isset($_POST['user_id'])){
  header('Access-Control-Allow-Origin: *');
  $host =  'localhost';
$user = 'root';
$password = '';
$dbname = 'cod';
$dsn = 'mysql:host='. $host .';dbname='. $dbname;
$pdo = new PDO($dsn, $user, $password);
 $sql='SELECT users.user_id,users.token,users.user_name FROM users WHERE users.user_id=? AND users.token=?' ;
 // echo $sql;
 // $sql='SELECT users.* FROM users WHERE users.user_name="'.$_POST['user_name'].'" and password="'.$_POST['user_password'].'"';
 $stmt = $pdo->prepare($sql);
 $r=$stmt->execute([$_POST['user_id'],$_POST['user_token']]);
 // $r=$stmt->fetch(PDO::FETCH_ASS²OC);
$row= $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($row)) {
  $row['status']='true';
  echo json_encode($row);
}
else {
  $row['status']='false';
  echo json_encode($row);
}

 // $sql="SELECT users.token FROM users WHERE users.user_id=?";
 // $stmt = $pdo->prepare($sql);
 // $stmt->execute([$_POST['user_id']]);
 // // echo json_encode($r) ;
//  if(/*$r['token']==0*/1==1) echo json_encode(["message"=>"logout succefly"]) ;
// else  echo json_encode(["message"=>"no logout succefly"]);

}











 ?>
