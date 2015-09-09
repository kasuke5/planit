<?php
/*
 * Name: Ajax
 */

function get_compagnies(){
	loadModel('compagnies');
	echo (json_encode(getAllCompagnies()));
}
