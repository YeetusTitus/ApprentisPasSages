<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Programmation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "programmations";
	protected $primaryKey = "id";
	public $timestamps = true;

    protected $fillable = [
        'id', 'dateDebut', 'DateFin','nbPersonnesPrevues'
    ];

//    function getProg(){
//    	return $this->belongToMany('App\models\ContentProg', 'id', 'programmation_id');
//    }
    function getModules(){
    	return $this->belongsToMany('App\models\Module', 'contentprogs' , 'module_id','module_id');
    }
    function getActions(){
    	return $this->belongsToMany('App\models\Action', 'contentprogs','action_id','action_id' );
    }
}
