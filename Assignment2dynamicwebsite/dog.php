<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" >
    <script src="js/script.js"></script>

</head>
<body>
<!-- This is the header picture <!-->
<div id = "header">
    <img src = "images/dog1_1.jpg">
    <div id="logo"><span id = "logoText">Pet Food Shop</span></div>
</div>
<div id = "nav">

    <!-- This is the navigation bar <!-->
    <ul>
        <li><a href="dog.php"class="active" >Dog Product</a></li>
        <li><a href="food.php" >Cat Product</a></li>
        <li><a href="milk.php">Grooming Product</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="registerationform.php"> Register Now </a></li>
    </ul>

<div id = "Main">
    <table id = "maintable">
        <tr>
            <td id="leftside">
                <div id ="sideAdv">
                    <img src = "images/dogup.jpg" id="sideImage">
                    <p id = "text1">Pet Food Shop</p>
                    <p id = "text2">HTCS 5606</p>
                </div>
            </td>
            <td id="middlecontent">

                <div class="product">
                    <img src="images/dogpro1.jpg">
                    <p>$3.20 ea</p>
                    <p>
                        qty:<input class="qty" id="primalqty" type="number">
                        <button class = "addBut" id="add primal" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </div>
                <div class="product">
                    <img src="images/dogpro2.jpg">
                    <p>$2.90 ea</p>
                    <p>qty:<input class="qty" id="kittenQty" type="number">
                        <button class = "addBut" id="addKitten" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </div>
                <div class="product">
                    <img src="images/dogpro3.jpg">
                    <p>$9.00 ea</p>
                    <p>qty:<input class="qty" id="spreadQty" type="number">
                        <button class = "addBut" id="addSpread" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </div>

            </td>
            <!-- This is the shopping cart table <!-->
            <td id="rightside">
                <p>Cart:</p>
                <div id="cartDiv"></div>
                <button id="showInvoiceBut" onclick="invoice()">Invoice</button>
            </td>
        </tr>
    </table>
</div>

<!-- The Voice Page -->
<div id="voicePage" class="voice">

    <!-- Modal content -->
    <div id="voice-content">
        <span class="close">&times;</span>
        <p>Please check your invoice</p>
    </div>

</div>



</body>
</html>