<?php
class DataBase
{
	private $db = [
		[
			'id' => 0,
			'name' => 'caojiepeng',
			'age' => 17,
			'sex' => 'boy'

		],
		[
			'id' => 1,
			'name' => 'wanggaobin',
			'age' => 28,
			'sex' => 'boy'
		],
		[
			'id' => 2,
			'name' => 'gaoyun',
			'age' => 30,
			'sex' => 'girl'
		]
	];

	// $gender = 0为不区分 1为男 2为女
	private function getAllByGender($gender = 0)
	{
		if ($gender === 2) {
			return array_filter($this->db, function($person){
				return $person['sex'] === 'girl';
			});
		} elseif ($gender === 1) {
			return array_filter($this->db, function($person){
				return $person['sex'] === 'boy';
			});
		} else {
			return $this->db;
		}
	}

	public function selectNameByGender($gender = 0)
	{
		$peoples = $this->getAllByGender($gender);
		return array_column($peoples, 'name', 'id');
	}

	public function getByPk($id)
	{
		return $this->db[$id] ?? null;
	}
}