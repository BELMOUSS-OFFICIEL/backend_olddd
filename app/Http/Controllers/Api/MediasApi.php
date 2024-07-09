<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;

class MediasApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medias = Media::all();



        return response()->json(['data' => $medias]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $medias=Media::select()->where('immobiliere_id',$id)->get();
        if($medias->count()<=0){
            return response()->json([
                'error' =>true,
                'message' => 'Not Found'
            ]);
        }
        return response()->json(['data' => $medias]);
    }



}
