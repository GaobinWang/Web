<?php
class Controller
{
	// 获取view层进行m和v的映射
	protected function render($view, $model = null)
	{
		$models = $model;
		$view = "./Views/$view.php";
		require($view);
	}
}