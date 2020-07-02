<?php 
use Offline\Mall\Models\Category;class Cms5efb7319d81a3390252435_fc6c67bdac238c4132e8bcdb105f5764Class extends Cms\Classes\PartialCode
{

public function onStart(){
$cat=Category::where("code","popular")->first();
$this['catName'] = $cat->name;
$this['pCategories'] = $cat->children;
}
}
