<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MesinCastingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    protected static $response = [
        'code' => null,
        'message' => null,
        'data' => null,
    ];
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'mc' => $this->mc,
            'material' => $this->material,
            'capacity' => $this->capacity,
            'min' => $this->min,
            'max' => $this->max

        ];
    }
    public static function createApi($code = null, $message = null, $show = null)
    {
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['show'] = $show;

        return response()->json(self::$response, self::$response['code']);
    }
}
