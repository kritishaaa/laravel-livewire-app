<?php
use App\Models\Service;
function getServices(){
    $services = Service::orderBy('title', 'ASC')->where('status', 1)->get();
    \Log::info(json_encode($services));
    return $services;

}

