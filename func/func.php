<?php

function post_content($text)
{
	$text=substr($text,0,800);
	$text=substr($text,0,strrpos($text," "));
	$text=$text." ...";
	return $text;
}



?>