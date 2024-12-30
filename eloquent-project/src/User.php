<?php
// src/User.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Specify the table associated with the model
    protected $table = 'users'; // If the table name doesn't match the model's name, specify it explicitly

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'user_id';

    // Disable timestamps if your table doesn't have 'created_at' and 'updated_at' columns
    public $timestamps = false;

    // Define the fields that are mass assignable
    protected $fillable = ['name', 'email', 'password', 'address_id', 'image_url'];

    // Optionally, if you want to define a relationship, add it here (e.g., relationship with Address)
}
