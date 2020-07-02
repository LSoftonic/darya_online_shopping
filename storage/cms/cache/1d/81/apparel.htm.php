<?php 
use Offline\Mall\Models\Category;class Cms5efb8f2f23eb5008702922_604e2ac1555d5295ae1189844528a2afClass extends Cms\Classes\PartialCode
{

public function onStart(){
$this['apparel']=Category::where("code","apparel")->first();
}
}
