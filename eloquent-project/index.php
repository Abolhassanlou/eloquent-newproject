<?php
// index.php

require 'bootstrap.php'; // Make sure bootstrap.php is included

use App\User;

// Fetching all users using Eloquent ORM
$users = User::all(); // Eloquent fetches all users

// Iterate through the users
foreach ($users as $user) {
    echo $user->name . '<br>'; // Output the 'name' field of each user
}
