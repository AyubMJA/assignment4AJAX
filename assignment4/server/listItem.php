<?php
/*
This file contains a class def to hold
a single shopping list item.
Make sure your instance variables are private.
*/

class ListItem implements JsonSerializable{
    private $item;
    private $quantity;

    function __construct($item,$quantity)
    {
        $this->item = $item;
        $this->quantity = (int)$quantity;
    }

    function itemInList(){
        return "<li>$this->item $this->quantity</li>";
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

