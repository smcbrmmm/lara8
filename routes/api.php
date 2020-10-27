<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->middleware(['auth:api'])->group(function () {
    Route::apiResource('posts', PostsController::class);
});

Route::get('posts/search/{title}',[PostsController::class,'search']);

Route::get('/name', function () {
    return ["name" => "Samut Chouybumrung" ,
        "id" => "6110402851"];
});

//Route::post('/posts', function (Request $request) {
//    $post = new \App\Models\Post;
//    $post->title = $request->input('title');
//    $post->content = $request->input('content');
//    $post->user_id = 1;
//    $post->save();
//    return $post;
//});
//
//Route::put('/posts', function () {
//    return [
//        'title' => 'You requested by put method'
//    ];
//});
