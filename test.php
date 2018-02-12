<? 
    if($context) 
    { 
        $fp = fopen("./1.txt", "wt"); 
        $count = count($context); 
        for($i=0; $i<$count; $i++) 
        { 
            if($context[$i]) 
                fwrite($fp, $context[$i]."\n"); 
            else 
                break; 
        } 
        fclose($fp); 
    } 
    else 
        echo "context is null<br>"; 
?>
