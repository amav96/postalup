<?php
	$db='database';
	$ru2='../';
    $cl1='ordenes';
    $cl2='express';
	$cl3='autorizar';
	$di1='datoscliente/';
	$di2='datoscliente.php';

	function index($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->listar($_db->conect01(),$_db->conect01());

		return $inf;
	}

    if (isset($_POST{'ordengenerar'})) {
        session_start();
        require($ru2.'const.php');
        require($ru2.DIRMOR.$db.'.php');
        require($ru2.DIRMOR.$cl1.'.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $id_recolector=$_POST['id_recolector'];
        $fecha_orden=$_POST['fecha_orden'];

        $_SESSION['stat'] = $res = $_cl1->add($_db->conect03(),$id_recolector,$fecha_orden);
        
        if ($res=="add") { //instancia maxID que es la clase para generar orden. ./morenoku/expres.php
            $_SESSION['id_order'] = $_cl1->maxID($_db->conect03());
        }

        header("Location: ".URL.$di2);
        exit();
    }
    if (isset($_POST['agregarEq'])) {
        session_start();
        require($ru2.'const.php');
        require($ru2.DIRMOR.$db.'.php');
        require($ru2.DIRMOR.$cl2.'.php');
        require($ru2.DIRMOR.$cl3.'.php');
        $_db = new $db();
        $_cl2 = new $cl2();
        $_cl3 = new $cl3();

        $id_orden = $_POST['id_orden'];
        $serie =$_POST['serie'];
        $identificacion = $_POST['identificacion'];
        $cable_hdmi =$_POST['cable_hdmi'];
        $cable_av = $_POST['cable_av'];
        $fuente= $_POST['fuente'];
        $control_1=$_POST['control_1'];
        $estado=$_POST['estado'];
        $horario_rec=$_POST['horario_rec'];
        $adicional=$_POST['adicional'];
        $id_recolector = $_POST['id_recolector'];

        $res = $_cl2->validarIR($_db->conect03(),$identificacion);
        
        if ($res==1) {
            echo $_SESSION['status'] = $_cl3->add($_db->conect03(),$id_orden,$serie,$identificacion,$cable_hdmi,$cable_av,$fuente,$control_1,$estado,$horario_rec,$adicional,$id_recolector);
        }else{
            echo $_SESSION['status'] = 'No se encontró la ID.';
        }

        header("Location: ".URL.$di2);
        exit();
    }
    if (isset($_POST['editarEq'])) {
        session_start();
        require($ru2.'const.php');
        require($ru2.DIRMOR.$db.'.php');
        require($ru2.DIRMOR.$cl2.'.php');
        $_db = new $db();
        $_cl2 = new $cl2();

        $id=$_POST['edit_id'];
        $serie = $_POST["edit_serie"];
        $cable_hdmi = $_POST["edit_cable_hdmi"];
        $cable_av = $_POST["edit_cable_av"];
        $fuente = $_POST["edit_fuente"];
        $control_1 = $_POST["edit_control_1"];
        $id_orden = $_POST["edit_id_orden"];
        $estado_rec = $_POST["edit_estado_rec"];
        $horario_rec=$_POST['horario_rec'];
        $id_recolector_password = $_POST['id_recolector_password'];
        $id_recolector_2 = $_POST['id_recolector_2'];

        $id_recolector_password = password_hash($id_recolector_password, PASSWORD_DEFAULT);

        $_SESSION['status'] = $_cl2->edit($_db->conect03(),$id,$serie,$cable_hdmi,$cable_av,$fuente,$control_1,$id_orden,$estado_rec,$horario_rec,$id_recolector_password,$id_recolector_2);

        header("Location: ".URL.$di2);
        exit();
    }

?>