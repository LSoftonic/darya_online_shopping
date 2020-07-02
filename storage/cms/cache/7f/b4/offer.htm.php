<?php 
use Offline\Mall\Models\Category;class Cms5efb836e933bf209444363_67bb7b968dc298bd44cd4a051a665a0cClass extends Cms\Classes\PartialCode
{

public function onStart(){
$offer=Category::where("code","offers")->first();
$this['offerName'] = $offer->name;
$this['offers'] = $offer->children;
}
}
