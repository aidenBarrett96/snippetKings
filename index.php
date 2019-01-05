<!--<?php
 class song {
     
     var $title, $artist, $album, $lyric, $start, $finish;
     
     function setDetails($newTitle, $newArtist, $album, $newLyric, $newStart, $newFinish) {
         $this->title = $newTitle;
         $this->artist = $newArtist;
         $this->album = $newAlbum;
         $this->lyric = $newLyric;
         $this->start = $newStart;
         $this->finish = $newFinish;
     } 
     
     function getTitle() {
         return $this->title;
     }
     
          function getArtist() {
         return $this->artist;
     }
     
          function getAlbum() {
         return $this->album;
     }
     
          function getLyric() {
         return $this->lyric;
     }
     
          function getStart() {
         return $this->start;
     }
     
          function getFinish() {
         return $this->finish;
     }
     
     
 }
 
?>-->
<html>
<head>
    <title>My Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="functions.js" type="text/javascript"></script>
<!--  
  

<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

	<link rel="stylesheet" href="themes/snippetKingTheme.css" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="jquery.ui.touch-punch.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=Bowlby One SC' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cabin Condensed' rel='stylesheet'>
<script>



		
		$( function() {
		
			$(".draggable").draggable({
			revert: function(event, ui) {
            // on older version of jQuery use "draggable"
            // $(this).data("draggable")
            // on 2.x versions of jQuery use "ui-draggable"
            // $(this).data("ui-draggable")
           /* $(this).data("uiDraggable").originalPosition = {
                top : 0,
                left : 0
            };*/
            // return boolean
            return !event;
            // that evaluate like this:
            // return event !== false ? false : true;
        }
		});			
			
			
		
			$(".letters").draggable({
			revert: function(event, ui) {
            // on older version of jQuery use "draggable"
            // $(this).data("draggable")
            // on 2.x versions of jQuery use "ui-draggable"
            // $(this).data("ui-draggable")
           /* $(this).data("uiDraggable").originalPosition = {
                top : 0,
                left : 0
            };*/
            // return boolean
            return !event;
            // that evaluate like this:
            // return event !== false ? false : true;
        }
		});			
		
		
		$("#testDrop").droppable();
		
		});

	


</script>
    

</head>
<body>

<div data-role="page" id="tapToContinue_page">
 
	<div data-role="header">
<h1><a href="#" class="appTitle">Snippet Kings</a></h1>
    </div><!-- /header -->
 
	<div role="main" class="ui-content" id="test1">
            <div id="test2">
            	<a href="#login_page" data-transition="fade">Tap to continue</a>
            </div>
    </div><!-- /content -->

 </div><!-- /page -->
 
 
 <!--Login or continue as guest page-->
 <div data-role="page" id="login_page">
 
 	<div data-role="header">
		<h1><a href="#" class="appTitle">Snippet Kings</a></h1>
    </div><!-- /header -->
  
   <div data-role="content">
   
      
      <div data-role="collapsible-set">
      	<!--Login-->
      	<div data-role="collapsible">
      		<h3>Login</h3>
              <form>
              	<div class="ui-field-contain">
    					<label for="username_log">Enter Username:</label>
   					 	<input type="text" name="username_log" id="username_log" placeholder="Username" value="">
				</div>
                <div class="ui-field-contain">
    					<label for="password_log">Enter Password:</label>
   					 	<input type="text" name="password_log" id="username_log" placeholder="Password" value="">
				</div>
                
                <input type="submit" name="submit_log" id="submit_log" value="Log In">

              </form>
      	</div>
      
      	<div data-role="collapsible">
      		<h3>Create an account</h3>
            	<form>
              	<div class="ui-field-contain">
    					<label for="username_reg">Enter Username:</label>
   					 	<input type="text" name="username_reg" id="username_reg" placeholder="Username" value="">
				</div>
                <div class="ui-field-contain">
    					<label for="password_reg">Enter Password:</label>
   					 	<input type="text" name="password_reg" id="username_reg" placeholder="Password" value="">
				</div>
                <div class="ui-field-contain">
    					<label for="passwordVer_reg">Verify Password:</label>
   					 	<input type="text" name="passwordVer_reg" id="passwordVer_reg" placeholder="Password" value="">
				</div>
                <div class="ui-field-contain">
    					<label for="email_reg">Email Address:</label>
   					 	<input type="text" name="email_reg" id="email_reg" placeholder="Email" value="">
				</div>
                
                <input type="submit" value="Register" name="submit_reg" id="submit_reg">
                
              </form>
     	 </div>
         
      
      </div>
      
      <a data-role="button" href="#mainMenu_page">Continue as guest</a>
   
   </div>
 
 </div>
 
    
