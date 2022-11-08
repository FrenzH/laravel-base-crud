<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics=config('data.comics');
        foreach ($comics as $model) {
            $comics=new Comic();
            $comics->title = $model['title'];
            $comics->description = $model['description'];
            $comics->thumb = $model['thumb'];
            $comics->price= $model['price'];
            $comics->series= $model['series'];
            $comics->sale_date= $model['sale_date'];
            $comics->type= $model['type'];
            $comics->save();

        }
    }
}
