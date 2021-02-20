<?php

function validate($filename, $path,$command){
  // echo$path."<br>".$filename."<br>";
  $input=[[4,2,3,1,1,2,1],[10,5,13,5,9,4,4,1,0,0,1,7,6],[3,1,30,2,2,]];
  $result=[11,5,9];

  // echo $filename;
  shell_exec(' cd '.$path);
 shell_exec(' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe' );
shell_exec('cd '.$path.' &&gcc '.$filename.'.cpp -o '.$filename.'.exe' );
shell_exec(' cd '.$path.' &&javac '.$filename.'.java' ); 
$filename= ltrim($filename,' ');
$inputfile='C:/Users/PC/Desktop/xamp/htdocs/New_folder/cod/uploades/verification/input.txt';
foreach ($input as $key => $value) {
  $f=fopen($inputfile,"w");
  foreach ($value as $key2 => $value2) {
  $f=fopen($inputfile,"a");
  fwrite($f,$value2.' ');
  }
  if($command=='c'||$command=='cpp')
  {
    $b=shell_exec($path.''.$filename.'.exe<'.$inputfile);
    // echo $path.''.$filename.'.exe<'.$inputfile;
  // echo $path.''.$filename.'.exe<C:/Users/PC/Desktop/xamp/htdocs/cod/uploades/verification/input.txt ';
  // exec($path.''.$filename.'.exe<C:/Users/PC/Desktop/xamp/htdocs/cod/uploades/verification/input.txt',$c);
  // print_r($c);
}
  else if($command=='java')
  $b=shell_exec('java '.$path.''.$filename.$inputfile);
  else $b=shell_exec('py  '.$path.''.$filename.'.py<'.$inputfile);
  // echo $result[$key];/
  // echo $b;/
  if($b!=$result[$key]) return false;
}
 // echo ' cd '.$path.' &&gcc '.$filename.'.c -o '.$filename.'.exe';
 // echo $b;
 // echo $path.$filename.'.exe';
// echo $b;
 return true;
}
// echo validate('e','b','c');









 ?>
