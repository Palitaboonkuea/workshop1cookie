<html>
<body>
<?php 
    if(!isset($_COOKIE["lang"]))
    {
        setcookie("lang",$_GET["lang"],0);
    }
    else
    {
        $lang = $_GET["lang"];
        setcookie("lang",$lang,0);
    }
    include "main.php";
?>
</body>
</html>