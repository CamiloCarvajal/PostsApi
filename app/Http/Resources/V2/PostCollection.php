<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    
    
//    public $collects = PostResource::class;
//   Para que $this->collection tome el formato de PostResources (usarlos en versiones anteriores, en las mas recientes es automatico)
    
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request) {
        return [
            'data' => $this->collection, // todo el contenido
            'meta' => [
                'organization' => 'Platzi',
                'authors'      => [
                    'Camilo', 'El carva'
                ],
            ],
            'type' => 'articles'
        ];
    }

}
