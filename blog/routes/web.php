<?php

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

use App\Task;

Route::get('/tasks', function () {

    //$tasks=DB::table('tasks')->get(); //called query builder

    $tasks=Task::all(); //using elonquent

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{id}', function ($id) {

    $task=Task::find($id);
    //$task=DB::table('tasks')->find($id); //called query builder

    return view('tasks.show', compact('task'));
});






/*Route::get('/', function () {

    $name = 'Huw';
    $age = 31;

    return view('welcome',compact('name','age'));
});*/

/*Route::get('/', function () {

    $name = 'Laracasts';

    return view('welcome',['name'=>$name]);
});*/

/*Route::get('/', function () {
    return view('welcome')->with('name', 'World');
});*/

/*Route::get('/', function () {
    return view('welcome', [
        'name'=>'Laracasts'
    ]);
});*/

//The below is called a closure
/*Route::get('/about',function (){
    return view('about');
});*/