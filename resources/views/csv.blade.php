<?php
    if(($handle = fopen("http://localhost:8000/data/Agriculture.csv", "r")) !== FALSE){
        while (($data = fgetcsv($handle,1000,",")) !== FALSE){
            $num= count($data);
            for($c=0; $c<$num; $c++){
                echo $data[$c]."<br />\n";
            }
        }
    }
?>
