<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowings extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'name',
        'book_id',
        'borrow_date',
        'return_date',
        'late_fees',
    ];

    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id');
    }

    public function visitor()
    {
        return $this->belongsTo(visitor::class);
    }
}
