<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    protected $table = 'pembimbing';
    protected $fillable = ['nama', 'jabatan', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'bidang'];

     public function getAvatar()
    {
    	if (!$this->avatar){
    		return asset('images/default.jpg');
    	}

    	return asset('images/'.$this->avatar);
    }

    public function magang()
    {
    	return $this->belongsToMany(Magang::class)->withPivot(['nilai']);
    }

     public function detail()
    {
        return $this->hasMany(Detail::class);
    }

}

