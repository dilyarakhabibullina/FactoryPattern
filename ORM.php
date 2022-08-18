<?php

interface ORMInterface {
	public function DBConnection();
	public function DBRecord();
	public function DBQueryBuilder();

}

class MySQLORM implements ORMInterface {
	public function DBConnection(){
		echo 'This is MySQL DBConnection</br>';
		}
	public function DBRecord(){
		echo 'This is MySQL DBRecord</br>';
	}
	public function DBQueryBuilder(){
		echo 'This is MySQL QueryBuilder<hr>';
	}

}

class PostgresORM implements ORMInterface {
	public function DBConnection(){
		echo 'This is Postgres DBConnection</br>';
		}
	public function DBRecord(){
		echo 'This is Postgres DBRecord</br>';
	}
	public function DBQueryBuilder(){
		echo 'This is Postgres QueryBuilder<hr>';
	}
}

class OracleORM implements ORMInterface {
	public function DBConnection(){
		echo 'This is Oracle DBConnection</br>';
		}
	public function DBRecord(){
		echo 'This is Oracle DBRecord</br>';
	}
	public function DBQueryBuilder(){
		echo 'This is Oracle QueryBuilder<hr>';
	}
}




interface ORMFactoryInterface {
	public function createORM($type);
}

class ORMFactory implements ORMFactoryInterface {
	public function createORM($type) {
		switch ($type) {
	case 'mysql':
		return new MySQLORM;
		break;
	case 'postgres':
		return new PostgresORM;
		break;
	case 'oracle':
		return new OracleORM;
		break;
		}
}
}

$store = new MySQLORM;
$store->DBConnection();

$ormFactory = new ORMFactory;


$mysqlORM = $ormFactory->createORM('mysql');
$mysqlORM->DBConnection();
$mysqlORM->DBRecord();
$mysqlORM->DBQueryBuilder();


$postgresORM = $ormFactory->createORM('postgres');
$postgresORM->DBConnection();
$postgresORM->DBRecord();
$postgresORM->DBQueryBuilder();

$postgresORM = $ormFactory->createORM('postgres');
$postgresORM->DBConnection();
$postgresORM->DBRecord();
$postgresORM->DBQueryBuilder();

