<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/* 
* Aquesta classe és una capa entre la base de dades i l'API 
* ens estalvia utilitzar el mètode >toJson() a cada model per convertir dades en JSON.
* Però, no només aixó podem escollir quines dades volem i com les presentem.
*/ 

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
         return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'created_at' => $this->created_at,
        ];
    }
}
