<?php

use Illuminate\Database\Seeder;
use App\Fumetto;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('comics');
        foreach($array_comic as $elemento){

            $new_comic = new Fumetto();
            $new_comic->title = $elemento['title'];
            $new_comic->description = $elemento['description'];
            $new_comic->image = $elemento['thumb'];
            $new_comic->series = $elemento['series'];
            $new_comic->price = $elemento['price'];
            $new_comic->type = $elemento['type'];
            $new_comic->date = $elemento['sale_date'];
            $new_comic->slug = Str::slug($new_comic->title, '-');
            $new_comic->save();
    
        }
    }
}
