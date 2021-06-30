<html>

 

<body>

 

<?php

 


$bgcolor=$_POST["bgcolor"];



$size=$_POST["fsize"];

 

$fcolor=$_POST["fcolor"];



$type=$_POST["ftype"];



$margin=$_POST["pmargin"];

 ?>

 <style>

#p{

              background-color:<?php echo $bgcolor; ?>;

              margin:<?php echo $margin;?>;

              color:<?php echo $fcolor; ?>;

font-family:<?php echo $type; ?>;

font-size:<?php echo $size; ?>;

text-align:center;

}

 

 </style>

 <p id=p>welcome<br>

 PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
</p>

</body>

</html>