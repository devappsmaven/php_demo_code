<?php

namespace App;

use App\Product;
use App\Size;
use App\Design;
use App\Side;


class ItemCart
{
    private $sizes;
    private $sides;
    private $design;
    private $total;

    public function __construct($oldItemCart)
    {
        if($oldItemCart)
        {
            $this->sizes = $oldItemCart->sizes;
            $this->sides = $oldItemCart->sides;
            $this->design = $oldItemCart->design;
            $this->total = $oldItemCart->total;
        }
        else
        {
            $this->sizes =array();
            $this->side =array();
            $this->design = null;
            $this->discount = 0.00;
            $this->total = 0.00;
        }
    }

    public function addSize(Size $size)
    {

    }

    public function calc()
    {
        
    }
}
