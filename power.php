<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LibraryBox | Powering your LibraryBox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Evan Clemente">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--[if lt IE 8]>
	  <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <![endif]-->
    <link href="css/base.css" rel="stylesheet">
	<link href="css/orange.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/ico/favicon.ico">
  </head>  

  <body>

	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner tf-osans">
        <div class="container">
          <a class="btn btn-primary btn-dropnav" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>		
            <a class="brand" href="index.php">The Librarybox Project</a>
		   		  <?php include('navmenu.php');?>
        </div>
      </div>
    </div>	
    
    <div id="header">
	  <div class="container">  
	    <div class="row">
		  <div class="span12">
		    <h1>Powering your LibraryBox</h1>
		  </div>
		</div>
	  </div>
	</div>

<div id="content">
	  <div class="container">			
	    <div class="row">
		  <div class="span12">
	
       
<p>If you want to run your LibraryBox from battery, in order to make it mobile, any battery pack with a USB port will power the MR3020, it's just a matter of how long you want it to run. The MR3040 has a built in battery that will last 5-8 hours depending on use, and can also be powered by an external battery. In my tests, a 6600 mAh battery pack designed for the iPad ran my LibraryBox for over 15 hours.</p>

<h1>Battery Choices</h1>
<br />
<p>
Given my entirely unscientific tests, the run time above means that LibraryBox draws about .4 watts. Given that, here's a chart of approximate runtimes for a variety of the most popular rechargeable battery packs.</p>

<table class="table">
<tr>
<th>Battery</th>
<th>Cost</th>
<th>Capacity in mAh</th>
<th>LibraryBox Runtime</th>
</tr>
<tr>
<td><a href="http://www.amazon.com/New-Trent-IMP120D-Thunderbolt-Blackberry/dp/B003ZBZ64Q/?tag=jasongriffey-20">Trent iCarrier</a></td>
<td>$76.95</td>
<td>12,000 mAh</td>
<td>27 hours</td>
</tr><tr>
<td><a href="http://www.amazon.com/Anker%C2%AE-10000mAh-External-Battery-Android/dp/B005NGKR54/?tag=jasongriffey-20">Anker Astro3</a></td>
<td>$59.99</td>
<td>10,000 mAh</td>
<td>22.5 hours</td>
</tr>
<tr>
<td><a href="http://www.amazon.com/Upgraded-Version-External-Flashlight-Smartphones/dp/B0067UPRQ4/?tag=jasongriffey-20">Anker Astro2</a></td>
<td>$53.99</td>
<td>8400 mAh</td>
<td>19 hours</td>
</tr>

