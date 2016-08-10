<?php

//some settings
$random_images = array(
	'http://icons.iconarchive.com/icons/zairaam/bumpy-planets/256/07-jupiter-icon.png',
	'http://www.princeton.edu/~willman/planetary_systems/Sol/Saturn/Saturn.gif',
	'http://www.solstation.com/stars/venus.gif',
	'http://quest.nasa.gov/mars/background/images/mars.gif'
);

$cover_image = 'http://www.lovethispic.com/uploaded_images/20521-Rocky-Beach-Sunset.jpg';

//php code here
$random_count = count($random_images);
$div4_index = rand(0, $random_count);
$div4_image = $random_images[$div4_index];

?>
<!doctype html>
<html lang="en">
<head>
<title>Three29 Test</title>
<style>

/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
img {
    display: block;
    margin: 0 auto;
	max-height:70%;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
	overflow: hidden;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
</style>
<style>
/* css here */
div {
	height:  10em;
	display:block;
    transition: width 2s linear, background 2s ease;
    -webkit-transition: width 2s linear, background 2s ease;
    -moz-transition: width 2s linear, background 2s ease;
}

	.div1{background-image: url("<?php echo $cover_image; ?>"); background-repeat: no-repeat; width: 25%;}
	.div2{background-color:orange;  width: 75%; max-width:100%; max-height:75%;}
    @media (max-width: 600px) {	
	.div4{display: none;}
    }
    @media (min-width: 600px) {	
	.div3{background-color:blue;  width: 50%;}
	.div4{background-color:yellow; width: 90%; height:  90%;text-align: center; font-size: xx-large;}
    }
	.div1-clicked{background-image: url("<?php echo $cover_image; ?>"); background-repeat: no-repeat; width: 100%; }
	.div2-clicked{background-color:orange; width: 100%; max-width:100%; max-height:100%;}
    @media (max-width: 600px) {	
	.div4-clicked{display: none;}
    }
    @media (min-width: 600px) {	
	.div3-clicked{background-color:red; width: 100%;}
	.div4-clicked{background-color:yellow; width: 100%; height: 100%; text-align: center; font-size: xx-large;}
	}
	#div4-image{}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="jquery.cookie.js"></script>
<!-- <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>  -->
<script>
$("document").ready(function(){
	

	$("div").on('click', function(e) {
		var clickedid = $(this).attr('id');

		if(clickedid != 'wrapper') {

 // alert('alert1:  Cookie! ' + $.cookie("id"));
		
		var default_style = [];
  // alert('alert1:  Click! ' + clickedid);

		default_style["div1"] = "div1";
		default_style["div2"] = "div2";
		default_style["div3"] = "div3";
		default_style["div4"] = "div4";
		
	//  alert('Cookies are enabled!');
	//javascript code here
		function removeAddDivClass(){
			var divid = '#' + $.cookie("id");
			$(divid).removeClass();
			$(divid).addClass(default_style[$.cookie("id")]);
		}	
		
		if($.cookie("id") && ($.cookie("id") != 'NoChange')){
			removeAddDivClass();
		    // alert(clickedid);	
			if(clickedid == $.cookie("id")){
				clickedid = 'NoChange';
			}
		
	    }
  //alert('alert2:  Cookie! ' + $.cookie("id"));
  //alert('alert2:  Click! ' + clickedid);
 
		var data = {
		"id": clickedid
		};
		
		//data = $(this).serialize() + "&" + $.param(data);
		dataString = JSON.stringify(data);
		$.ajax({
        async: false,
        type: "POST",
		//dataType: "json",
		url: "cookie.php", //Relative or absolute path to response.php file
		data: {MyData:dataString},
		success: function(dataString) {
		
		//alert("Form submitted successfully.\nReturned json: " + callback);
		}
		});

		
  //alert('alert3:  Cookie! ' + $.cookie("id"));
  //alert('alert3:  Click! ' + clickedid);
		var clicked_style = [];

		clicked_style["div1"] = 'div1-clicked';
		clicked_style["div2"] = 'div2-clicked';
		clicked_style["div3"] = 'div3-clicked';
		clicked_style["div4"] = 'div4-clicked';

		function removeAddDivClickedClass(){
			var divid = '#' + $.cookie("id");
			$(divid).removeClass();
			$(divid).addClass(clicked_style[$.cookie("id")]);
		}	

		if($.cookie("id") && ($.cookie("id") != 'NoChange')){
			removeAddDivClickedClass();
			
	    }
		
		
	} // else {
	   // alert('Cookies are disabled...');
	//}	
	
	});
});
	
</script>
</head>
<body>
<div id="wrapper">
	<div id="div1" class="div1">&nbsp;
	</div>
	<div id="div2" class="div2"><img id="div2-img" src="<?php echo $div4_image; ?>" />
	</div>
	<div id="div3" class="div3">&nbsp;
	</div>
	<div id="div4" class="div4">&nbsp;
	</div>
</div>

<script>
	
	function printabunch(divo, limit)  {
		var incrementor = 2;
		var limitor = 0;
		for (var i=1; i > limitor; i = i + incrementor) {
			if((i > limit) && (incrementor > 0))
				incrementor = incrementor * -1;
			divo.append(i);
		}		
	}

	$(document).ready(function() {
	var divee4 = $('#div4');
	
	divee4.html('');
	printabunch(divee4, 7);
		
	var clicked_style = [];

	clicked_style["div1"] = 'div1-clicked';
	clicked_style["div2"] = 'div2-clicked';
	clicked_style["div3"] = 'div3-clicked';
	clicked_style["div4"] = 'div4-clicked';

	function removeAddDivClickedClass(){
		var divid = '#' + $.cookie("id");
		$(divid).removeClass();
		$(divid).addClass(clicked_style[$.cookie("id")]);
	}	

	if($.cookie("id") && ($.cookie("id") != 'NoChange')){
		removeAddDivClickedClass();
		
	}
		
	});
</script>
</body>
</html>
