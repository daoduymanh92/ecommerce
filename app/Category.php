<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	const STATUS_ACTIVE = 1; // cho phep hien thi category
	const STATUS_INACTIVE = 0; // An category
	const STATUS_DELETE = 9; // xoa
    //
    /**
     * Get the products for category.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
