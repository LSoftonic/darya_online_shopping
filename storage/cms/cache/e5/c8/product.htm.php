<?php 
use OFFLINE\Mall\Models\Category;
class Cms5ef2ff75e26f6198319369_6074cd5e5cb28c16e09adf22b8b71c9aClass extends Cms\Classes\PageCode
{
public function onStart() {
    // Fetch the category from the product component.
    $productComponent = $this->findComponentByName('product');
    $item = optional($productComponent)->item;
    if (!$item) {
        return;
    }
    $category = optional($item->categories)->first();
    if (!$category) {
        return;
    }
    // If a category is available, use it for the products component.
    $this->findComponentByName('relatedProducts')->category = $category;
}
}
