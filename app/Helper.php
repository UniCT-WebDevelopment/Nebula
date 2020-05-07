<?php

function productImage($path){
    
    if($path && file_exists('storage/' . $path ))
    return  asset('storage/'.$path);
    else 
    return asset('images/undefined.png');

}

