<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" >
    <script src="js/script.js"></script>

</head>
<body>

<div id = "header">
    <img src = "images/cat6.jpg">
    <div id="logo"><span id = "logoText">Pet Food Shop</span></div>
</div>
<div id = "nav">
    <ul>
        <li><a href="dog.php" >Dog Product</a></li>
        <li><a href="food.php" class="active">Cat Product</a></li>
        <li><a href="milk.php">Grooming Product</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="registerationform.php"> Register Now </a></li>
    </ul>
</div>
<div id = "Main">
    <table id = "maintable">
        <tr>
            <td id="leftside">
                <div id ="sideAdv">
                    <img src = "images/cat5.jpg" id="sideImage">
                    <p id = "text1">Pet Food Shop</p>
                    <p id = "text2">HTCS 5606</p>
                </div>
            </td>
            <td id="middlecontent">

                <div class="product">
                    <img src="images/cat1.jpg">
                    <p>$3.20 ea</p>
                    <p>
                        qty:<input class="qty" id="instinctiveQty" type="number">
                        <button class = "addBut" id="addInstinctive" onclick="addToCart(this)">Add to Cart</button>


            </td>
            <td id="rightside">
                <p>Cart:</p>
                <div id="cartDiv"></div>
                <button id="showInvoiceBut" onclick="invoice()">Invoice</button>
            </td>
<td>
            <div class="product">
                <img src="images/cat2.jpg">
                <p>$2.90 ea</p>
                <p>qty:<input class="qty" id="kittenQty" type="number">
                    <button class = "addBut" id="addKitten" onclick="addToCart(this)">Add to Cart</button>
                </p>
            </div>

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

//Food Shop. (n.d.). Retrieved October 23, 2020, from https://moodle.unitec.ac.nz/mod/folder/view.php?id=515159

</body>
</html>