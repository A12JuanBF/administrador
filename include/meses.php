<?php

function getmes($mes) {
    $arr = array("01" => "Ene", "02" => "Feb", "03" => "Mar","04"=>"Abr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Ago","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dic");
    return $arr[$mes];
}
