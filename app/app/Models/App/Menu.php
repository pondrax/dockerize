<?php

namespace App\Models\App;

use App\Models\Base\Model;

class Menu extends Model 
{
	protected $table = 'app_menu';
	
	protected $guarded = [];
	
	const rules = [
		'create' => [
			'menu' => 'required'
		],
		'update' => []
	]; 
    
    public function route()
    {
        return $this->hasMany('App\Models\App\Route');
    }
}
