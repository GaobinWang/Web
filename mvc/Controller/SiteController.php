<?php
require_once('./Controller/Controller.php');
require_once('./Models/DataBase.php');
class SiteController extends Controller
{
	// gii

	public function actionIndex()
	{
		// php5.6 isset($_GET['p']) ? $_GET['p'] : 1;
		// yii \Yii::$app->request->get('p', 1);
		$p = $_GET['p'] ?? 1; 
		// $pagesize = 10;
		$db = new DataBase;
		// select name from db offset x limit y;
		$names = $db->selectNameByGender();
		$this->render('site', $names);
	}

	public function actionGender()
	{
		// type = 1男 2女
		$type = intval($_GET['type'] ?? 1);

		$db = new DataBase;
		// select name from db where sex = 'boys';
		$names = $db->selectNameByGender($type);
		$this->render('site', $names);
	}

	public function actionBoys()
	{
		$db = new DataBase;
		$names = $db->selectNameByGender(1);
		$this->render('site', $names);
	}

	public function actionGirls()
	{
		$db = new DataBase;
		$names = $db->selectNameByGender(2);
		$this->render('site', $names);
	}
}