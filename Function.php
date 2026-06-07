<?php

function isAdult($a){
    if($a >= 18){
        return "Adult";
    }else{
        return "Minor";
    };
}

 echo isAdult(21);
?>