<tr>
<td><a href="http://www.amazon.com/PowerGen-External-Blackberry-Sensation-Thunderbolt/dp/B005VBNYDS/?tag=jasongriffey-20">PowerGen Mobile Juice Pack</a></td>
<td>$34.99</td>
<td>5200 mAh</td>
<td>12 hours</td>
</tr>
<tr>
<td><a href="http://www.amazon.com/exec/obidos/ASIN/B0087S9AMG/?tag=jasongriffey-20">Monoprice External Battery Pack</a></td>
<td>$30.45</td>
<td>5000 mAh</td>
<td>11.3 hours</td>
</tr>
</table>
<!--
<h1 id="experimental">Experimental</h1>
<br />
<h2>Different routers</h2>
<p>LibraryBox is built on top of two other pieces of software: OpenWRT and Piratebox. In theory, anything that runs PirateBox should be capable of being turned into a LibraryBox. In practice, it's not quite that easy. </p>
<p>However, there is one other primary candidate for LibraryBoxing, and that's another TP-Link product, the WR703N. According to those in-the-know, the chipset and board are identical to the MR3020, just redesigned for the non-US market. It does require a <a href="http://downloads.openwrt.org/snapshots/trunk/ar71xx/openwrt-ar71xx-generic-tl-wr703n-v1-squashfs-factory.bin">slightly different OpenWRT build</a>, but is much smaller (almost half the size of the MR3020) and uses micro-USB for it's power (slightly more common, given that it's the standard for cellular chargers outside the US). 
</p>
<p>I have a WR703N supposedly winging its way to me from Hong Kong, and will report as to how the LibraryBox conversion goes.</p>
<h2>Alternative Power Sources</h2>
<p>There has been a considerable amount of interest in how to put together a free-standing LibraryBox that is self-sufficient for its power needs. In the US, this typically means solar panels with battery backup, although theoretically you could run a LibraryBox from a generator driven by wind or water power. 
</p>-->
<p>
Solar power is highly dependent on location, and where the solar panels are, their angle, and how clean they are kept are all factors in how well a solar setup could work. Here are a few solutions, ranging from dead simple to moderately complex.</p>
<p>One way to go would be to try an out-of-the-box solar system designed for USB devices, like the <a href="http://www.amazon.com/Instapark%C2%AE-Portable-Charger-Compatible-Included/dp/B006ZSFH6I/?tag=jasongriffey-20">Instapark 10 Watt Solar Panel Portable Solar Charger</a>. It's cheap as these things go, but as it's designed to be portable I'm not sure how well it would work as a fixed installation. But for "take your LibraryBox to Bonnaroo" off-the-grid action, it might be a very nice solution. 
</p>
<p>There is another out-of-the-box option for this, based around the <a href="http://www.amazon.com/External-Universal-High-Efficiency-Smartphones-E-readers/dp/B008187COU/?tag=jasongriffey-20">Revive Solar Restore XL</a> combined with the add-on <a href="http://www.amazon.com/Charging-Extensions-ReStore-External-compatible/dp/B008I64E64/?tag=jasongriffey-20">solar panel extensions</a>. The Restore XL is a 4000 mAh battery, and according to the Amazon spec sheet the add-on panels will recharge the battery with 4.5 hours of direct sunlight. Since the 4000 mAh should give you about 9 hours of runtime for the MR3020, as long as you can get better than 50% direct sunlight you should stay ahead of the power curve. For under $100, it's got potential as a solution.
</p>

<p>Another option would be to design a system based around the common 12 volt battery, and build a system to charge, and then to step the voltage down to 5V USB. Something like the <a href="http://www.amazon.com/Instapark%C2%AE-Black-Mono-crystalline-Charge-Controller/dp/B005LR9IOG/?tag=jasongriffey-20">Instapark 10W Mono-crystalline Solar Panel with 12V Solar Charge Controller</a>, combined with <a href="http://www.ebay.com/itm/UPG-UPG-D5744-SLA-BATTERY-12V-12AH-F1-TERMINALS-UB12120-/120948253194?forcev4exp=true#ht_3708wt_1277">some cheap 12 Volt batteries</a> and a <a href="http://www.ebay.com/itm/iSimple-12-Volt-Battery-5-Volt-USB-Charger-IS43-/290720674580">12 Volt to 5 Volt convertor designed for motorcycle use</a> should work. All together, it's not much more expensive than the above options, and is far more powerful.
</p>
<p>I have not tried any of the solar solutions above...these are just first-blush guesses at what might work. If you are interested in this sort of LibraryBox installation, please let me know, I'd love to know what you're planning!</p>

</div>
</div>
</div>
</div>
  <?php include('footer.php');?>
<div id="copywrite">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <p>Website Content - Creative Commons Licensed NC-BY Jason Griffey 2012, where not otherwise licensed.<br />Software Licensed under GPLv2, see http://www.gnu.org/licenses/gpl-2.0.html <span id="totop" class="pull-right">Back to Top <i class="icon-arrow-up"></i></span></p>			
		  </div>		  
		</div>	  
      </div>	  
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
      $("#totop").click(function () {
		$("body, html").animate({
		  scrollTop: 0
	    }, 300);
		return false;
	  }); 
	});
	</script>		
    <script>
    $('#myCollapsible').collapse({
  toggle: false
})
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34754517-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>
</html>