<html>
<body>

<?php

error_reporting(E_ALL); 
//make connection and select the database 
$link =mysql_connect('localhost','dasinda','5tnhSf1mY/ax'); 

if (!$link){
       die('could not connect:'.mysql_error()); 
       
}

echo 'connected'; 

$db_selected=mysql_select_db('dasinda_seizureDB',$link); 

if(!$db_selected)
{
   die('cant use mydb: '.mysql_error()); 

}
echo 'db selected';  

//create table 
mysql_query("CREATE TABLE DailyInfo(id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
   meds TEXT,
   otherMeds TEXT,
   food VARCHAR(30),
   activity VARCHAR(30),
   water INT, 
   sleep INT,
   log VARCHAR(30))")
   or die(mysql_error()); 

echo 'table created'; 
mysql_close($link); 

 
 
?>

</body>
<html>
