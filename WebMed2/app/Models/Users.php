<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Users
 * @package App\Models
 * @version February 7, 2018, 11:41 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 */
class Users extends Model
{

    public $table = 'users';

    public $timestamps = false;

    public $fillable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
