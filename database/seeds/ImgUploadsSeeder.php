<?php

use Illuminate\Database\Seeder;
use App\Image;


class ImgUploadsSeeder extends Seeder
{   
      /**
     * 
     * Listing of default image uploads
     * 
     * @var array
     */
    protected $images = [
        [
            'name' => 'graham',
            'img' => 'graham.png'
        ],
        [
            'name' => 'graham',
            'img' => 'graham1.png'
        ],
        [
            'name' => 'graham',
            'img' => 'graham2.png'
        ],
        [
            'name' => 'graham',
            'img' => 'graham3.png'
        ],
        [
            'name' => 'graham',
            'img' => 'graham4.png'
        ],
        [
            'name' => 'graham',
            'img' => 'graham5.png'
        ]
    ];



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->images as $img){
            ImageGallery::firstOrCreate($img);
        }
    }
}
