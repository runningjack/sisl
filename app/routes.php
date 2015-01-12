<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('pages/home');
});*/

Route::get('/', 'HomeController@index');
Route::get('pages/home', 'HomeController@index');
Route::get('pages/{permalink}',array('as'=>'pages','uses'=>'HomeController@getPages'));
Route::get('posts/{permalink}',array('as'=>'pages','uses'=>'HomeController@getPages'));
//Route::get('pages/{permalink}',array('as'=>'pages','uses'=>'HomeController@getPages'));
Route::get('accounts/individual',array('as'=>'individual','uses'=>'AccountController@getIndividual'));
Route::post('accounts/individual',array('as'=>'individualp','uses'=>'AccountController@postIndividual'));
Route::get('accounts/corporate',array('as'=>'corporate','uses'=>'AccountController@getCorporate'));
Route::get('accounts/joint',array('as'=>'corporate','uses'=>'AccountController@getJoint'));
Route::post('/', array('as'=>"symbols","uses"=>'HomeController@getSymbol'));
Route::get("downloads/index",array("as"=>"symbols","uses"=>"HomeController@getDownload"));


//Route::get('/login', array('as'=>'login','uses' => 'HomeController@showLogin'));

/*
  |--------------------------------------------------------------------------
  | Backend Routes
  |--------------------------------------------------------------------------
 */

/*, 'before' => array('auth', 'auth.backend', 'auth.permissions', 'auth.pw_6_months')*/
Route::group(array('prefix' => 'backend'), function() {
    Route::any('/', 'Backend\HomeController@getIndex');
    Route::get('dashboard/index', array("as"=>"dashboard", "uses"=>'Backend\HomeController@getIndex'));
    Route::get('pages/index',array("as"=>"pageslisting",'uses'=>'Backend\HomeController@getPagesList'));
    Route::get('pages/addnew/{type?}',array('as'=>'addnewpage','uses'=>'Backend\HomeController@getAddPage'));
    Route::get('categories/index',array('as'=>'listcat','uses'=>'Backend\HomeController@getCategoriesIndex'));
    Route::post('categories/addnew',array('as'=>'addnew','uses'=>'Backend\HomeController@PostCategory'));
    Route::post('pages/addnew/{type?}',array('as'=>'adnewpage','uses'=>'Backend\HomeController@postAddPage'));

    Route::get('pages/editpage/{id}',array('as'=>'editpage','uses'=>'Backend\HomeController@getEditPage'));
    Route::post('pages/editpage/{id}',array('as'=>'editpage','uses'=>'Backend\HomeController@postEditPage'));
    Route::get('posts/index',array("as"=>"postslisting",'uses'=>'Backend\HomeController@getPostsList'));
    Route::get('posts/addnew', array('as'=>'addnewpost','uses'=>'Backend\HomeController@getAddPost'));
    Route::post('posts/addnew/{type?}', array('as'=>'adnewpost','uses'=>'Backend\HomeController@postAddPage'));
    Route::get('post/editpost/{id}',array('as'=>'editpost','uses'=>'Backend\HomeController@getEditPost'));
    Route::post('post/editpost/{id}',array('as'=>'editpostp','uses'=>'Backend\HomeController@postEditPage'));
    Route::get("menu/index",array("as"=>"menuhome","uses"=>"Backend\HomeController@getMenuHome"));
    Route::post("menu/index",array("as"=>"index","uses"=>'Backend\HomeController@postMenuHome'));

    Route::get("sliders/index",array("as"=>"slidehome","uses"=>"Backend\HomeController@getSlideHome"));
    Route::post("sliders/index/{type?}",array("as"=>"slidehome2","uses"=>"Backend\HomeController@postSlideHome"));

    Route::get("stock/index",array("as"=>"stockupload","uses"=>"Backend\HomeController@getStockIndex"));
    Route::get("stock/listing/{id?}",array("as"=>"stocklist","uses"=>"Backend\HomeController@getStockList"));
    Route::post("stock/index",array("as"=>"stockupload","uses"=>"Backend\HomeController@postStockIndex"));

    Route::get("documents/index",array("as"=>"documentlink","uses"=>"Backend\HomeController@getDocumentIndex"));
    Route::get("documents/category",array("as"=>"documentlinkcat","uses"=>"Backend\HomeController@getDocumentCategory"));
    Route::post("documents/index",array("as"=>"documentpost","uses"=>"Backend\HomeController@postDocumentIndex"));

    Route::get("sliders/manageimages", array("as"=>'mimage', "uses"=>"Backend\HomeController@getSlideImages"));
    Route::post("sliders/manageimages/{type?}",array("as"=>'eimage',"uses"=>"Backend\HomeController@postSlideImages"));

    Route::get("administrators/index", array("as"=>'userlist',"uses"=>"Backend\UserController@getUserIndex"));
    Route::get("administrators/addnew", array("as"=>'useradd',"uses"=>"Backend\UserController@getAddUser"));
    Route::get("administrators/edituser/{id?}", array("as"=>'useredit',"uses"=>"Backend\UserController@getEditUser"));
    Route::post("administrators/edituser/{id?}", array("as"=>'useredit',"uses"=>"Backend\UserController@postEditUser"));
    Route::post("administrators/addnew", array("as"=>'useradd',"uses"=>"Backend\UserController@postAddUser"));
    Route::get("pageblocks/index",array("as"=>"pgblock","uses"=>"Backend\HomeController@getPageBlockIndex"));
    Route::get("pageblocks/addnew",array("as"=>"pgblockaddn","uses"=>"Backend\HomeController@getAddPageBlock"));
    Route::post("pageblocks/addnew/{id?}",array("as"=>"postpgblockadd","uses"=>"Backend\HomeController@postAddPageBlock"));
    Route::get("pageblocks/editpage/{id?}",array("as"=>"editpgblock","uses"=>"Backend\HomeController@getEditPageBlock"));
    Route::post("pageblocks/editpage/{id?}",array("as"=>"postpgblockedit","uses"=>"Backend\HomeController@postAddPageBlock"));

    Route::get("researches/corporateaction",array("as"=>"corpaction", "uses"=>"Backend\HomeController@getCorporateAction"));
    Route::post("researches/corporateaction",array("as"=>"corpactionp", "uses"=>"Backend\HomeController@postCorporateAction"));

});


