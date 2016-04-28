<?php
require_once('./Controller/Controller.php');
require_once('./Models/DataBase.php');
class ArticleController extends Controller
{
	public function actionIndex()
	{
		$id = $_GET['id'];
		$db = new DataBase;
		$model = $db->getByPk($id);
		if ($model) {
			$this->render('article', $model);
		} else {
			$this->render('error');
		}	
	}
}