<!--main menu page-->
<div data-role="page" id="mainMenu_page" data-theme="a">
 
<div data-role="header">
            <h1><a href="#" class="appTitle">Snippet Kings</a></h1>
            <a data-role="button" data-rel="dialog" href="#profile_page" data-transition="pop" data-icon="user" data-iconpos="notext" class="ui-btn-right"></a>
</div><!-- /header -->
 
	<div role="main" class="ui-content" id="mainMenu_menu">
                <a href="#singlePlayer_page" data-transition="fade" data-role="button" class="normalFont">Single player</a>
                <a href="#multiplayer_page" data-role="button" class="normalFont">Multiplayer</a>
                <a href="#" data-role="button" class="normalFont">Settings</a>
                <a href="#" data-role="button" class="normalFont">About</a>
      </div><!-- /content -->
</div><!-- /page -->
      
<!--profile dialog page -->
<div data-role="page" id="profile_page" data-theme="a">
      	<div data-role="header">
      		<h1 class="appTitle">Profile name</h1>
      	</div>
        
        <div data-role="content">
        	<div>
        		<h1>Level</h1>
            	<p>insert data</p>
        		<h1>Performance</h1>
            	<p>insert data</p>
            	<br>
            	<h1>Ranking</h1>
            	<p>insert data</p>
            	<br>
        	</div>
            
            	<a href="#" data-role="button" class="normalFont">Edit profile</a>
                <a href="#" data-role="button" class="normalFont">Sign out</a>

        </div>
 
         

      </div><!--end profile page-->
      
      
      
            <!-- single player page-->
       <div data-role="page" id="singlePlayer_page">
 
        <div data-role="header">
            <h1><a href="#mainMenu_page" class="appTitle">Snippet Kings</a></h1>
                        <a data-role="button" data-rel="dialog" href="#profile_page" data-transition="pop" data-icon="user" data-iconpos="notext" class="ui-btn-right"></a>
        </div><!-- /header -->
 
        <div role="main" class="ui-content" id="test1">
            
                <a href="#campaignSelect_Page" data-transition="fade" data-role="button" class="normalFont">Campaign</a>
                <a href="#" data-role="button" class="normalFont">Quick Game</a>
                <a href="#" data-role="button" class="normalFont">Endless mode</a>
            
      </div><!-- /content -->
      
      <div data-role="footer">	
      <a href="#" data-role="button" id="singlePlayer_dailyChallenge" class="normalFont">Daily Challenge</a>
      </div>
</div><!--end page -->


