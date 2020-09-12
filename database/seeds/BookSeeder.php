<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'Lord of the Rings',
            'pages'=>'450',
            'price'=>'10.20',
            'id_user'=>'1',
        ]);
        $book->create([
            'title'=>'Harry Potter',
            'pages'=>'300',
            'price'=>'70.20',
            'id_user'=>'2',
        ]);
        $book->create([
            'title'=>'Da Vinci Code',
            'pages'=>'500',
            'price'=>'45.69',
            'id_user'=>'3',
        ]);
    }
}
