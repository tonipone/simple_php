<?php

use App\User;
use App\Address;
use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'do'],function()
{


        Route::get('/{action}/{name?}',[
            'uses' => 'NiceActionController@getNiceAction',
            'as' => 'niceaction'
        ]);

        Route::post('/',[
           'uses' => 'NiceActionController@postNiceAction',
            'as' => 'benice'
        ]);
                                //    Route::get('/greet/{name?}', function ($name=null) {
                                //        return view('actions.greet',['name'=>$name]);
                                //    })->name('greet');

                                //    Route::get('/hug', function () {
                                //        return view('actions.hug');
                                //    })->name('hug');
                                //
                                //    Route::get('/kiss', function () {
                                //        return view('actions.kiss');
                                //    })->name('kiss');

                                //    Route::post('/',function(\Illuminate\Http\Request $request){
                                //
                                //        if(isset($request['action']) && $request['name']){
                                //            if(strlen($request['name']) > 0){
                                //                return view('actions.nice',['action' => $request['action'], 'name' => $request['name']]);
                                //            }
                                //            return redirect()->back();
                                //        }
                                //
                                //        return redirect()->back();
                                //
                                //    })->name('benice');
}); // END Route GROUP ---------------------------------------------------------------------------------------------------------------


                                //Route::get('/insert',function(){
                                //
                                //    $user = User::findOrFail(1);
                                //
                                //    $address = new Address(['name'=>'80100 Napoli ITA CDN isola B6']);
                                //exit()
                                //    $user->address()->save($address);
                                //
                                //});
                                //
                                //Route::get('/update',function(){
                                //
                                //    $address = Address::whereUserId(1)->first();
                                //
                                //    $address->name = 'Update now Address';
                                //
                                //    $address->save();
                                //});

                                //Route::get('/read',function(){
                                //
                                //   $user = User::findOrFail(2);
                                //   echo  $user->address->name;
                                //});
                                //
                                //Route::get('/delete',function(){
                                //
                                //    $user = User::findOrFail(2);
                                //    echo  $user->address()->delete();
                                //});

                                //Route::get('/create',function(){
                                //
                                //    $user = User::findOrFail(2);
                                //
                                //    $post = new Post(['title'=>'Post Number Tree','body'=>'Questo post e il numero TRE PHP']);
                                //    $user->posts()->save($post);
                                //
                                //});
                                //
                                //Route::get('/read',function(){
                                //
                                //   $user = User::findOrFail(1);
                                //   dd($user->posts);
                                //});