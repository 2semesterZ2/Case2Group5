<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Make your own freedom at Bauhaus</title>
	<meta name="description" content="Group 5's solution for Case 2" />
	<link href="style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>

<body>

<div class="wrapper">

	<header class="header">
		<img src="https://upload.wikimedia.org/wikipedia/en/7/71/Bauhaus_logo.svg" alt="Bauhaus Logo" >
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

	</header><!-- .header-->

	<main class="content">

        <h1>Share your project and win a gift card!</h1> <!-- Upload your creations to inspire others!-->
        <br/>
        <p>
        <p> Have you tried to do any of our DIY projects? <br/>
            Show it to us! <br/>
            The best projects will be displayed on our Info-Haus panels. You can win a gift card and also inspire others.
        </p>
        <br/>
        <br/>
            
        <?php include ("uploadAddOverlay.php"); ?>

        </p>
        
        
        <br/>
          <br/>
       
        <h2>See our customer's creations here.</h2>
        <br/>
        <br/>

        <?php include ("transferNbr.php"); ?>

        <div id="imgcontainer">
            <section id="jpg"></section>
        </div>

        <br/>
        <br/>
        


        <script src="gallery.js"></script>
        
	</main><!-- .content -->
	
</div><!-- .wrapper -->

<footer class="footer"> 
    <br/> 
 <p> Disclaimer: this website is a case study created by students of the BAAA, and it has no association with Bauhaus Denmark.</p>
 </footer><!-- .footer 

</body>
</html>
