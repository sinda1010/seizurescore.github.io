<html>
<head>
<title> Insert Into table from form</title>
<style type="text/css">
        .form-field{
         clear:both;
         padding:10px; 
         width:350px;


}
#submit {
        text-align:center; 
}
</style>
</head>
<body>
<h1>Enter profile information</h1>
<hr>
<form action="#" method="post">
<fieldset>
<legend> Fill out Information</legend>
<div class="form-field">
        <label for="ID">ID:</label>
        <input type="text" id="id" name="ID">
    </div>
    <div class="form-field">
        <label for="meds">Medication:</Label>
        <input type="text" id="id" name="meds">
    </div>
	<div class="form-field">
        <label for="otherMeds">Other Medication:</Label>
        <input type="text" id="id" name="otherMeds">
    </div>
    <div class="form-field">
        <div> Caloric Intake:</div>
        <input id="id" type="radio" name="food" value="1">
        <label for="LowCal">LOW</label>
        <input id="id" type="radio" name="food" value="2">
        <label for="MedCal">MED</label>
        <input id="id" type="radio" name="food" value="3">
        <label for="HighCal">HIGH</label>
    </div>
     
     <div class="form-field">
        <div> Activity Level:</div>
        <input id="LowAct" type="radio" name="activity" value="1">
        <label for="LowAct">LOW</label>
        <input id="MedAct" type="radio" name="activity" value="2">
        <label for="MedAct">MED</label>
        <input id="HighAct" type="radio" name="activity" value="3">
        <label for="HighAct">HIGH</label>
    </div> 
   
    <div class="form-field">
        <div> Water Intake:</div>
        <input id="LowWat" type="radio" name="water" value="1">
        <label for="LowWat">1-3 ounces</label>
        <input id="MedWat" type="radio" name="water" value="2">
        <label for="MedWat">4-6 ounces</label>
        <input id="HighWat" type="radio" name="water" value="3">
        <label for="HighWat">6-8 ounces</label>
    </div>
    <div class="form-field">
        <div> Sleep:</div>
        <input id="LowS" type="radio" name="sleep" value="1">
        <label for="LowS">1-3 hours</label>
        <input id="MedS" type ="radio" name="sleep" value="2">
        <label for ="MedS">4-6 hours</label>
        <input id="HighS" type="radio" name="sleep" value="3">
        <label for="HighS">7+ hours</label>
    </div>
     <div class="form-field">
        <label for="log">Logged By:</Label>
        <input type="text" id="id" name="log">
    </div>
    <div class="form-field">
        <input id ="submit" type="submit" name="submit"
        value="send Form">
    
        <script type ="text/javascript">
          document.getElementById('submit').onclick=function(){
             alert("Form has been Submitted");
        
        };       
        </script>
        
        <?php
        $id=$_POST["ID"];
        $meds=$_POST["meds"]; 
		$otherMeds=$_POST["otherMeds"];
        $food=$_POST["food"];
        $activity=$_POST["activity"];
        $water=$_POST["water"];
        $sleep=$_POST["sleep"];
        $log=$_POST["log"]; 
        $link =mysql_connect('localhost','dasinda','5tnhSf1mY/ax')or  die('could not connect:'.mysql_error()); 
        $select=mysql_select_db('dasinda_seizureDB',$link); 
        echo "database connected and seleted"; 

       
        $query="INSERT INTO DailyInfo (ID,meds,otherMeds,food,activity,water,sleep,log)
        VALUES ('$id','$meds','$otherMeds','$food','$activity','$water','$sleep','$log')"; 

        //check if data could be entered 

        $retval=mysql_query($query,$link); 
        if(!$retval){

        die ('could not enter data: '.mysql_error()); 

        }
        echo 'entered data successfully '; 

        
        
        ?>
        
    </div>
    
</fieldset>
</form>

</body>
</html>
