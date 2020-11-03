<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML CODE ONLY </title>
</head>
<body>
<H1> This is another way to write PHP</H1>
<p> I will put my paragraph below:</p>
<?PHP
$i = 0;
While ($i<10){

    //echo"<p>This is the".$i."th line</p>>";
?>
<P> This is the <?php echo $i;?></P>
<?php
$i++;


}

?>

</body>
</html>