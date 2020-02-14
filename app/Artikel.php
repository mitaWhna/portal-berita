<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
    	'judul',
    	'slug', 'deskripsi','foto','user_id','kategori_id'
    ];
    public $timestamps = true;

    public function kategori()
    {
    	//data model 'Artikel' bisa di miliki oleh model 'kategori'
    	//melalui kategori_id
    	return $this->belongsTo('App\Kategori','kategori_id');
    }
    public function user()
    {
    	// data model Artikel bisi di miliki oleh user
    	//melalui user id
    	return $this->belongsTo('App\User','user_id');

    }
    public function tag()
    {
    	// model tag bisa memiliki relasi many to many
    	//(belongs many)terhadap model 'Artikel' yang terhubung oleh 
    	//table'artikel_tag' masing masing sebagai 'tag_id' dan
    	//'artikel_id'
    	return $this->belogsToMany(
    		'App\Tag',
    		'artikel_tag',
    		'artikel_id',
    		'tag_id',
    	);
    }
}
