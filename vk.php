<?php

function dwn(){
    $dir=63;
    $item=0;
    mkdir("./$dir");
    //Шаг 1
    for($i=59584;$i<60000;$i++){
        if(is_file("./$dir/$i.png")){
            $item++;
            if($item==500){
                $dir++;
                $item=0;
                mkdir("./$dir");
            }
        }else{
            $data=file_get_contents("https://vk.com/sticker/1-$i-256");
            if($data){
                $item++;
                if($item==500){
                    $dir++;
                    $item=0;
                    mkdir("./$dir");
                }
                file_put_contents("./$dir/$i.png", $data);
            }
        }
    }
    echo 'success :)';
}
dwn();
