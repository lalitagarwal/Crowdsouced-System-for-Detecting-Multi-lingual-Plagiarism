<!DOCTYPE html>
<html>
    <head>
		<?php require_once("includes/connection.php") ?>
		<?php require_once("includes/functions.php") ?>
		<?php global $docID, $docNumber	?>
		<?php 
			//echo $_POST['radio1'];
			//echo $_POST['radio2'];
			//echo $_POST['topics'];
			session_start();
			$total_Docs=4;
			if((isset($_GET["docID"]))){
				$docID= $_GET["docID"];
				if($docID>=(($total_Docs)+1)){
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
			logsession_activity($_SESSION['userid'], ($docID-1), $_POST['radio1'], $_POST['radio2'], $_POST['topics']);
		}
		
		if(isset($_POST['submitDoc'])){
			$docID= $_GET["docID"];
			$docNumber= $_GET["docNumber"];
			//echo $_SESSION['userid'];
			logFinalTime($_SESSION['userid']);
			logsession_activity($_SESSION['userid'], ($docID-1), $_POST['radio1'], $_POST['radio2'], $_POST['topics']);
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
		<script src="style/js/metro/metro-tab-control.js"></script>
		
	   <script type="text/javascript" src="style/js/textselector.js"></script>
	   
		<style>
		
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
				<tr>
				<div class="span4">
					<h2><center>FEEDBACK</center></h2>
				</div>
			</div>
			<div class="row" >
				<div class="span4">
					<div id="scrollbox1" data-role="scrollbox" data-scroll="both" class="readable-text">
					<?php
						$result=getDocuments($docID);
						echo $result['CDoc'];
					?>
					</div>
				</div>
				<div class="span4">
					<div class="tab-control" data-role="tab-control">
						<ul class="tabs">
							<li class="active"><a href="#_page_1">Top1 Document</a></li>
							<li><a href="#_page_2">Top2 Document</a></li>
							<li><a href="#_page_3">Top3 Document</a></li>
						</ul>
					 
						<div class="frames">
							<div class="frame" id="_page_1">
								<div id="scrollbox2" data-role="scrollbox" data-scroll="both" class="readable-text">
								<?php
									$result=getDocuments($docID);
									echo $result['EDoc1'];
								?>
								</div>
								<br>
								<div class="panel" id="panel_similarity" data-role="panel" style="width: 65%; margin: 0 auto;">
									<div class="panel-header bg-lightBlue fg-white">
										Documents Similarity
									</div>
									<div class="panel-content bg-white fg-dark nlp nrp">
										<h3><center><?php $result=getDocuments($docID); echo $result['Sim1'];?></h3></center>
									</div>
								</div>
							</div>
							<div class="frame" id="_page_2">
								<div id="scrollbox3" data-role="scrollbox" data-scroll="both" class="readable-text">
								<?php
									$result=getDocuments($docID);
									echo $result['EDoc2'];
								?>
								</div>
								<br>
								<div class="panel" id="panel_similarity" data-role="panel" style="width: 65%; margin: 0 auto;">
									<div class="panel-header bg-lightBlue fg-white">
										Documents Similarity
									</div>
									<div class="panel-content bg-white fg-dark nlp nrp">
										<h3><center><?php $result=getDocuments($docID); echo $result['Sim2'];?></h3></center>
									</div>
								</div>
							</div>
							<div class="frame" id="_page_3">
								<div id="scrollbox4" data-role="scrollbox" data-scroll="both" class="readable-text">
								<?php
									$result=getDocuments($docID);
									echo $result['EDoc3'];
								?>
								</div>
								<br>
								<div class="panel" id="panel_similarity" data-role="panel" style="width: 65%; margin: 0 auto;">
									<div class="panel-header bg-lightBlue fg-white">
										Documents Similarity
									</div>
									<div class="panel-content bg-white fg-dark nlp nrp">
										<h3><center><?php $result=getDocuments($docID); echo $result['Sim3'];?></h3></center>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="span4">
					<?php					
						echo "<form id=\"submitFeedback\" class=\"form-horizontal\" role=\"form\" action=\"index.php?docID=".($docID+1)."&docNumber=".($docNumber+1)."\" method=\"post\">";
					?>
						<label><h3>How do you rate the performance of the algorithm?</h3></label>
						<div class="input-control radio default-style" data-role="input-control">
							<h4><label>
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
							</label></h4>
						</div>
						<hr>
						<label><h3>Do you think the Top1 document is plagiarised?</h3></label>
						<div class="input-control radio default-style2" data-role="input-control">
							<h4><label>
								<input type="radio" name="radio2" value="Yes" checked />
								<span class="check"></span>
								Yes
							</label>					
							<label>
								<input type="radio" name="radio2" value="No" />
								<span class="check"></span>
								No
							</label>	
							<label>
								<input type="radio" name="radio2" value="Not Sure" />
								<span class="check"></span>
								I am not sure
							</label></h4>
						</div>
						<hr>
						<label><h3>If any, what are the topics which were present in the Chinese Doc but not in the English doc?</h3></label>
						<div class="input-control text" data-role="input-control">
							<input type="text" name="topics" placeholder="Topics"/>
						</div>
						<hr>
						<div class="row">
							<div class="span4">
								<?php
									if ($docNumber<$total_Docs)
										echo "<center><button class=\"info\" value = \"next\" name=\"nextDoc\" id=\"next-btn\">NEXT</button></center>";
									else
										echo "<center><button class=\"success\" value = \"submit\" name=\"submitDoc\" id=\"submit-btn\">SUBMIT</button></center>";
								?>
								</form>
							</div>
							<div class="span4">
								<form id="remove-hghlts">
									<center><button class="info" id="remove-highlights-btn">Remove all Highlights</button></center>	
								</form>
							</div>
							<div class="span4">
								<form id="StartAgain" class="form-horizontal" role="form" action="index.php" method="post">
									<center><button class="info" id="start-over-btn">Start Over</button></center>
								</form>
							</div>
						</div>
				</div>
				
			</div>

		</div>
	</body>

<script type="text/javascript" id="snippet-source">
	$("#scrollbox1").scrollbar({
		height: 400
    });
	$("#scrollbox2").scrollbar({
		height: 400
    });
	$("#scrollbox3").scrollbar({
		height: 400
    });
	$("#scrollbox4").scrollbar({
		height: 400
    });	
</script>
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
<script type="text/javascript" id="snippet-source">
$('.tab-control').tabcontrol({
	tabclick: function(tab){},
    tabchange: function(tab){}
    //effect: 'fade' // or 'slide'
});
</script>
</html>
