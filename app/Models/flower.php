<?php
namespace App\Flowers;
use Illuminate\Database\Eloquelnt\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Flawers extends Model 
{
    use HasFactory;
    // fillable può esser sia public, protected il cliente nonp otrà accedere
    protected $fillable = ["tipolgy","description","img" ]
}