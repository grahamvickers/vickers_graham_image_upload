<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class ImageGallery extends Model
{
    /**
     * 
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'img'
    ];

    /**
     * get listing img uri
     * @return String|null
     */
    public function getImgUriAttribute()
    {
        return $this->imgUploaded
            ? Storage::url($this->img)
            : null;
    }
}
