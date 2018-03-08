<?php
//Kroma is a famework created by KLIVOLKS(India) PVT. LTD. in order to reduce the load and make coding easier and lighter. It uses eleqouent modal MVC framework with primary level slug management unlike codeigniter every url act as a $plugin and additional parameters can be called using $param[] array.

session_start();
include( 'settings/class_lib.php' );
$link = $_SERVER[ 'REQUEST_URI' ];
$param = explode( '/', $link );
$plugin = $param[ 1 ];
include('controller.php');
include('settings/modal.php');
?>