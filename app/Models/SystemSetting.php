<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rupadana\ApiService\Contracts\HasAllowedFields;
use Rupadana\ApiService\Contracts\HasAllowedFilters;
use Rupadana\ApiService\Contracts\HasAllowedSorts;

class SystemSetting extends Model implements HasAllowedFields, HasAllowedSorts, HasAllowedFilters
{
    //
    public static function getAllowedFields(): array
    {
        return [
            'id',
            'key_name',
            'value',
            'description',
            'created_at',
            'updated_at',
            'deleted_at'
        ];
    }

    // Which fields can be used to sort the results through the query string
    public static function getAllowedSorts(): array
    {
        return [
            'id',
            'key_name',
            'value',
            'description',
            'created_at',
            'updated_at',
            'deleted_at'
        ];
    }

    // Which fields can be used to filter the results through the query string
    public static function getAllowedFilters(): array
    {
        return [
            'id',
            'key_name',
            'value',
            'description',
            'created_at',
            'updated_at',
            'deleted_at'
        ];
    }

    // add fillable
    protected $fillable = [
        'key_name',
        'value',
        'description',
    ];

    // add dates 
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
