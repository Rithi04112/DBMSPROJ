<?php
include 'config.php';
if(isset($_POST['submit'])){
  $Name =$_POST['Name'];
  $year = $_POST['year'];
  $sem = $_POST['sem'];
  $date = $_POST['date'];
  $branch = $_POST['branch'];
  $section = $_POST['section'];
  $subject = $_POST['subject'];
  $ques1 = $_POST['ques1'];
  $ques2i = $_POST['ques-2i'];
  $ques2ii = $_POST['ques-2ii'];
  $ques2iii = $_POST['ques-2iii'];
  $ques2iv = $_POST['ques-2iv'];
  $ques2v = $_POST['ques-2v'];
  $ques3 = $_POST['ques3'];
  $ques4 = $_POST['ques4'];
  $remarks = $_POST['remarks'];
  $sql="INSERT INTO `feed`(  `Name`,  `year`, `sem`, `date`, `branch`, `section`, `subject`, `ques1`, `ques2i`, `ques2ii`, `ques2iii`, `ques2iv`, `ques2v`, `ques3`, `ques4`, `remarks`) 
  VALUES (  '$Name','$year', '$sem', '$date', '$branch', '$section', '$subject', '$ques1', '$ques2i', '$ques2ii', '$ques2iii', '$ques2iv', '$ques2v', '$ques3', '$ques4', '$remarks')";
 $result=mysqli_query($connection,$sql);
 if($result){
   echo"Thank u for filling the feedback";
 }else{
   die(mysqli_error($connection));
 }
}
?>