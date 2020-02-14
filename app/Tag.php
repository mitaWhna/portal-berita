<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = ['nama','slug'];
	public $timestamps = true;
	
     public function artikel()
    {
    	// model tag bisa memiliki relasi many to many
    	//(belongs many)terhadap model 'Artikel' yang terhubung oleh 
    	//table'artikel_tag' masing masing sebagai 'artikel_id' dan
    	//'tag_id'
    	return $this->belogsToMany(
    		'App\Artikel',
    		'artikel_tag',
    		'tag_id',
    		'artikel_id'
    	);
    }
}
