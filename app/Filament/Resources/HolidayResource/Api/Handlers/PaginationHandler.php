<?php
namespace App\Filament\Resources\HolidayResource\Api\Handlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use App\Filament\Resources\HolidayResource;
use App\Filament\Resources\HolidayResource\Api\Transformers\HolidayTransformer;

class PaginationHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = HolidayResource::class;

    protected static string | array $routeMiddleware = [];

    /**
     * List of Holiday
     *
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\JsonResponse
     */
    public function handler()
    {
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for($query)
            ->allowedFields($this->getAllowedFields() ?? [])
            ->allowedSorts($this->getAllowedSorts() ?? [])
            ->allowedFilters($this->getAllowedFilters() ?? [])
            ->allowedIncludes($this->getAllowedIncludes() ?? [])
            ->paginate(request()->query('per_page'))
            ->appends(request()->query());

        return HolidayTransformer::collection($query);
    }
}