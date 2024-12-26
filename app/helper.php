<?php

use App\Models\Service;

function getServices(){
    $services = Service::latest()->where('status', 1)->get();
    return $services;
}

?>