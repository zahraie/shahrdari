<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group([],function(){
    Route::get('/','homeController@getHome');
    Route::get('/home','homeController@getHome');

    Route::post('/search','homeController@postSearch');
    Route::get('/management','homeController@getmanagement');

    Route::get('/contact','CommentController@getContact');
    Route::post('/contact/posted','CommentController@postNewContact');
//-----------------------------------------------------------------------------
    Route::post('/comment/submit','CommentController@postSubmitComment');
    Route::post('/comment/delete','CommentController@postDeleteComment');


    Route::post('/comment-submit','CommentController@postNewComment');
    Route::get('/comment','CommentController@getComment');
    Route::get('/comment-submit','CommentController@getnewComment');

    //-------------------------------------------------------
    Route::get('/mayor/history','homeController@getHistory');
    Route::get('/mayor/rule','homeController@getRule');
    Route::get('/mayor/chart','homeController@getChart');
    Route::get('/mayor/welfare','homeController@getWelfare');
    Route::get('/mayor/organization','homeController@getOrganization');
    Route::get('/mayor/documentation','homeController@getDocumentation');
    //-------------------------------------------------------------
    Route::get('/about','homeController@getAbout');
    Route::get('/publicity','homeController@getPublicity');
    Route::get('/guide','homeController@getGuide');
    //-----------------------------------------------------------------
    Route::get('/scope/council','homeController@getCouncil');
    Route::get('/scope/protection','homeController@getProtection');
    Route::get('/scope/law','homeController@getLaw');
    Route::get('/scope/inspect','homeController@getInspect');
    Route::get('/scope/communication','homeController@getCommunication');
    //---------------------------------------------------------------
    Route::get('/panel','UserController@getPrivilege');
    Route::get('/panel/new-manager','UserController@getNewManager');
    Route::post('/panel/new-manager','UserController@postNewManager');
    Route::get('/panel/new-cat','CatController@getNewCat');
    Route::post('/panel/new-cat','CatController@postNewCat');
    Route::get('/panel/new-subcat','CatController@getNewSubcat');
    Route::post('/panel/new-subcat','CatController@postNewSubcat');
    Route::get('/panel/new-product','ProductController@getNewProduct');
    Route::post('/panel/new-product/posted','ProductController@postNewProduct');
    Route::get('/panel/manager-added',function(){
        return view('manager-added');
    });

    //--------------------------------------
    Route::get('/product/{id}','ProductController@getProduct');
    Route::get('/cat/{id}','CatController@getCat');
    Route::get('/subcat/{id}','CatController@getSubcat');
    Route::post('/product/new-comment','ProductController@postNewComment');
    Route::get('/panel/comment','CommentController@getComment');
    Route::get('/panel/cat','CatController@getCats');
    Route::get('/panel/subcat','CatController@getSubcats');
    Route::get('/panel/product','ProductController@getProducts');
    Route::get('/panel/code','ProductController@getCodes');
    Route::post('/panel/codes','ProductController@postAddCodes');
    Route::get('/panel/cat/{id}','CatController@getEditCat');
    Route::post('/panel/cat/{id}','CatController@postEditCat');
    Route::get('/panel/subcat/{id}','CatController@getEditSubcat');
    Route::post('/panel/subcat/{id}','CatController@postEditSubcat');
    Route::get('/panel/product/{id}','ProductController@getEditProduct');
    Route::post('/panel/product/{id}','ProductController@postEditProduct');
    Route::get('/panel/order','CommentController@getOrder');
    Route::post('/panel/comment/submit','CommentController@postSubmitComment');
    Route::post('/panel/order/submit','CommentController@postSubmitOrder');
    Route::post('/panel/comment/delete','CommentController@postDeleteComment');
    Route::post('/panel/cat/delete','CatController@postDeleteCat');
    Route::post('/panel/subcat/delete','CatController@postDeleteSubcat');
    Route::post('/panel/product/delete','ProductController@postDeleteProduct');
    Route::post('/product/add-basket','ProductController@postAddBasket');
    Route::post('/address','ProductController@postAddress');
    Route::post('/buy','ProductController@postBuy');
});
//--------------------------------------------------------
Route::group([],function(){
    Route::get('/login',function(){
        if(Auth::user() !=null)
        {
            return redirect(url('/panel'));
        }
        return view('auth.sign-in');

    });
    Route::post('/login','Auth\LoginController@login');
    Route::get('/register',function(){
        if(Auth::user() != null)
        {
            return redirect(url('/panel'));
        }
        return view('auth.sign-up');

    });
    Route::post('/register','Auth\RegisterController@postRegister');
    Route::get('/register-done',function(){
        return view('auth.sign-up-done');
    });
    Route::get('logout','Auth\LoginController@logout');
});