<?php 
use Offline\Mall\Models\Category;class Cms5efb7b9e43953130059841_4ca7bb2f7babb80b5c3f5b98e7d97badClass extends Cms\Classes\PartialCode
{

public function onStart(){
$cat=Category::where("code","popular")->first();
$this['catName'] = $cat->name;
$this['pCategories'] = $cat->children;
}
}
