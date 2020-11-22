<?php 

namespace App\Models;

/**
 * 
 */
class Produk extends Model
{
	protected $table = 'produk';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}