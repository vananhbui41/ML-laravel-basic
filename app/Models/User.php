<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

    /**
     * Store info users to database
     * 
     * @param object $request 
     */
    public function createUser($request)
    {
        $input = $request->except('password_confirmation');
        $input['password'] = Hash::make($input['password']);
        User::create($input);
    }

    /**
     * Get list users
     * 
     * @return Illuminate\Pagination\Paginator
     */
    public function getUsers()
    {
        return User::orderBy('email')->paginate();
    }
}