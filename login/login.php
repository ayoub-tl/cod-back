<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
// $_POST['user_name']="team 1";
// $_POST['user_password']='team1';

$host =  'localhost';
$user = 'root';
$password = '';
$dbname = 'cod';
$dsn = 'mysql:host='. $host .';dbname='. $dbname;
$pdo = new PDO($dsn, $user, $password);
if(isset($_POST['user_name'])&&isset($_POST['user_password'])){
  $sql='SELECT users.* FROM users WHERE users.user_name=? and password=?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$_POST['user_name'],$_POST['user_password']]);
  $row= $stmt->fetch(PDO::FETCH_ASSOC);
    if(is_array($row)){
   if($row['token']==0)
   {
     $user_token=md5(uniqid());
     $sql='UPDATE users SET users.token=? WHERE users.user_id= ?';
     // echo $sql;
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$user_token,$row['user_id']]);
   // print_r($row);
   $sql='SELECT users.* FROM users WHERE users.user_id=?';
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$row['user_id']]);
   $row= $stmt->fetch(PDO::FETCH_ASSOC);
    //  print_r($row);
 }
 $result=['user_id'=>$row['user_id'],'user_token'=>$row['token'],'user_name'=>$row['user_name']];
echo json_encode($result);

} else{
 $result=["message"=>" No user found with that name and password ,check again"];
echo json_encode($result);
}

}
// else echo json_encode("fuck you");
// $_POST['logout']=true;
// $_POST['user_token']=125;
// $_POST['user_id']=1;
if(isset($_POST['logout'])&&isset($_POST['user_token'])&&isset($_POST['user_id'])){
 $sql='UPDATE users SET users.token=0 WHERE users.user_id= ? AND users.token = ?' ;
 // echo $sql;
 // $sql='SELECT users.* FROM users WHERE users.user_name="'.$_POST['user_name'].'" and password="'.$_POST['user_password'].'"';
 $stmt = $pdo->prepare($sql);
 $r=$stmt->execute([$_POST['user_id'],$_POST['user_token']]);


 // $sql="SELECT users.token FROM users WHERE users.user_id=?";
 // $stmt = $pdo->prepare($sql);
 // $stmt->execute([$_POST['user_id']]);
 // $r=$stmt->fetch(PDO::FETCH_ASSOC);
 // // echo json_encode($r) ;
 if(/*$r['token']==0*/1==1) echo json_encode(["message"=>"logout succefly"]) ;
else  echo json_encode(["message"=>"no logout succefly"]);

}








 ?>
