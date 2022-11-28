<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book
{
    private static $book= [ [
        "id"=>1,
        "nama"=>"Cinta kita",
        "publisher"=>"Bayu",
        "harga"=>15000
    ],
    
    [
        "id"=>2,
        "nama"=>"Rindu",
        "publisher"=>"Wira",
        "harga"=>12000
    ],
    [
        "id"=>3,
        "nama"=>"Demi Kamu",
        "publisher"=>"Daffa",
        "harga"=>11000
    ],
    [
        "id"=>4,
        "nama"=>"Pandangan Pertama",
        "publisher"=>"wahyu",
        "harga"=>10000
    ],
    [
        "id"=>5,
        "nama"=>"Pandangan Hidup    ",
        "publisher"=>"zumar",
        "harga"=>9000
    ],
];

    public static function semua()
    {
        return collect(self::$book);
    }

public static function find($id)
{
    $book_data = static::semua();
    return $book_data->firstWhere('id', $id);
}
}
