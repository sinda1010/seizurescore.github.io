<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
        <?php

            $link =mysql_connect('localhost','dasinda','5tnhSf1mY/ax')or  die('could not connect:'.mysql_error()); 
            $select=mysql_select_db('dasinda_seizureDB',$link); 
            
        ?>
        
        <form action="#" method="post">
        <table class="striped">
            <tr class="header">
            <div class ="form-field">
			      <label for="ID">Enter your Id:</label>
				  <input type="text" id="Id" name="ID">
				  <input id ="submit" type="submit" name="submit" value="Search">
		</form>
		    </div>
            
                
                <td>Medication</td>
                <td>Other Medication</td>
                <td>Caloric Intake</td>
                <td>Activity</td>
                <td>Water Intake</td>
                <td>Sleep</td>
                <td>Log</td>
            </tr>
           
            <?php
               $userID=$_POST['ID'];
               $userName=$_POST['log'];
               $query = mysql_query("SELECT * FROM DailyInfo WHERE Id= $userID ");
               if (!$query) 
               { // add this check.
                 //die('Invalid query: ' . mysql_error());
                    error_reporting(0);
                    ini_set('display_errors', 0);              
               }
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row['meds']."</td>";
                   echo "<td>".$row['otherMeds']."</td>";
                   echo "<td>".$row['food']."</td>";
                   echo "<td>".$row['activity']."</td>";
                   echo "<td>".$row['water']."</td>";
                   echo "<td>".$row['sleep']."</td>";
                   echo "<td>".$row['log']."</td>";
                   echo "</tr>";
               }

            ?>
        </table>

</body>
</html>
