<?php 


    $num1=htmlspecialchars($_REQUEST['num1']);
    $num2=htmlspecialchars($_REQUEST['num2']);
    echo("Avrage of number ".$num1." and ".$num2." is:".($num1+$num2)/2);
    
    



?>