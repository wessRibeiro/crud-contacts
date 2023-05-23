<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'contact', 'email'];

    public static function rules($id = null)
    {
        return [
            'name' => 'required|string|min:5',
            'contact' => ['required', 'digits:9', Rule::unique('contacts')->ignore($id)],
            'email' => ['required', 'email', Rule::unique('contacts')->ignore($id)],
        ];
    }
}
