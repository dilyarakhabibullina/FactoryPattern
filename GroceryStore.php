<?php

interface StoreInterface {
	public function sellSmth();
}

class GroceryStore implements StoreInterface {
	public function sellSmth() {
		echo 'we r selling food!';
		}
}

interface StoreFactoryInterface {
	public function createStore();
}

class StoreFactory implements StoreFactoryInterface {
	public function createStore() {
		return new GroceryStore;
		}
}


$store = new GroceryStore;
$store->sellSmth();

$store1 = new StoreFactory;
$store2 = $store1->createStore();
$store2->sellSmth();
