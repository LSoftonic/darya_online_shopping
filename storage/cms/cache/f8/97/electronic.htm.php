<?php 
use Offline\Mall\Models\Category;class Cms5efb8fc8f2574061296645_cb3f03a64de1bf2ddac50169be85c3acClass extends Cms\Classes\PartialCode
{

public function onStart(){
$this['electronic']=Category::where("code","electronics")->first();
}
}
