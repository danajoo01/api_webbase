<?php
// koneksi ke database
$conn=mysql_connect('sql12.freemysqlhosting.net','sql12249728','LZARsHrGht');
$ps=0; 
if (! $conn){
$ps++;
}
 
$pilihDB=mysql_select_db($conn,'sql12249728');
 
$kata=$_GET['kata'];
$bahasa=$_GET['bahasa'];
 
if($ps==0){
 
if($bahasa=="indonesia"){
$cari=mysql_query($conn,"SELECT * FROM translate WHERE indonesia='$kata'");
} else if($bahasa=="cirebon"){
$cari=mysql_query($conn,"SELECT * FROM translate WHERE cirebon='$kata'");
}
 
$jum=mysql_num_rows($cari);
 
if($jum==0){
print("kata tidak tersedia");
}else{
 
$data=mysql_fetch_array($cari);
 
if($bahasa=="indonesia"){
print($data['cirebon']);
} else if($bahasa=="cirebon"){
print($data['indonesia']);
}
}
}
?>