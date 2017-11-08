<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>Make your own freedom at Bauhaus</title>
	<meta name="keywords" content="" />
	<meta name="description" content="Group 5's solution for Case 2" />
	<link href="style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>

<body>

<div class="wrapper">

	<header class="header">
		<img src="https://upload.wikimedia.org/wikipedia/en/7/71/Bauhaus_logo.svg" alt="Bauhaus Logo" >

	</header><!-- .header-->

	<main class="content">

	</main><!-- .content -->
	<h1>Upload your creations to inspire others!</h1>
    <br/>
	<p>
    <?php include ("uploadAddOverlay.php"); ?>
    
    </p>
    <br/>
	<h2>Gallery</h2>
    <br/>
    <br/>
    
    <?php include ("transferNbr.php"); ?>

    <div id="imgcontainer">
        <section id="jpg"></section>
    </div>
    <br/>
    <br/>
    <section>Just some random description text about how cool it is, that everybody can upload his pictures and who knows what. 
    Oh, and the text ist veeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeery long. Because otherwise this f*****ing footer will keep hidding it.</section>
    
    
    <script src="gallery.js"></script>
    
</div><!-- .wrapper -->

<!--<footer class="footer"> 
    <br/> 
 <p> Disclaimer: this website is a case study created by students of the BAAA, and it has no association with Bauhaus Denmark.</p>
 </footer><!-- .footer -->

</body>
</html>
