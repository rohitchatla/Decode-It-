<?php
if(isset($_POST['submitt'])){
include "db.php";
include "index.php";
$give=array('V','I','B','G','Y','O','R');


$randkeys=array_rand($give,4);
$give1=$give[$randkeys[0]];
$give2=$give[$randkeys[1]];
$give3=$give[$randkeys[2]];
$give4=$give[$randkeys[3]];





/**/







/*$random1=$give[mt_rand(0,count($give)-1)];
$random2=$give[mt_rand(0,count($give)-1)];
$random3=$give[mt_rand(0,count($give)-1)];
$random4=$give[mt_rand(0,count($give)-1)];

if($random1==$random2){
	$random2=$give[$random1+1];

}

if($random1==$random3 || $random2==$random3){
if($random1==$random3){
$random3=$give[$random1+2];
}
if($random2==$random3){
$random3=$give[$random2+1];;
}
}

if($random1==$random4 || $random2==$random4 || $random3==$random4){
if($random1==$random4){
$random3=$give[$random1+3];;
}
if($random2==$random4){
$random3=$give[$random2+2];;
}
if($random3==$random4){
$random3=$give[$random3+1];;
}

}
$give1=$random1;
$give2=$random2;
$give3=$random3;
$give4=$random4;
*/




/**/






//shuffle($give);
/*$random1=$give[mt_rand(0,count($give)-1)];
$random2=$give[mt_rand(0,count($give)-1)];
if($random1==$random2){
$random2=$give[$random1+1];
$give2=$random2;
}else{
	$give2=$random2;
}
$random3=$give[mt_rand(0,count($give)-1)];
if($random1==$random3 || $random2==$random3  ){
	if($random1==$random2){
		$random3=$give[$random1+1];
}
if($random2==$random3){
	$random31=$give[$random2+1];//$give[mt_rand(0,count($give)-1)+1];
	$give3=$random31;
}
else{
	$give3=$random3;
}
}else{
	$give3=$random3;
}

$random4=$give[mt_rand(0,count($give)-1)];
if($random1==$random4 || $random2==$random4 || $random3==$random4 ){
if($random1==$random4){
$random4=$give[$random1+1];}
if($random2==$random4){
$random41=$give[$random2+1];
$give4=$random41;
}
else{
	$give4=$random4;
}
if($random3==$random4){
$random42=$give[$random3+1];
$give4=$random42;
}
else{
	$give4=$random4;
}
}else{
	$give4=$random4;
}
$give1=$random1;
//$give2=$random2;
//$give3=$random3;
//$give4=$random4;
*/
$sql="UPDATE game SET g1='$give1' , g2='$give2' , g3='$give3' , g4='$give4'";/*"insert into game(g1,g2,g3,g4) values('$give1','$give2','$give3','$give4')";*/
$result=$conn->query($sql);
header("Location:index.php");
}
?>



<?php

if(isset($_POST['submit1'])){
include "db.php";
include "index.php";
$give1=$_POST['give1'];
$give2=$_POST['give2'];
$give3=$_POST['give3'];
$give4=$_POST['give4'];

$sql="UPDATE game SET g1='$give1' , g2='$give2' , g3='$give3' , g4='$give4'";/*"insert into game(g1,g2,g3,g4) values('$give1','$give2','$give3','$give4')";*/
$result=$conn->query($sql);
header("Location:index.php");
}


if(isset($_POST['submit2'])){
	include "db.php";
include "index.php";
	$give11=$_POST['give11'];
$give22=$_POST['give22'];
$give33=$_POST['give33'];
$give44=$_POST['give44'];
$q=4;

$out=array($give11,$give22,$give33,$give44);


/**/

//$conn->close();
/**/

$sql="SELECT * FROM game";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){

		for($i=0;$i<4;$i++)
{$in = array($row['g1'],$row['g2'],$row['g3'],$row['g4']);
	if($in[$i]==$out[0]){

		if($i==0){echo "1";
		$q.=1;

//$sql="insert into give(tt) value('1')";
//$result=$conn->query($sql);
}else{
	echo "0";

$q.=0;



}
	}
}

for($i=0;$i<4;$i++)
{$in = array($row['g1'],$row['g2'],$row['g3'],$row['g4']);
	if($in[$i]==$out[1]){

		if($i==1){echo "1";
		$q.=1;
}else{
	echo "0";
	$q.=0;
}
	}
}

for($i=0;$i<4;$i++)
{$in = array($row['g1'],$row['g2'],$row['g3'],$row['g4']);
	if($in[$i]==$out[2]){

		if($i==2){echo "1";
		$q.=1;
}else{
	echo "0";
	$q.=0;
}
	}}

for($i=0;$i<4;$i++)
{$in = array($row['g1'],$row['g2'],$row['g3'],$row['g4']);
	if($in[$i]==$out[3]){

		if($i==3){echo "1";
		$q.=1;
}else{
	echo "0";
	$q.=0;
}
	
//$sql="insert into give(tt) value('$q')";
//$result=$conn->query($sql);

	}
}

















		/*if($row['g1']==$give11 && $row['g2']==$give22 && $row['g3']==$give33 && $row['g4']==$give44){
		//header("Location:e.php");

	echo "<br>"."1111"."<br>";
	
	exit();
	}
	else if($row['g1']==$give11 && $row['g2']==$give22 && $row['g3']==$give33){
		echo "111";
	}
	else if($row['g1']==$give11 && $row['g3']==$give33 && $row['g4']==$give44){
		echo "111";
	}
	else if($row['g1']==$give11 && $row['g2']==$give22 && $row['g4']==$give44){
		echo "111";
	}
	else if($row['g2']==$give22 && $row['g3']==$give33 && $row['g4']==$give44){
		echo "111";
	}
	else if($row['g1']==$give11 && $row['g2']==$give22){
		echo "11";
	}
else if($row['g1']==$give11 && $row['g3']==$give33){
		echo "11";
	}
	else if($row['g1']==$give11 && $row['g4']==$give44){
		echo "11";
	}
	else if($row['g2']==$give22 && $row['g3']==$give33){
		echo "11";
	}
	else if($row['g2']==$give22 && $row['g4']==$give44){
		echo "11";
	}
	else if($row['g3']==$give33 && $row['g4']==$give44){
		echo "11";
	}*/















}
}else{
	echo "No result";
}
}
$sql1="insert into give(g1,g2,g3,g4,tt) values('$give11','$give22','$give33','$give44','$q')";
$result=$conn->query($sql1);

$sql="SELECT * FROM give";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
	echo "<br>".$row['g1']."-".$row['g2'].'-'.$row['g3'].'-'.$row['g4']."<br>".$row['tt']."<br>";
}
}else{
	echo "No result";
}