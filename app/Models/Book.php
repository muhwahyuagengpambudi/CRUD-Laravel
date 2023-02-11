<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function scopeFilter($query, array $filters){
        
        if(isset ($filters['search']) ? $filters['search'] : false){
            return$query->where('nama', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('author', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('harga', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('rilis', 'like', '%' . $filters['search'] . '%');
        }
        
        $query->when($filters['category']??false, function($query, $category){
            return $query->whereHas('publisher', function($query) use ($category){
                $query->where('id', $category);
            });
        });
        }
    }
