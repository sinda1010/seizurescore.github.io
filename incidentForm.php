<html>
<head>
<title> Insert Into table from form</title>
<style type="text/css">
        .form-field{
         clear:both;
         padding:10px; 
         width:800px;


}
       
   
#submit {
        text-align:center; 
}
</style>
</head>
<body>

<h1>Incident Report</h1>
<hr>
<form action="#" method="post">
<fieldset>
<legend> Fill out Incident Form</legend>
<div class="form-field">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id">
    </div> 
    <div class="form-field">
        <div> Type of Seizure:</div>
         <select  Id="type" name="type" multiple >
            <option value="Grand mal">Grand Mal Seizure</option>
            <option value="tonic">Tonic Seizure</option>
            <option value="clonic">Clonic Seizure</option>
            <option value="tonic-clonic">Tonic-Clonic Seizure</option>
            <option value="Myoclonic">Myoclonic Seizure</option>
            <option value="absence">Absence Seizure</option>
            <option value="SimpPart">Simple Partial</option>
            <option value="compPart">Complex Partial</option>
            <option value="secGen">Secondary Generalized</option>
            <option value="Atonic">Atonic</option>
            <option value="AtipAb">Atypical Absence</option>
            <option value="infantileSpasm">Infantile Spasms</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="form-field">
        <label for="time">Time:</Label>
        <input type="text" id="id" name="time" value="<?php echo date("D, h:i:s a"); ?>"/>
    </div>
   <div class="form-field">
         
           <label for="date">Date:</Label>
           <input id="currDate" name="date" value="<?php echo date("M j, Y");?>"/>
          
    
    </div>
     
     <div class="form-field">
        <div> Duration:</div>
        <select Id="duration" name="duration">
            <option value="5-20s">5-20 seconds</option>
            <option value="20-40s">20-40 seconds</option>
            <option value="40-60s">40-60 seconds</option>
            <option value="60-80s">60-80 seconds</option>
            <option value="90+ seconds">90+ seconds</option>
        </select>
        
    </div> 
   
    <div class="form-field">
        <div> Response:</div>
        <div> 911 called?</div>
        <input id="yes_call" type="radio" name="response" value="911 called">
        <label for="yes_call">Yes</label>
        <input id="no_call" type="radio" name="response" value="911 not called">
        <label for="no_call">No</label>
        
        
    </div>
     <div class="form-field">
       <div> Description Of Incident:</div>
       <select Id="environment" name="environment" multiple>
          <option value="awarenessChange">Changes In Awareness</option>
          <option value="incontient">Loss of Bladder/Bowel control</option>
          <option value="lossComm">Lost the ability to communicate</option>
          <option value="A.R.M">Automatic Repeated Movements</option>
          <option value="aura"> Aura</option>
          <option value="other">Other</option>
          
      </select>
    </div>
     <div class="form-field">
        <label for="cluster">Cluster Count /Time Separation</label>
        <input type="text" id="id" name="cluster">
    </div> 
     <div class="form-field">
        <label for="stiff">Muscle Stiffness In:</label>
        <input type="text" id="id" name="stiff">
    </div> 
     <div class="form-field">
        <label for="twitch">Muscle Twitch In:</label>
        <input type="text" id="id" name="twitch">
    </div> 
    <div class="form-field">
          <div> Common Triggers:</div>
          <select  Id="commonTrigger" name="commonTrigger" multiple>
            <option value="changeInMed">Changes In Medication</option>
            <option value="tired/irregSleep">Overly Tired/Irregular Sleep</option>
            <option value="alocohol/Drug">Alcohol/Drug use</option>
            <option value="irregDiet">Irregular Diet</option>
            <option value="lights">Bright or Flashing Lights</option>
            <option value="fever">Fever/Overheated</option>
            <option value="stress">Emotional Stress</option>
            <option value="hormones">Hormonal Fluctuations</option>
            <option vlaue="other">Other</option>
        
        
          </select>
    </div>
    <div class="form-field">
        <label for="device">Device:(if used)</label>
        <input type="text" id="id" name="device">
    </div> 
    <div class="form-field">
        <label for="treatment">Rescue Intervention:</label>
        <input type="text" id="id" name="treatment">
    </div> 
     <div class="form-field">
          <div> Post Event Report:</div>
          <select  Id="postEvent" name="postEvent" multiple>
            <option value="noCommunication">Unable to Communicate?</option>
            <option value="remembersEvent">Remembers Seizure?</option>
            <option value="sleepy">Drowsy?</option>
            <option value="muscleWeak">Muscle Weakness?</option>
            <option vlaue="other">Other?</option>
        
        
          </select>
    </div>
   
     <div class="form-field">
     
        <label for="log">Logged By:</Label>
        <input type="text" id="id" name="log">
    </div>
    <div class="form-field">
        <input id ="submit" type="submit" name="submit">
     <script type ="text/javascript">
          document.getElementById('submit').onclick=function(){
             alert("Form has been Submitted");
        
        };       
        </script>
       
       
        <?php
        $id=$_POST["id"];
        $type=$_POST["type"]; 
        $time=$_POST["time"];
        $date=$_POST["date"];
        $duration=$_POST["duration"];
        $response=$_POST["response"];
        $commonTrig=$_POST["commonTrigger"];
        $environment=$_POST["environment"]; 
        $cluster=$_POST["cluster"];
        $device=$_POST["device"];
        $twitch=$_POST["twitch"];
        $stiff=$_POST["stiff"];
        $treatment=$_POST["treatment"];
        $postEvent=$_POST["postEvent"];
        $log=$_POST["log"]; 
        $link =mysql_connect('localhost','dasinda','5tnhSf1mY/ax')or  die('could not connect:'.mysql_error()); 
        $select=mysql_select_db('dasinda_seizureDB',$link); 
        //echo "database connected and seleted"; 

       
        $query="INSERT INTO Incident (id,type,date,duration,time,response,commonTrigger,environment,cluster,stiff,twitch,device,treatment,postEvent,log)
        VALUES ('$id','$type','$date','$duration','$time','$response','$commonTrig','$environment','$cluster','$stiff','$twitch','$device','$treatment','$postEvent','$log')"; 

        //check if data could be entered 

        $retval=mysql_query($query,$link); 
        if(!$retval){

        //die ('could not enter data: '.mysql_error()); 

        }
        //echo 'entered data successfully '; 

        
        
        ?>
        
    </div>
    
</fieldset>
</form>

</body>
</html>
