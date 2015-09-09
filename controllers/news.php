<?php

$layout = 'default';

function index($page = '1'){
//$v['news'] = getNews(10, 1);
	//set($v);
	render();
}

function view($id){
	//$v['new'] = getOneNew($id);
	$v['new'] = [ 
		'id'	=>	1,
		'title'	=>	'Ma super new',
		'content'	=>	'Trop cool la vie',
	];
	set($v);
	render('view');
}