<?php
// setup the autoloading
require_once './vendor/autoload.php';

// setup Propel
require_once './generated-conf/config.php';


public class videoKlasse extends playlist{
	$liedname;
	$eingabe;
	
	public function __construct($liedname,$eingabe) {
		
	}
	
	public function zaehlt($videoname) {
	 	$v = VideoQuery::create()->find($videoname);
		echo $v->getCount();
	}
	
	public function getTopTen($stelle) {
		$v = VideoQuery::create()
				->orderByCount()
				->limit(10)
				->find();
		//Muss noch schaun ob das so funktioniert wegen Array
		$v->getVideoName($stelle);
	}
	
	public function findSong($eingabe){
		$v = VideoQuery::create()->findOneByVideoName($eingabe);
		echo $v->getVideoName();
	}
}
?>