//Route::get('backend/login', 'AuthController@getLogin');
Route::get('login/{target?}',array("as"=>"login","uses"=>'AuthController@getLogin'));
//Route::post('login', 'AuthController@postLogin');
Route::post('login/{target?}', 'AuthController@postLogin');
Route::get('logout', array("as"=>"logout","uses"=>'AuthController@getLogout'));
Route::post('forgot_password', 'AuthController@postForgotPassword');
Route::get('reset_password/{id}/{token}/{target?}', 'AuthController@getResetPassword');
Route::post('reset_password', 'AuthController@postResetPassword');
Route::get('research/pricelist',array("as"=>"sfd","uses"=>"HomeController@getPriceList"));
Route::get('research/marketsummary',array("as"=>"mktsmr","uses"=>"HomeController@getMarketSummary"));
Route::get('research/marketsnapshot',array("as"=>"sfd","uses"=>"HomeController@getMarketSnapShot"));
Route::get('research/corporateAction',array("as"=>"sfd","uses"=>"HomeController@getCorporateAction"));
Route::get('research/markettoday',array("as"=>"sfd","uses"=>"HomeController@getMarketToday"));
Route::get('research/stockrecommendations',array("as"=>"sfd","uses"=>"HomeController@getStockRecommendations"));
Route::get('research/companiesresults',array("as"=>"sfd","uses"=>"HomeController@getCompaniesResults"));


