<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller{

    public function createNews(Request $request)
    : JsonResponse {

        $news = News::create($request->all());

        return response()->json($news, Response::HTTP_CREATED);
    }

    public function getAllNews()
    : JsonResponse{
        return response()->json(News::all());
    }   

    public function getNews($id)
    : JsonResponse{
        return response()->json(News::find($id));
    }
    
    public function deleteNews($id){
        News::findOrFail($id)->delete();
        return response("Deleted Succesfully", Response::HTTP_OK);
    }

    public function updateNews($id, Request $request)
    : JsonResponse {

        $news = News::findOrFail($id);
        $news->update($request->all());

        return response()->json($news, Response::HTTP_OK);
    }

}