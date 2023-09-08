<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to James Buchman Pub and Restaurant</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e){

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				if(dt == 0) return;
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				ed.setRangeLow( dt );
				
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		</script>
		<script type="text/javascript">
		function validateForm()
		{
		var x=document.forms["index"]["start"].value;
		if (x==null || x=="")
		  {
		  alert("you must enter your check in Date(click the calendar icon)");
		  return false;
		  }
		var y=document.forms["index"]["end"].value;
		if (y==null || y=="")
		  {
		  alert("you must enter your check out Date(click the calendar icon)");
		  return false;
		  }
		}
		</script>
		<script type="text/javascript">
			function setDifference(frm) {
			var dtElem1 = frm.elements['start'];
			var dtElem2 = frm.elements['end'];
			var resultElem = frm.elements['result'];
			 
			if(!dtElem1 || !dtElem2 || !resultElem) {
		return;
			}
			var x = dtElem1.value;
			var y = dtElem2.value;
			var arr1 = x.split('/');
			var arr2 = y.split('/');
			 
		if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
		resultElem.value = "Invalid Input";
		return;
			}
			 
		var dt1 = new Date();
		dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
		var dt2 = new Date();
		dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

		resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
		}
		</script>
		<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script>

</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="James Buchanan Pub and Restaurant" /></a></h1>
        <ul id="mainnav">
	    <li class="current"><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="rates.php">Room Rates</a></li>
            <li><a href="location.php">location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
              <ul>
                    <li class="show"><img src="xres/images/jb2/01.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/02.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/03.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/04.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/05.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/06.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/07.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/08.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/09.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/10.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/11.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/12.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/13.jpg" width="861" height="379"  alt="" /></li>
              </ul>
			  
			  <div id="logo" style="left: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Online Booking</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="reservation/demo.php" method="post" style="padding-top: 4px;">
						<span style="margin-right: 11px;">Start Date: <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px;">End Date:<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;" /></span><br>
						<input type="hidden" name="result" id="result" /><br>
						<span><input type="submit" onclick="setDifference(this.form);" value="CHECK AVAILABILITY" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" /></span>
						
						</form>
					</div>
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Admin Login</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="login.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Username: <input type="text" name="user" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
						<span style="margin-right: 11px;">Password: <input type="text" name="password" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
						<input type="submit" id="submit" value="login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Cancel Resrvation</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="cancelexec.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Confirmation Number: <input type="text" name="confirmation" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
						<input type="submit" id="submit" class="medium gray button" value="Proceed" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
				</div>
        </div>
		
    </div>
    <div id="featured">
        <div id="items">
            <div class="item"> <a href="main-course.php"><img src="xres/images/01_featured.jpg" alt="" /></a>
            <h3><a href="main-course.php">Weekly Specials</a></h3>
            <p><a href="main-course.php"><strong>New Signature Dishes</strong><br />
			Come in and experience<br /> Chef Cat's brand
			new<br /> specials today!</a></p>  
            </div>
            <div class="item"> <a href="lodging.php"><img src="xres/images/02_featured.jpg" alt="" /></a>
            <h3><a href="lodging.php">Lodging Available</a></h3>
            <p><a href="lodging.php"><strong>The Turbo Hotel</strong><br />
			Spend a relaxing evening in our circa 1796 hotel, steeped in history. </a></p>  
			</div>
        </div>
        <div id="wedding"> <a href="http://visitor.constantcontact.com/manage/optin/ea?v=001C1y_CazDx7-ib63veEIypg%3D%3D"><img src="xres/images/wedding_btn.jpg" alt="For Special Offers and Discounts" /></a>
        </div>
    </div>

	<div id="footer">
		<h4>717.328.0011 &bull; <a href="contact-us.php">217, Central Facility Bld, 180, Samuel Street, Chinch Bunder, Bangalore, India   </a></h4>
		<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Hotel guest check-ins available daily 3-8 PM&nbsp;&nbsp;&bull;&nbsp;&nbsp;Serving Dinner Tuesday Evenings 5-9 PM</p>
		<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="James Buchanan Pub and Restaurant" /></a>
		<p>&copy; Copyright 2011 James Buchanan Pub and Restaurant | All Rights Reserved <br /></p>
	</div>
</div>
</body>
</html>
