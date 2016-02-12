<!DOCTYPE html>
<html lang="en">
<link href="./css/style.css" rel="stylesheet" type="text/css"/>
<link href="./css/responsive.css" rel="stylesheet" type="text/css"/>
  <!-- View -->
<title>Great Wall - Menu & Order Online</title>
    <navReplace metal:use-macro="./templating/nav.xhtml/nav_bar">
    </navReplace>
  <body>




  <headReplace metal:use-macro="/templating/head.xhtml/meta_head">
  </headReplace>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/main.js"></script>

<div id="menudiv">
<h1 class="menuT"> MENU & ORDER ONLINE</h1>
<div id="menuinfo">
<hr class="style18"></hr>
<br></br>
<br></br>

<ul style="list-style-type:none">
<hr></hr>
<h2 class="menuh2">RICE</h2>
<hr></hr>
<div class="li-img">
  <li><img src="img/6912876257_308f1793aa_o.jpg"/></li>
  </div>
  <div class="li-text">
						<h4 class="li-head">Fried Rice</h4>
						<p class="li-sub">Prawn, Steam Rice, Green Bean, Ham, Eggs.</p>
                        <p class="li-sub">$8.99</p>
                        <button class="button button3" style="float:right">Order</button>
					</div>
  <hr class="style18"></hr>
<br></br>
<br></br>
<hr></hr>
<h2 class="menuh2">NOODLE</h2>
<hr></hr>                  
  <li>Tea</li>
 
 <hr class="style18"></hr>
<br></br>
<br></br>
<hr></hr>
<h2 class="menuh2">SOUP</h2>
<hr></hr>
  <li>Milk</li>
</ul>  
<hr class="style18"></hr>
</div>

</div>


    <footerReplace metal:use-macro="/templating/footer.xhtml/page_footer">
    </footerReplace>

  </body>
</html>