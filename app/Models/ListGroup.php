<?php

namespace App\Models;

use App\Http\Controllers\TodolistController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function todolists(){
        return $this->hasMany(todolist::class);
    }
}
