<?php
namespace App\Filament\Resources\HolidayResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\HolidayResource;
use App\Filament\Resources\HolidayResource\Api\Requests\CreateHolidayRequest;

class CreateHandler extends Handlers
{
    public static string|null $uri = '/';
    public static string|null $resource = HolidayResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Create Holiday
     *
     * @param CreateHolidayRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateHolidayRequest $request)
    {
        try {
            $model = new (static::getModel());
            $model->fill($request->all());
            $model->save();

            return static::sendSuccessResponse($model, "Successfully Create new Holiday");
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create Holiday',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}