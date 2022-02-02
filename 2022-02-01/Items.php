<?php
// Items.php

$myItem = new Item(1, 'Taco', 'An awesome taco on a homemade tortilla', 4.95);
$myItem->addExtra('Sour cream');
$myItem->addExtra('Cheese');
$myItem->addExtra('Guac');
$items[] = $myItem;

$myItem = new Item(2, 'Sundae', 'Our sundaes are awesome', 3.95);
$myItem->addExtra('Sprinkles');
$myItem->addExtra('Whipped Cream');
$myItem->addExtra('Choco Sauce');
$items[] = $myItem;

$myItem = new Item(3, 'Salad', 'An awesome salad', 5.95);
$myItem->addExtra('Egg');
$myItem->addExtra('Bacon');
$myItem->addExtra('Croutons');
$items[] = $myItem;

echo '<pre>';
var_dump($items);
echo '</pre>';

class Item{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price){
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
    } // end Item constructor

    public function addExtra($Extras){
        $this->Extras[] = $Extras;
    } // end addExtra() method, add extras only if selected
} // end Item class