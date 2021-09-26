<?php
        $num = 1;
        echo $num;
        echo "<input type='button' value='Click' onclick='readmore()' />";
   		echo "<script> function readmore() { document.write('";
        $num = 2;
        echo $num;
        echo "'); } </script>";
?>