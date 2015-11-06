<!-- This file contains various user functions which are used in the web-application 
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
    </style>
	<link rel="stylesheet" href="style/css/bootstrap.css" type="text/css"/>	
	<link rel="stylesheet" href="style/css/bootstrap.min.css" type="text/css" >	
</head>
<body>
<?php
	global $emailaddr;
	//echo "email addr is {$emailaddr}";
	//Function to confirm that a query was successfully executed in the database
    function confirm_query($result_set, $fname){
        if(!$result_set){
            die("Database query failed at " . $fname  . ": ". mysql_error());
        }
    }
    
	//Function to get the document1 for a given ID
	function getDocuments($id){
        global $connection;
        $query="SELECT * FROM documents where ID='ID{$id}'";
		$result= mysqli_query($connection, $query);
		confirm_query($result, 'getDocuments');
		if ($row=mysqli_fetch_array($result)){
            return $row;
        } else {
            return NULL;
        }
    }
	
	function getTopWords1($id){
        global $connection;
        $query="SELECT Words1 FROM top10words where ID='ID{$id}'";
		$result= mysqli_query($connection, $query);
		confirm_query($result, 'getTopWords1');
        if ($row=mysqli_fetch_array($result)){
            return $row;
        } else {
            return NULL;
        }
    }
	
	function getTopWords2($id){
        global $connection;
        $query="SELECT Words2 FROM top10words where ID='ID{$id}'";
		$result= mysqli_query($connection, $query);
		confirm_query($result, 'getTopWords2');
        if ($row=mysqli_fetch_array($result)){
            return $row;
        } else {
            return NULL;
        }
    }
	
	function getSimilarity($id){
        global $connection;
         $query="SELECT * FROM documents where ID='ID{$id}'";
		$result= mysqli_query($connection, $query);
		confirm_query($result, 'getSimilarity');
        if ($row=mysqli_fetch_array($result)){
            return $row;
        } else {
            return NULL;
        }
    }
	
	function logsession_details($userid){
		global $connection;	
		$currTime= getcurrentTime();
		$query="INSERT INTO session_details(uid, start_time) Values ('{$userid}', '{$currTime}')";
		$result= mysqli_query($connection, $query);
		confirm_query($result, 'logsession_details');	
	}
	function logFinalTime($userid){
		global $connection;
		$currTime= getcurrentTime();
		$query="UPDATE session_details set end_time='{$currTime}' where uid='{$userid}'";
		$result= mysqli_query($connection, $query);
		confirm_query($result, 'logFinalTime');
	}
	
	function logsession_activity($userid, $docID, $rating, $plevel, $topics){
		global $connection;	
		$currTime= getcurrentTime();
		$query1="SELECT * FROM session_activity WHERE uid='{$userid}' AND ID='{$docID}'";
		$result1= mysqli_query($connection, $query1);
		if(mysqli_num_rows($result1)==null){
			$query2="INSERT INTO session_activity(uid, ID, Rating, plevel, Topics, time_finished) Values ('{$userid}', '{$docID}', '{$rating}', '{$plevel}', '{$topics}', '{$currTime}')";
			$result2= mysqli_query($connection, $query2);
			confirm_query($result2, 'logsession_activity');	
		}
	}
	
	function getCurrentTime(){
		$dt = new DateTime();
		$time= $dt->format('Y-m-d H:i:s');
		return $time;
	}
	
	function redirect_to($location){
        if($location!=NULL){
            header("Location: {$location}");
            exit;
        }
    }
   
    function mysql_prep($value){
        $magic_quotes_active=get_magic_quotes_gpc();
        $new_enough_php=function_exists("mysql_real_escape_string");
        if($new_enough_php){
            if($magic_quotes_active){$value=stripslashes($value);}
            $value=mysql_real_escape_string($value);
        }else {
            if(!$magic_quotes_active){ $value=addslashes($value); }
        }
        return $value;
    }
	  
?>
	<script src="style/js/jquery.min.js"></script>
	<script src="style/js/bootstrap.js"></script>
	<script src="style/js/bootstrap.min.js"></script>
</body>
</html>