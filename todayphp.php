<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>Favourite's List</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
$(function() {
    $('.lightbox').lightBox();
});
</script>

</head>
<body>
<h2><font face="Baskerville Old Face" size="+4" color="white"><center><b><i>Welcome: <?php echo $_SESSION["lid"];?></i></b></center></font></h2>
<div id="tooplate_wrapper">
	<div id="tooplate_header">
        
		<div id="site_title"><h1><a href="#"></a></h1></div>
        
        <div id="tooplate_menu">

            <ul>
                <li><a href="entrance.html"> HOME</a></li>
                <li><a href="final2form.html">SIGN UP</a></li>
                <li><a href="feed.html">FEEDBACK</a></li>
                <li><a href="todayspl.html" class="current">Favourite's List</a></li>
                <li><a href="sout.php" class="last">SIGN OUT</li>
            </ul>    	
        </div>
    
	</div> 
    
    <div id="tooplate_main">
    
		<div id="tooplate_content">
      	
        	<h2>Favourite's List</h2> 
			<p>Heaven Relations Online Matrimonial System facilitates you with mainataining a favourite's list that has matches in accordance with preferred brides/grooms. This favourite list is changable/updatable based on your preference.  <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong></strong></a> <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong></strong></a>.</p>
        
        	<div class="cleaner h30"></div>
        	
      		<div id="gallery">
				<ul>
					<li>
						<span><a href="#">ADITI GUPTA</a></span>
						<a class="lightbox" href="images/gallery/g1.jpg" title="Looking for a partner who has so much love saved just for me">
							<img src="images/gallery/g1.jpg" alt="Image 01" />

						</a>		
						
					</li>

					
					<li>
						<span><a href="#">Jesse Jonathan</a></span>
						<a class="lightbox" href="images/gallery/g2.jpg" title="Religion is merely a way of finding god, while true love is itself god">
							<img src="images/gallery/g2.jpg" alt="Image 02" />
						</a>
						
					</li>
					
					<li class="lmb">
						<span><a href="#">Aishwarya Muralidharan</a></span>
						<a class="lightbox" href="images/gallery/g3.jpg" title="Looking for a partner who cares for me and acknowledges my decision and gives me equal importance in life">
							<img src="images/gallery/g3.jpg" alt="Image 03" />
						</a>
						
					</li>
					
					<li>
						<span><a href="#">Kanimozhi Marimuthu</a></span>
						<a class="lightbox" href="images/gallery/g4.jpg" title="Looking for a partner who allows me to pursue my passion  for my work.">
							<img src="images/gallery/g4.jpg" alt="Image 04" />
						</a>
						
					</li>
					
					<li>
						<span><a href="#">Daisy Wiiliams</a></span>
						<a class="lightbox" href="images/gallery/g5.jpg" title="Enlightened with Education">
							<img src="images/gallery/g5.jpg" alt="Image 05" />
						</a>
						
					</li>
					
					<li class="lmb">
						<span><a href="#">Priya Sweety</a></span>
						<a class="lightbox" href="images/gallery/g6.jpg" title="Love and Love Only">
							<img src="images/gallery/g6.jpg" alt="Image 06" />
						</a>
						
					</li>
				</ul>  
          
</body>
</html>