<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!--  Title here -->
  <title>About</title>
  <link rel = "stylesheet" type = "text/css" href = "css/style.css" >
  <script src="js/script.js"></script>
</head>
<body>




<div id = "header">
  <img src = "images/dog2.jpg" alt="">
  <div id="logo"><span id = "logoText">Pet Food Shop</span></div>
</div>
<div id = "nav">
  <ul>
    <li><a href="dog.php" >Dog Product</a></li>
    <li><a href="food.php">Cat Product</a></li>
    <li><a href="milk.php" >Grooming Product</a></li>
    <li><a href="aboutus.php" class="active">About Us</a></li>
    <li><a href="registerationform.php"> Register Now </a></li>
    <li>
      <!--  The login input boxes       -->
      <form action="login3.php" method="post">

        <label>
          <input name="username" type="text" placeholder="Username">
        </label>
        <label>
          <input name="password" type="password" placeholder="Password">
        </label>
        <input type="submit" value="Login">

      </form>






    </li>
  </ul>
</div>
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
        <h1> THE PET FOOD SHOP </h1>
<p>100% New Zealand owned and operated. We are a young company passionate about bringing high quality premium natural food for our beloved pets.  We specialise in Cat and Dog food, offer premium quality pet food manufactured in New Zealand, Australia and Europe.

  Our pets are our family and they deserve the very best! It’s not about giving them the cheapest food but it’s about their wellbeing, health, growth and development.

  Pet Food Shop was born in January 2018 to fulfill this dream for millions of our friends by sourcing and delivering direct to you, selected New Zealand, Australian and European made premium natural pet food. </p>



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