 var answerArtist;
 var answerTitle;
 var correctTitle = "TIMBER";
 var correctArtist = "PITBULL";
 var arrayTitle = [];
 var arrayArtist = [];

function getSongs(level) {
	window.alert("test, " + level);
	
	if(level != "") {
		
		var dataString = "level=" +level;
		
		$.ajax({
            
            type: "POST",
            url: "ajax/getLevel.php",
	data:dataString,
	error: function(ts) {  },
	success: function(data) {
	
	    window.alert("successsssssss1");
		$("#title_GR").html(data.title);
		$("#artist_GR").html(data.artist);
		$("#album_GR").html(data.album);	
		$("#lyric_GR").html(data.lyric); 
		$("#start_GR").html(data.start); 
		divideWord(data.title);


	
	},
	dataType: "json"
		
});	

	
	}
}

function testTiles() {
	var a = "pitbull";
	var t = "timber";
	
	//window.alert(addLetters(shuffleArray(divideWord(a))));
	//window.alert(shuffleArray(divideWord(a)));
	divideWord(a + t , "letters");
	divideWord(a, "tile", "a");
	divideWord(t, "tile", "t");
	//$("#tileSpace").append(addLetters(shuffleArray(divideWord(a))));
	
		$( function (){
			$(".letters").draggable({
				snap: ".tile",
				snapMode: "inner",
			revert: function(event, ui) {
            // on older version of jQuery use "draggable"
            // $(this).data("draggable")
            // on 2.x versions of jQuery use "ui-draggable"
            // $(this).data("ui-draggable")
           $(this).data("uiDraggable").originalPosition = {
                top : 0,
                left : 0
            };
            // return boolean
            return !event;
            // that evaluate like this:
            // return event !== false ? false : true;
        }
		});
			$(".letterDrop").droppable({
				drop: function(event, ui) {

					checkWord(ui, this);					
				},
				out: function(event, ui) {
					removeLetter(ui,this);					
				}, 
				});
		});
			$(".letters").addClass("h1");

				
	
}


function divideWord(word, type, e) {
	var letters = [];
	//window.alert("test1");
	//window.alert(word);
	
	for (var i = 0; i < word.length; i++) {
    letters[i] = word.charAt(i);
	}
	//window.alert(letters[0] + letters[2]);
	//window.alert(shuffleArray(letters));
	//return letters;
	//window.alert(letters[]);
	if(type == "letters") {
	shuffleArray(letters);
	}
	
	if(type == "tile") {
		addTiles(letters, e);
		addTiles(letters, e);
	}
}



function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
addLetters(array);
	//return array;
}

function addTiles(array, e) {
    
    var answerHTML;
		
	var a = array.length ;	
	
	if(e == "a") {
		$("#tileSpace_artist").html("");
		for (var i = 0; i < a; i++) {
        $("#tileSpace_artist").append("<Div class='letterDrop tile' id='tileArtist" + i + "'> </div>");
    }	}	if(e == "t") {
		$("#tileSpace_title").html("");
		for (var i = 0; i < a; i++) {
        $("#tileSpace_title").append("<Div class='letterDrop tile' id='tileTitle" + i + "'> </div>");
    }	}
       
    

}

function addLetters(array) {

    var inputHTML;
	$("#tileSpace_letters").html("");
    var a = array.length ;
		for (var i = 0; i < a; i++) {
			$("#tileSpace_letters").append("<div class='letters tile' id='letter"+i+"'>" + array[i].toUpperCase() + "</div>");
			
       // inputHTML = inputHTML  + "<script>$('.letters').draggable();</script><div class='letters' id='letter"+i+"'><p>" + array[i] + "</p></div>";
    }
	//$("#tileSpace_letters").append("<script>$('.letters').draggable();</script>");
	$.mobile.changePage('#gameRoom_page');
	return inputHTML;
}

function checkWord(ui, e) {
		
		var letter = ui.draggable.html();

		if(~e.id.indexOf("Title")) { 
			var sub = parseInt(e.id.substring(9));
			arrayTitle[sub] = letter;
			answerTitle = arrayTitle.join("");
			$("#titleSpace").html(answerTitle);
			
				if(answerTitle == correctTitle){
					$("#titleCorrect").html("Correct! <br><img src='tick.png' class='levelSelectUnlocked'>");
				}
			
		}
	
	if(~e.id.indexOf("Artist")) { 
			var sub = parseInt(e.id.substring(10));
			arrayArtist[sub] = letter;
			answerArtist = arrayArtist.join("");
			$("#titleSpace").html(answerArtist);
			
				if(answerArtist == correctArtist){
					$("#artistCorrect").html("Correct!<br><img src='tick.png' class='levelSelectUnlocked'>");
				}
			
		}
		
		

} 

function removeLetter(ui, e) {
	if(~e.id.indexOf("Title")) {
		var sub = parseInt(e.id.substring(9));
			
			arrayTitle[sub] = "";
		}	if(~e.id.indexOf("Artist")) {
		var sub = parseInt(e.id.substring(9));
			
			arrayArtist[sub] = "";
		}
}

