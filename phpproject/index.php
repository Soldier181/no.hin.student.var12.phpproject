<?php 
require 'libs/Smarty.class.php';
require 'xmlData.class.php';
require 'innlegg.class.php';

session_start();
$_SESSION = array();
 $smarty = new Smarty();
 $dataHenter = new xmlData();
 
 $smarty->assign("sideNavn", "Hjem");
 $smarty->assign("innlegg", $dataHenter->hentAlleInnlegg());
 
 $smarty->display("index.tpl");