<!-- Campaign Select Page-->
<div data-role="page" id="campaignSelect_Page">
	<div data-role="header">
		<a data-role="button" href="#singlePlayer_page" data-transition="pop" data-icon="back" data-iconpos="notext" class="ui-btn-left"></a>
		
    	<h1><a href="#mainMenu_page" class="appTitle">Snippet Kings</a></h1>
    	            <a data-role="button" data-rel="dialog" href="#profile_page" data-transition="pop" data-icon="user" data-iconpos="notext" class="ui-btn-right"></a>
    </div>
    <div data-role="content">
    	<div class="normalFont" style="text-decoration:underline;">
        	Level Select:
        </div>
        <div class="ui-grid-c">
    		<div class="ui-block-a"><div class="ui-bar ui-bar-a">
            1: 
				<img src="tick.png" onClick="" class="levelSelectUnlocked">
            </div></div>
    		<div class="ui-block-b"><div class="ui-bar ui-bar-a">
            2:
				<img src="unlocked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-c"><div class="ui-bar ui-bar-a">
            3:  				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-d"><div class="ui-bar ui-bar-a">
            4: 				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
            <div class="ui-block-a"><div class="ui-bar ui-bar-a">
            5:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-b"><div class="ui-bar ui-bar-a">
            6:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-c"><div class="ui-bar ui-bar-a">
            7:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-d"><div class="ui-bar ui-bar-a">
            8:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
            <div class="ui-block-a"><div class="ui-bar ui-bar-a">
            9:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-b"><div class="ui-bar ui-bar-a">
            10:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-c"><div class="ui-bar ui-bar-a">
            11:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-d"><div class="ui-bar ui-bar-a">
            12:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
            <div class="ui-block-a"><div class="ui-bar ui-bar-a">
            13:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-b"><div class="ui-bar ui-bar-a">
            14:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-c"><div class="ui-bar ui-bar-a">
            15:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-d"><div class="ui-bar ui-bar-a">
            16:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
            <div class="ui-block-a"><div class="ui-bar ui-bar-a">
            17:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-b"><div class="ui-bar ui-bar-a">
            18:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-c"><div class="ui-bar ui-bar-a">
            19:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
    		<div class="ui-block-d"><div class="ui-bar ui-bar-a">
            20:				<img src="locked.png" onClick="testTiles();" class="levelSelectUnlocked">

            </div></div>
		</div><!-- /grid-c -->
    </div>
</div>

<div data-role='page' id="gameRoom_page"> <!--game room-->

<?php /*obtaining song selection
if(isset($_POST['songs'])) {
echo "<script>alert('hello' +".$songs[1]->getTitle .")</script>";
}*/
?>

<!--<script>
    $.(".draggable").draggable({
        revert: "valid"
    });
    $.(".dropppable").droppable({
        scope: ".draggable"
    });
    
    
</script>-->

    <!--Header-->
    <div data-role="header">
		<a data-role="button" href="#campaignSelect_Page" data-transition="pop" data-icon="back" data-iconpos="notext" class="ui-btn-left"></a>
		
                <h1>Snippet Kings</h1>
                <a data-role="button" data-rel="dialog" href="#gameRoomOptions_Page" data-transition="pop" data-icon="user" data-iconpos="notext" class="ui-btn-right"></a>
    </div><!--End header-->

    <!--page content-->
    <div data-role="content">
        

        <h1>Artist:</h1>
        <div id="tileSpace_artist">
		
	  </div>
			
			<div id="artistCorrect"></div>
			
		<h1>Title:</h1>
			<div id="titleSpace"></div>
        <div id="tileSpace_title">
		
	  </div>
		
					<div id="titleCorrect"></div>

		
		<hr>
		<audio src="Pitbull Snippet.wav" type="audio/wav" controls></audio>
		<hr>
		<div id="tileSpace_letters">
        
        </div>
		

    </div><!--end page content-->
</di></div><!--end game room-->

      
<!-- multiplayer page-->
<div data-role="page" id="multiplayer_page">
 
        <div data-role="header">
            <h1><a href="#mainMenu_page" class="appTitle">Snippet Kings</a></h1>
                        <a data-role="button" data-rel="dialog" href="#profile_page" data-transition="pop" data-icon="bars" data-iconpos="notext" class="ui-btn-right"></a>
        </div><!-- /header -->
 
        <div role="main" class="ui-content" id="test1">
            
            	<a href="#" data-role="button" class="normalFont">Ranked Game</a>
                <a href="#" data-role="button" class="normalFont">Quick Game</a>
                <a href="#" data-role="button" class="normalFont">View Stats</a>
             
      </div><!-- /content -->
      
      <div data-role="footer">
      <a href="#" data-role="button" id="multiplayer_dailyChallenge" class="normalFont">Daily Challenge</a>
      </div>
      
      </div><!--end page -->
</body>
</html>