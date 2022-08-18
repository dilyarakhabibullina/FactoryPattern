<?php

interface StoreInterface {
	public function sellSmth();
}

class GroceryStore implements StoreInterface {
	public function sellSmth() {
		echo 'we r selling food!';
		}
}

class JewelryStore implements StoreInterface {
	public function sellSmth() {
		echo 'we r selling rings and earrings!';
		}
}


interface StoreFactoryInterface {
	public function createStore($type);
}

class StoreFactory implements StoreFactoryInterface {
	public function createStore($type) {
		switch ($type) {
	case 'grocery':
		return new GroceryStore;
		break;
	case 'jewelry':
		return new JewelryStore;
		break;
		
		}
}
}

$store = new GroceryStore;
$store->sellSmth();

$storeFactory = new StoreFactory;
$jewelryStore = $storeFactory->createStore('jewelry');
$jewelryStore->sellSmth();

$groceryStore = $storeFactory->createStore('grocery');
$groceryStore->sellSmth();

