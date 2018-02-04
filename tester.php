<?php   

    if ($_GET['fileName'])
    {
        header("Last-modified: ".gmdate("D, d M Y H:i:s", filemtime($_GET['fileName'])));
        $wsk = fopen($_GET['fileName'], "r");
        
        if($wsk)
            echo fread($wsk, filesize($_GET['fileName']));
       fclose($wsk);
    }


?>
