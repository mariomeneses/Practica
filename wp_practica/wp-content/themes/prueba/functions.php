<?php 

include TEMPLATEPATH . '/less.php/Less.php';

$parser = new Less_Parser();

$inputFile = TEMPLATEPATH . "/less/bootstrap.less";
$inputFileMain = TEMPLATEPATH . "/less/main.less";
$outputFile = TEMPLATEPATH . "/css/bootstrap.css";

$datOutput = '';
if(file_exists($inputFile))
	$datInput = filemtime($inputFile);
if(file_exists($inputFileMain))
	$datInputMain = filemtime($inputFileMain);
if(file_exists($outputFile))
	$datOutput = filemtime($outputFile);
if($datInputMain > $datOutput){
	$parser->parseFile( $inputFile );
	$css = $parser->getCss();
	file_put_contents($outputFile, $css);
}

// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'primary', 'Primary Menu' );

