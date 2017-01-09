<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Editorials extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    public function editorialsComments() {
    	return $this->hasMany('\App\EditorialsComment', 'editorials_id')->orderBy('id', 'desc');
    }
}
