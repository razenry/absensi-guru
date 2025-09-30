<?php

namespace App\Filament\Resources\HolidayResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\HolidayResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\HolidayResource\Api\Transformers\HolidayTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = HolidayResource::class;


    /**
     * Show Holiday
     *
     * @param Request $request
     * @return HolidayTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse("Data with id $id not found");

        return new HolidayTransformer($query);
    }
}
