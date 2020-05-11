<?php
	$db='database';
	$ru2='../';
    $cl1='orden';
    $cl2='cliente';
    $cl3='recolector';
	$cl4='products_orden';
	$di1='orden/';
	$di2='orden/detalle.php?p=';

	function index($rut,$uid){
		global $db, $cl1, $cl2;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		require($rut.DIRMOR.$cl2.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();
		$_cl2 = new $cl2();

		$inf = $_cl1->listar($_db->conect02(),$uid);
		$_SESSION['cboCli'] = $_cl2->cbo($_db->conect02());

		return $inf;
	}
    function detalle($rut,$uid,$pid){
        global $db, $cl1;
        require($rut.DIRMOR.$db.'.php');
        require($rut.DIRMOR.$cl1.'.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $inf = $_cl1->listar($_db->conect02(),$_db->conect02(),$pid);

        return $inf;
    }
	function exportar($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->exportar($_db->conect02(),$_db->conect02());

		return $inf;
	}
    if (isset($_POST['addProducto'])) {
        session_start();
        require_once($ru2.'const.php');

        
    }

?>