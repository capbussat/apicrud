<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // tornem dades en json, he afegit un missatge i les dades
        return response()->json(
            [
                'status' => 'listed',
                'data' => PostResource::collection($posts)
            ],
            200
        );
    }

    // create no és necessari

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)  // StorePostRequest
    {
        $post = Post::create($request->all());
        return response()->json([
            'status' => 'created',
            'data' => new PostResource($post)],
             201);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, $id) //
    {
        $post = Post::all()->find( $id);

        $post->update($request->all());
        return response()->json([
            'status' => 'Updated ' . $id,
            'message' => 'Aqui tens el post actualitzat',
            'data' => new PostResource($post)
        ], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post === null) {
            return response()->json([
                'message' => 'Not found' . $id,
                'data' => $id
            ], 200);
        }

        $post->delete();
        return response()->json([
            'message' => 'Deleted ' . $id,
            'data' => $id
        ], 200);
    }
}
