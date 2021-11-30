<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    protected $table = 'magang';
    protected $fillable = ['nim','nama','jenis_kelamin','agama','alamat','avatar','no_tlp','asal','divisi'];

    public function getAvatar()
    {
    	if (!$this->avatar){
    		return asset('images/default.jpg');
    	}

    	return asset('images/'.$this->avatar);
    }

    public function pembimbing()
    {
    	return $this->belongsToMany(Pembimbing::class)->withPivot(['nilai']);
    }



     public function detail()
    {
        return $this->hasMany(Detail::class);
    }



}
