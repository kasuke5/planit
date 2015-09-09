<?php

/* Set var a la view */
function set($d){
	global $view_var;

	$view_var = array_merge($view_var, $d);
}

/* Function qui include la view */
function render($view = 'index'){
	global $page;
	global $layout;
	global $title;
	global $view_var;

	extract($view_var);
	ob_start();
	if (file_exists("views/$page/$view.php"))
		require("views/$page/$view.php");
	$content_for_layout = ob_get_clean();
	if (!isset($layout))
		echo $content_for_layout;
	else
		require(ROOT."views/layouts/$layout.php");
}

/* Include le model */
function loadModel($model){
	require_once(ROOT."models/$model.php");
}
?>