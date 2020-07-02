<?php 
use Offline\Mall\Models\Category;class Cms5efc5a3390fb9445680330_5c575f0c670500492b5a9e475baafcd0Class extends Cms\Classes\PartialCode
{

public function onStart(){
$this['recom']=Category::where("code","recommended_items")->first();
}
}
