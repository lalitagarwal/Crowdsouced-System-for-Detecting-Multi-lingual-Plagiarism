<!DOCTYPE html>
<html>
    <head>
		<?php require_once("includes/connection.php") ?>
		<?php require_once("includes/functions.php") ?>
		<?php global $docID, $docNumber	?>
		<?php 
			session_start();
			$total_Docs=5;
			if((isset($_GET["docID"]))){
				$docID= $_GET["docID"];
				if($docID>=6){
					$docID= 1;
					$docNumber= 1;	
				}
			}
			else{
				unset($_SESSION['id']);
			}
			
			if(!(isset($_SESSION['id']))){
				$_SESSION['id']=1;
				if(isset($_SESSION['userid'])){
					$_SESSION['userid'] = $_SESSION['userid'] + 1;
				}
				else{
					$_SESSION['userid'] = 1;
				}
				logsession_details($_SESSION['userid']);
				$docID=1;
				$docNumber=1;
			}
		
		
		if(isset($_POST['nextDoc'])){
			$docID= $_GET["docID"];
			$docNumber= $_GET["docNumber"];
			logsession_activity($_SESSION['userid'], ($docID-1), $_POST['radio1']);
		}
		
		if(isset($_POST['submitDoc'])){
			$docID= $_GET["docID"];
			$docNumber= $_GET["docNumber"];
			//echo $_SESSION['userid'];
			logFinalTime($_SESSION['userid']);
			logsession_activity($_SESSION['userid'], ($docID-1), $_POST['radio1']);
			unset($_SESSION['id']);
			$docID= 1;
			$docNumber= 1;
		}
		
		?>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="product" content="Cross Language Plagiarism Detector">
		<meta name="description" content="Simple responsive css framework">
		<meta name="author" content="Lalit Agarwal">
		
		<link rel="stylesheet" href="style/css/metro-bootstrap.css">
        <script src="style/js/jquery/jquery-2.1.1.min.js"></script>
        <script src="style/js/jquery/jquery.widget.min.js"></script>
		<script src="style/js/jquery/jquery.mousewheel.js"></script>
		
		<script type="text/javascript" src="style/js/texthighlighter/jquery.textHighlighter.js"></script>
		<script type="text/javascript" src="style/js/texthighlighter/rangy-core.js"></script>
		<script src="style/js/metro/metro-scroll.js"></script>
		<script src="style/js/metro/metro-progressbar.js"></script>
		<script src="style/js/metro/metro-panel.js"></script>
		<script src="style/js/metro/metro-accordion.js"></script>
		<script src="style/js/metro/metro-carousel.js"></script>
	   
	   <script type="text/javascript" src="style/js/textselector.js"></script>
	   
		<style>
		mark { 
			background-color: #99CCFF;
			color: black;
		}
		</style>
    </head>
    <body class="metro">		
		<?php 
			if($docNumber!=$total_Docs){
				echo "<div id=\"progress\" class=\"progress-bar large\" data-role=\"progress-bar\" data-color=\"bg-blue\" data-value=\"".($docNumber/$total_Docs*100)."\" data-max=\"100\" ></div>";
			}			
			else{
				echo "<div id=\"progress\" class=\"progress-bar large\" data-role=\"progress-bar\" data-color=\"bg-green\" data-value=\"".($docNumber/$total_Docs*100)."\" data-max=\"100\" ></div>";
			}
		?>
		<div class="grid fluid">
			<div class="row" >
				<div class="span4">
					<h2><center>CHINESE</center><h2>
				</div>
				<div class="span4">
					<h2><center>ENGLISH</center><h2>
				</div>
				<div class="span4">
					<h2><center>FEEDBACK</center></h2>
				</div>
			</div>
			<div class="row" >
				<div class="span4">
					<div id="scrollbox1" data-role="scrollbox1" data-scroll="both" class="readable-text">
					?????????????????????????????????????????????????????????,????????????
					??????(Pew Research Center)??????????????????,?????????????????,??????????????,?????????????????????????,?????????,?????????????
					????????????????,????????,?????·???(Edward Snowden)???????????,????????????????????????,???????????????????,?????????????????,?????????????????
					</div>
				</div>
				<div class="span4">
					<div class="carousel">
						<div class="slide">
							<div id="scrollbox1" data-role="scrollbox2" data-scroll="both" class="readable-text">
								Americans say they are deeply concerned about privacy on the web and their cellphones. They say they do not trust Internet companies or the government to protect it. Yet they keep using the services and handing over their personal information.
								That paradox is captured in a new survey by Pew Research Center. It found that there is no communications channel, including email, cellphones or landlines, that the majority of Americans feel very secure using when sharing personal information. Of all the forms of communication, they trust landlines the most, and fewer and fewer people are using them.
								Distrust of digital communication has only increased, Pew found, with the young expressing the most concern by some measures, in the wake of the revelations by Edward Snowden about online surveillance by the government. Yet Americans for now seem to grudgingly accept that these are the trade-offs of living in the digital age — or else they fear that it is too late to do anything about it.
							</div>
						</div>
					 
						<div class="slide">
							<div id="scrollbox1" data-role="scrollbox2" data-scroll="both" class="readable-text">
								Americans say they are deeply concerned about privacy on the web and their cellphones. They say they do not trust Internet companies or the government to protect it. Yet they keep using the services and handing over their personal information.
								That paradox is captured in a new survey by Pew Research Center. It found that there is no communications channel, including email, cellphones or landlines, that the majority of Americans feel very secure using when sharing personal information. Of all the forms of communication, they trust landlines the most, and fewer and fewer people are using them.
								Distrust of digital communication has only increased, Pew found, with the young expressing the most concern by some measures, in the wake of the revelations by Edward Snowden about online surveillance by the government. Yet Americans for now seem to grudgingly accept that these are the trade-offs of living in the digital age — or else they fear that it is too late to do anything about it.
							</div>
						</div>
					 
						<a class="controls left"><i class="icon-arrow-left-3"></i></a>
						<a class="controls right"><i class="icon-arrow-right-3"></i></a>
					</div>
				</div>
				<div class="span4">
					<form id="getNextDoc" class="form-vertical" role="form" action="index4.php" method="post">
						<label><h3>How do you rate the performance of the algorithm</h3></label>
						<div class="input-control radio default-style" data-role="input-control">
							<label>
								<input type="radio" name="radio1" value="Very Good" checked />
								<span class="check"></span>
								Very Good
							</label>					
							<label>
								<input type="radio" name="radio1" value="Good" />
								<span class="check"></span>
								Good
							</label>	
							<label>
								<input type="radio" name="radio1" value="Bad" />
								<span class="check"></span>
								Bad
							</label>
						</div>
						<label><h3>Do you think Top1 document is plagiarised</h3></label>
						<div class="input-control radio default-style" data-role="input-control">
							<label>
								<input type="radio" name="radio1" value="Yes" checked />
								<span class="check"></span>
								Yes
							</label>					
							<label>
								<input type="radio" name="radio1" value="No" />
								<span class="check"></span>
								No
							</label>	
							<label>
								<input type="radio" name="radio1" value="Not Sure" />
								<span class="check"></span>
								I am not sure
							</label>
						</div>
						<label><h3>If any, what are the topics which were present in the Chinese Doc but not in the English doc?</h3></label>
						<div class="input-control text" data-role="input-control">
						<input type="text" placeholder="Topics"/>
					</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="span4 offset2">
					<div class="panel collapsed" id="panel_similarity" data-role="panel">
						<div class="panel-header bg-lightGreen fg-white">
							Documents Similarity
						</div>
						<div style=display:none; class="panel-content bg-white fg-dark nlp nrp">
							<h3><center>0.25</h3></center>
						</div>
					</div>
				</div>
				<div class="span2 offset1">
					<center><button class="info" value = "next" name="nextDoc" id="next-btn">NEXT</button></center>		
				</div class="span2">
				<div class="span2">
					<center><button class="info" id="remove-highlights-btn">Remove all Highlights</button></center>
				</div>
			</div>
			<br>
		</div>
	</body>
	
<script type="text/javascript" id="snippet-source">
	$("#progress").progressbar({
		onchange: function(val){}
	});
</script>

<script type="text/javascript" id="snippet-source">
	$("#panel_similarity").panel({
		onCollapse: function(){},
         onExpand: function(){}
	});
</script>

<script type="text/javascript" id="snippet-source">
$("#english_docs").accordion({
    closeAny: true, //true or false. if true other frames (when current opened) will be closed
    open: function(frame){}, // when current frame opened this function will be fired
    action: function(frame){} // when any frame opened this function will be fired
});
</script>
<script type="text/javascript" id="snippet-source">
$('.carousel').carousel({
    auto: false,
    period: 3000,
    duration: 2000,
	controls: true,
    markers: {
		show: true,
        type: "default"
    }
});
</script>
</html>
