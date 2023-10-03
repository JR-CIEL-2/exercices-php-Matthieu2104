<?php
function moyenne($test){
    $result=0;
    $div=0;
    for($i = 0;$i<count($test);$i++){
        $result=$test[$i]+$result;
        $div=$div+1;
    }
    $result=$result / $div;
    return $result;
}

function ranger($tri)
{
    sort($tri);
    $tot = 0;
    $tot = count($tri)/ 2;
    if($tot%2 != 0)
    {
        $result1=$tot/2;
        $result2 =$tot/2+1;
        return $tri[($result1+$result2)/2];

    }else{
        $result = $tot - 0.5;
        return $tri[$result];
    }


}