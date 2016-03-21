<?php
namespace frontend\classes;
/**
 * Created by PhpStorm.
 * User: yakushevr
 * Date: 21.03.2016
 * Time: 16:27
 */

class PTotal
{
	public static function pageTotal($models, $fieldName)
	{
		$total=0;
		$count = count($models);
		for($i=0; $i<$count; $i++){
			$model = $models[$i];
			$total += $model[$fieldName];
		}
		return number_format($total, 2, ',', ' ');
	}
}