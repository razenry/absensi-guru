<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rupadana\ApiService\Contracts\HasAllowedFields;
use Rupadana\ApiService\Contracts\HasAllowedFilters;
use Rupadana\ApiService\Contracts\HasAllowedSorts;

class Holiday extends Model implements HasAllowedFields, HasAllowedSorts, HasAllowedFilters
{
    use SoftDeletes;

    // Which fields can be selected from the database through the query string
    public static function getAllowedFields(): array
    {
        return [
            'id',
            'name',
            'date',
            'description',
            'is_recurring',
            'is_active',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }

    // Which fields can be used to sort the results through the query string
    public static function getAllowedSorts(): array
    {
        return [
            'id',
            'name',
            'date',
            'is_recurring',
            'is_active',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }

    // Which fields can be used to filter the results through the query string
    public static function getAllowedFilters(): array
    {
        return [
            'id',
            'name',
            'date',
            'description',
            'is_recurring',
            'is_active',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }

    // add fillable
    protected $fillable = [
        'name',
        'date',
        'description',
        'is_recurring',
        'is_active',
    ];

    protected $casts = [
        'date' => 'date',
        'is_recurring' => 'boolean',
        'is_active' => 'boolean',
    ];

    // adad dates
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // add guarded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}