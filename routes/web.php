<?php
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [
        'uses'=>'PostController@getAdminIndex',
        'as'=>'admin.index'
    ]);
    Route::get('create', [
        'uses'=>'PostController@getAdminCreate',
        'as'=>'admin.create'
    ]);
    Route::post('create', [
        'uses'=>'PostController@postAdminCreate',
        'as'=>'admin.create'
    ]);
    Route::post('edit', [
        'uses'=>'PostController@getAdminUpdate',
        'as'=>'admin.update'
    ]);
});

Route::get('/',[
    'uses'=>'PostController@getIndex',
    'as'=>'blog.index'
]);
Route::get('post/{id}',[
    'uses'=>'PostController@getPost',
    'as'=>'blog.post'
]);


/*
Route::get('/', function () {
    return view('blog.index');
});
Route::get('/post/{id}',function($id){
    return view('blog.post',['id'=>$id]);
})->name('post_id');
Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');
    Route::get('/edit',function(){
        return view('admin.edit');
    })->name('admin.edit');
    Route::get('/create',function(){
        return view('admin.create');
    })->name('admin.create');
});
Route::get('/about',function(){
    return view('others.about');
})->name('about');
Route::post('/create',function(Request $req,Factory $validator){
    $validation = $validator->make($req->all(),[
        'title'=>'required|min:5',
        'content'=>'required|min:10'
    ]);
    if($validation->fails()){
        return redirect()->back()->withErrors($validation);
    }
    return redirect()
        ->route('admin.index')
        ->with('info','Post created, Title: ' . $req->input('title'));
})->name('admin.create');

Route::post('/edit',function(Request $req,Factory $validator){
    $validation = $validator->make($req->all(),[
        'title'=>'required|min:5',
        'content'=>'required|min:10'
    ]);
    if($validation->fails()){
        return redirect()->back()->withErrors($validation);
    }
    return redirect()
        ->route('admin.index')
        ->with('info','Post edited, new Title: ' . $req->input('title'));
})->name('admin.update');
*/