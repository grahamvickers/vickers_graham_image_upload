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
            'img' => 'graham.jpg'
        ],
        [
            'name' => 'graham',
            'img' => 'graham1.jpg'
        ],
        [
            'name' => 'graham',
            'img' => 'graham2.jpg'
        ],
        [
            'name' => 'graham',
            'img' => 'graham3.jpg'
        ],
        [
            'name' => 'graham',
            'img' => 'graham4.jpg'
        ],
        [
            'name' => 'graham',
            'img' => 'graham5.jpg'
        ],
        [
            'name' => 'graham',
            'img' => 'graham6.jpg'
        ],
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
