<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryBook extends Model
{
    use HasFactory;

    protected $primaryKey = "book_id"; 
}
