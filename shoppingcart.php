<!DOCTYPE html>
<html lang="en">
<link href="./css/style.css" rel="stylesheet" type="text/css"/>
<link href="./css/responsive.css" rel="stylesheet" type="text/css"/>
  <!-- View -->
<title>Great Wall - Shopping Cart</title>
    <navReplace metal:use-macro="./templating/nav.xhtml/nav_bar">
    </navReplace>
      <headReplace metal:use-macro="/templating/head.xhtml/meta_head">
  </headReplace>
  <body>
<div id="shoopingdiv">
<h1 class="shoppingT">Shopping Cart</h1>
<div id="shoppinginfo">
<hr class="style18"></hr>
<br></br>
<br></br>
<ul style="list-style-type:none">
<hr></hr>
<div class="li-img">
  <li><img src="img/6912876257_308f1793aa_o.jpg"/></li>
  </div>
  <div class="li-text">
						<h4 class="li-head">Fried Rice</h4>
						<p class="li-sub">Prawn, Steam Rice, Green Bean, Ham, Eggs.</p>
                        <p class="li-sub">$8.99</p>
<p class="qty">QTY:</p>                        
<select>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="4">5</option>
</select>
<button class="button button3" style="float:right">UPDATE</button>
<button class="button button3" style="float:right">DELECT</button>
					</div>
  <hr class="style18"></hr>
  <h2 class="totalp">Total:</h2>
  <button class="button button4" style="float:right">CHECK OUT</button>
</ul>
</div>

</div>






    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/main.js"></script>
 
  <footerReplace metal:use-macro="/templating/footer.xhtml/page_footer">
    </footerReplace>

  </body>
</html>
