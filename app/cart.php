<?php
namespace App;

class cart{

    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
          $this->items = $oldCart->items;
          $this->totalQuantity = $oldCart->totalQuantity;
          $this->totalPrice = $oldCart->totalPrice;

        }
    }

    public function add($item,$productId){
        $storedItem = ['qty'=> 0,'productId'=>0,'productName'=>$item->productName,
        'productPrice' => $item->productPrice,'productImage'=>$item->productImage,
        'item'=>$item];

          if($this->items){
            if(array_key_exists($productId,$this->items)){
                $storedItems = $this->items[$productId];
            }
        }


        $storedItem['qty']++;
        $storedItem['productId']= $productId;
        $storedItem['productName']= $item->productName;
        $storedItem['productPrice']= $item->productPrice;
        $storedItem['productImage']= $item->productImage;
        $this->totalQuantity++;
        $this->totalPrice += $item->productPrice;
        $this->items[$productId] = $storedItem;


    }
}
?>