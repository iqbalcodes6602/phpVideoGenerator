<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User_video;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/demo/{name}', function ($name) {
//     echo $name;
// });
Route::get('/data', function() {
  $user_video = User_video::all();
  echo "<pre>";
  print_r($user_video->toArray());
});

Route::post('/videos', function (Request $request) {

  $client = new Creatomate\Client('4256a94a396345b2b46a5c56f69e13b9a55121a8ace744978007cc0f44bc13c4b734310ef12d1857a9e8f3e3d629bff3');
  try {
    $renders = $client->render([
      'template_id' => '93a2c851-8f8a-49f6-88a1-f5c12c70d358',
      'modifications' => [
        'Text-1' => request('firstLine'),
        'Text-2' => request('secondLine'),
        'Video' => request('language'),
        'Image' => request('imgLink'),
        'Name' => request('fullName'),
      ],
    ]);
    $json = json_encode($renders, JSON_UNESCAPED_SLASHES);

    $data = json_decode($json);
    $url = $data[0]->url;

    $user_video = new User_video();
    $user_video->profile_pic = request('imgLink');
    $user_video->full_name = request('fullName');
    $user_video->text_1 = request('firstLine');
    $user_video->text_2 = request('secondLine');
    $user_video->language = request('language');
    $user_video->save();

    return view('download', ['url' => $url]);
  } catch (Exception $ex) {
    echo 'Error: ' . $ex->getMessage();
  }
});
