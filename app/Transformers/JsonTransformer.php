<?php

namespace App\Transformers;

use App\Json;
use League\Fractal\TransformerAbstract;

class JsonTransformer extends TransformerAbstract
{
    /**
     * Related models to include in this transformation.
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * Turn this item object into a generic array.
     *
     * @param Json $json
     * @return array
     */
    public function transform(Json $json)
    {
        return [
            // attributes

            // links
            'links' => [
                [
                    'rel' => 'self',
                    'href' => url('path/to/resource'),
                ],
            ]
        ];
    }


    public static function response($data = null, $message = null)
    {
        return [
            'data'    => $data,
            'message' => $message,
        ];
    }


}
