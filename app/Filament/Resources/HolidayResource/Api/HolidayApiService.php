<?php
namespace App\Filament\Resources\HolidayResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\HolidayResource;
use Illuminate\Routing\Router;


class HolidayApiService extends ApiService
{
    protected static string | null $resource = HolidayResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
