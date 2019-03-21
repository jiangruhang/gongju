<?php
    if($_GET["type"]=="pc"){
    $img_array = glob("pc/*.{gif,jpg,png}",GLOB_BRACE); 
    $img = array_rand($img_array); 
    header("Location:".$img_array[$img]);
    }
    if($_GET["type"]=="pe"){
    $img_array = glob("pe/*.{gif,jpg,png}",GLOB_BRACE); 
    $img = array_rand($img_array); 
    header("Location:".$img_array[$img]);
    }
    if(empty($_GET['type'])){
    $img_array = glob("pc/*.{gif,jpg,png}",GLOB_BRACE); 
    $img = array_rand($img_array); 
    header("Location:".$img_array[$img]);
    }
    ?>


<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
