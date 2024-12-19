<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Запретный город',
                'city' => 'Пекин',
                'content' => 'Экскурсия по Запретному городу в Пекине — это увлекательное путешествие во времени, позволяющее вам окунуться в историю китайской империи.',
                'image' => 'img/image.jpg',
            ],
            [
                'title' => 'Храм неба',
                'city' => 'Пекин',
                'content' => 'Храмово-монастырский комплекс в центральном районе Дунчэн Пекина. В 1998 году комплекс занесён ЮНЕСКО в список всемирного наследия человечества.',
                'image' => 'img/image 5.jpg',
            ],
            [
                'title' => 'Храм неба',
                'city' => 'Пекин',
                'content' => 'Храмово-монастырский комплекс в центральном районе Дунчэн Пекина. В 1998 году комплекс занесён ЮНЕСКО в список всемирного наследия человечества.',
                'image' => 'img/image 5.jpg',
            ],
            [
                'title' => 'Красный каменный город',
                'city' => 'Пекин',
                'content' => 'С 14 Июля, 2016с14 Июля, 2016с14 Июля, 2016с14 Июля, 2016',
                'image' => 'img/image 4.jpg',
            ],
        ]);
    }
}
