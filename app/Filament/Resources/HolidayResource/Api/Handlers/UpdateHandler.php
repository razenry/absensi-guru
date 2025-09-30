<?php
namespace App\Filament\Resources\HolidayResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\HolidayResource;
use App\Filament\Resources\HolidayResource\Api\Requests\UpdateHolidayRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = HolidayResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update Holiday
     *
     * @param UpdateHolidayRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateHolidayRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}