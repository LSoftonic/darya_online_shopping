<?php 
use Offline\Mall\Models\Brand;class Cms5efc795b7d3cd531402029_5d8268e0afb90dbec7ab7a7023cd7ad2Class extends Cms\Classes\PartialCode
{

public function onStart(){
$this['brands']=Brand::all();
}
}
