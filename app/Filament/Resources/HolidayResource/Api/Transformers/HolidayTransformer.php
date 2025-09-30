<?php
namespace App\Filament\Resources\HolidayResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Holiday;

/**
 * @property Holiday $resource
 */
class HolidayTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
