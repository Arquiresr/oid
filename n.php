<!DOCTYPE html>
<html >
<head>
<meta charset = "uft-8">
<title> pq</title>
<link rel = "stylesheet" type = "text/css" href = "css/n.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
  function p(){
	   window.location.href = "/p/n.php";
   }
     function q(){
	   window.location ="/p/q.php";
   }
    function y(){
	   window.location = "/p/i.php";
   }
   function e(){
	   window.location ="/p/y.php";
   }
   
   $(document).ready(function(){
	   var menu = {
        body: $('.menu'),
		button: $('.button'),
		tools: $('.tools')
	   };
	   
	   menu.button.click(function(){
		   menu.body.toggleClass('menu--closed');
		   menu.body.toggleClass('menu--open');
		   menu.tools.toggleClass('tools--visible');
		   menu.tools.toggleClass('tools--hidden');
		   
	   });
   });
   
   
 
   
	   
</script>
</head>
<body>
<div class = "t">
<abt>
<p>oi</p>
</abt>
<div class = "b">
<button6 onclick = "p()">  Calculo</button6>

<button1 onclick = "y()">Excel</button1>
<button2 onclick = "q()">HTML</button2>
<button4 onclick = "e()">CSS</button4>
</div>
<a href = "quem_somos.php">
<span class = "pers">
<i class = "material-icons">
person
</span>
</i>
</a>
</div>
<div class ="ibody">
<div class = "e">
<abnt>Calculo</abnt>
</div>
</div>
<main>
<div class ="menu menu--closed">
<div class ="button">
<span></span>
<span></span>
<span></span>
</div>
<div class = "tools tools--hidden">
<a href = "#">a</a>
<div>


</i>

</div>
<div id ="nav-container">
<div id="nav-overlay"></div>
<nav id = "nav-fullscreen">

<ul>
<li><a href = "#">qq</a></li>
<li><a href="#">gs</li>

</ul>
<a id="nav-toggle">
<span></span>
<span></span>
<span></span>
</a>
</div>

</div>
</main>