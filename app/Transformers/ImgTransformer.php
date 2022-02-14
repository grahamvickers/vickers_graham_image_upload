<?php

namespace App\Transformers;

class ImgTransformer extends Transformer 
{
    /**
     * transform an item 
     * 
     * @param $upload 
     * @return mixed
     */
    public function transform($upload)
    {
        return [
            'id' => $upload->id,
            'name' => $upload->name,
            'img' => $upload->imgUri,
        ];
    }
}