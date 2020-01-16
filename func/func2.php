<?php
function special_content($text)
{
	$text=substr($text,0,300);
	$text=substr($text,0,strrpos($text," "));
	$text=$text." ...";
	return $text;
}
?>