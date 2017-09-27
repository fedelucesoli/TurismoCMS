<?php

namespace App\Logic;

use Illuminate\Support\Facades\Response;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;

class MapasRepository
{
  public function showMap($item){
    $config = array();
    $config['center'] = '-35.1870349, -59.0949762';
    $config['map_width'] = '100%';
    $config['map_height'] = 500;
    $config['zoom'] = 15;
    Gmaps::initialize($config);
    return Gmaps::create_map();
  }

  public function showMarkerMap($item){

    $config = array();
    $config['center'] = $item->lat . ', '. $item->lng;;
    $config['map_width'] = '100%';
    $config['map_height'] = 400;
    $config['zoom'] = 18;
    $config['disableMapTypeControl'] = true;
    $config['disableDefaultUI'] = true;
    $marker = array();
    $marker['position'] = $item->lat . ', '. $item->lng;
    $marker['icon'] = '/img/marker.png';
    $marker['draggable'] = true;
    $marker['ondragend'] = '
    document.getElementById("lat").value = event.latLng.lat();
    document.getElementById("lng").value = event.latLng.lng();
    ';
    Gmaps::add_marker($marker);
    Gmaps::initialize($config);

    return Gmaps::create_map();
  }

  public function addMarkerMap(){
    $config = array();
    $config['center'] = '-35.1870349, -59.0949762';
    $config['map_width'] = '100%';
    $config['map_height'] = 500;
    $config['zoom'] = 15;
    $config['disableDefaultUI'] = true;
    
    $config['onclick'] = '
    createMarker_map({ map: map, position:event.latLng });
    document.getElementById("lat").value = event.latLng.lat();
    document.getElementById("lng").value = event.latLng.lng();
    ';

    Gmaps::initialize($config);
    return Gmaps::create_map();
  }

}
