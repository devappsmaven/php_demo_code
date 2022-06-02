<?php

use App\Category;
use App\SubCategory;
use App\ClipartCategory;
use App\FontCategory;
use App\Clipart;
use App\ClipartSubCategory;
use App\ClipartCategoryEmbroidery;
use App\ClipartEmbroidery;
use App\ClipartSubCategoryEmbroidery;
use App\TemplateCategoryEmbroidery;
use App\TemplateSubCategoryEmbroidery;
use App\TemplateEmbroidery;
use App\Font;
use App\Tag;
use App\User;
use App\Post;
use App\Theme;
use Illuminate\Support\Facades\Auth;
use App\Page;
use App\Order;
use App\Gallery;
use App\Product;
use App\Brand;
use App\Media;
use App\Color;
use App\Design;
use App\DesignSide;
use App\ThemePageComponent;
use Illuminate\Http\Request;
use App\Side;
use App\Size;
use App\OrderDetail;
use App\Component;
use App\Store;
//use Intervention\Image;
use Caffeinated\Shinobi\Models\Permission;
use App\Configuration;
use Illuminate\Support\Facades\Cache;
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

Route::get('/katie/test01', function () {

    return view('katie.page01');
});
// Route::get('/shopping-cart',function(){
//     return view("cart");
// });

Route::get('/shopping-cart',function(){

    $page = Page::where('slug', 'index')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $popularproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->get()->take(8);
        $newproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(8);
        $bestsellerproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'asc')->get()->take(8);
        $specialofferproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('price', 'asc')->get()->take(8);
        $newproduct = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->first();
        $featuredproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->latest()->get()->take(8);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $maincategories = Category::where('type','=','Product')->where('status','=','Enable')->get()/*->take(8)*/;
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $product = Product::where('parent_id','<>',null)->where('default', '=', 1)->firstOrFail();
        $parent = Product::where('id',$product->parent_id)->first();
        $product->parent = $parent;
        $childproducts = Product::where('parent_id',$parent->id)->get();
        $productlists = Product::where('parent_id','=',NUll)->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $theme = Theme::where('active', '=', 1)->first();
        return view('/layouts/default/shopping-cart')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'popularproducts' => $popularproducts ,
                                    'newproducts' => $newproducts ,
                                    'bestsellerproducts' => $bestsellerproducts ,
                                    'specialofferproducts' => $specialofferproducts ,
                                    'maincategories' => $maincategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'tags' => $tags,
                                    'brands' => $brands,
                                    'featuredproducts' => $featuredproducts,
                                    'productlists' => $productlists,
                                    'newproduct' => $newproduct,
                                    'product' => $product,
                                    'childproducts' => $childproducts]);
    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }

    //return view("/layouts/default/shopping-cart");
})->name('shopping-cart-new');


Route::get('/designstudiotest2', function ( ) {
        $clipartcategories = ClipartCategory::get()->where('status','Enable');
        $templatecategories = DB::table('categories')->where([['status','=','Enable'],['type','=','Template']])->orderBy('name', 'asc')->get();
        $inkcolors = Color::get()->where('status','=','Enable')->where('type','=','ink');
        $fontcategories = FontCategory::get()->where('status','=','Enable');
        $fonts = Font::get()->where('status','=','Enable');
        $categories = Category::get()->where('status','Enable')->where('type','Product')->whereIn('id',[1,4,10]);
        $subcategories = SubCategory::get()->where('status','Enable');
    return view('designstudiotest2',compact(/*'product',*/'clipartcategories','templatecategories','templatedesign','email','inkcolors', 'fontcategories','fonts','categories','subcategories'));
})->name('designstudiotest2');

Auth::routes();
//free access`


Route::get('/admin', function () {
    return redirect('admin/login');
});

Route::get('/home', function () {
    return redirect('index');
})->middleware('auth.lock');

Route::get('/index', function () {


    $page = Page::where('slug', 'index')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $popularproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->get()->take(8);
        $newproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(8);
        $bestsellerproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'asc')->get()->take(8);
        $specialofferproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('price', 'asc')->get()->take(8);
        $newproduct = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->first();
        $featuredproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->latest()->get()->take(8);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $maincategories = Category::where('type','=','Product')->where('status','=','Enable')->get()/*->take(8)*/;
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $product = Product::where('parent_id','<>',null)->where('default', '=', 1)->firstOrFail();
        $parent = Product::where('id',$product->parent_id)->first();
        $product->parent = $parent;
        $childproducts = Product::where('parent_id',$parent->id)->get();
        $productlists = Product::where('parent_id','=',NUll)->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $theme = Theme::where('active', '=', 1)->first();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'popularproducts' => $popularproducts ,
                                    'newproducts' => $newproducts ,
                                    'bestsellerproducts' => $bestsellerproducts ,
                                    'specialofferproducts' => $specialofferproducts ,
                                    'maincategories' => $maincategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'tags' => $tags,
                                    'brands' => $brands,
                                    'featuredproducts' => $featuredproducts,
                                    'productlists' => $productlists,
                                    'newproduct' => $newproduct,
                                    'product' => $product,
                                    'childproducts' => $childproducts]);
    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
})->middleware('auth.lock');


Route::get('/401', function () {
    $page = Page::where('slug', '401')->where('status', 'Enable')->where('published', 1)->first();
    $theme = Theme::where('active', '=', 1)->first();
    $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
    $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
    return view('page')->with(['page'=>$page,
                            'theme' => $theme,
                             'productcategories' => $productcategories,
                             'templatecategories' => $templatecategories]);
})->name('401');

Route::get('/403', function () {
    $page = Page::where('slug', '403')->where('status', 'Enable')->where('published', 1)->first();
    $theme = Theme::where('active', '=', 1)->first();
    $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
    $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
    return view('page')->with(['page'=>$page,
                                'theme' => $theme,
                                'productcategories' => $productcategories,
                                'templatecategories' => $templatecategories]);
})->name('403');

Route::get('/404', function () {
    $page = Page::where('slug', '404')->where('status', 'Enable')->where('published', 1)->first();
    $theme = Theme::where('active', '=', 1)->first();
    $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
    $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
    return view('page')->with(['page'=>$page,
                                'theme' => $theme,
                                'productcategories' => $productcategories,
                                'templatecategories' => $templatecategories]);
})->name('404');

Route::get('/500', function () {
    $page = Page::where('slug', '500')->where('status', 'Enable')->where('published', 1)->first();
    $theme = Theme::where('active', '=', 1)->first();
    $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
    $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
    return view('page')->with(['page'=>$page,
                                'theme' => $theme,
                                'productcategories' => $productcategories,
                                'templatecategories' => $templatecategories]);
})->name('500');

Route::get('/store/{owner}', function () {

    return view('store');
});

//free admin
Route::get('/admin/errors/401', function () {
    return view('errors.401');
})->name('errors.401');

Route::get('/admin/errors/403', function () {
    return view('errors.403');
})->name('errors.403');

Route::get('/admin/errors/404', function () {
    return view('errors.404');
})->name('errors.404');

Route::get('/admin/errors/500', function () {
    return view('errors.500');
})->name('errors.500');


Route::get('/preview/subas/index', function () {
    return view('preview.subas.index');
})->name('preview.subas.index');

Route::get('/preview/eshopper/index', function () {
    return view('preview.eshopper.index');
})->name('preview.eshopper.index');

Route::get('slide', function ()
{
    return view('slide');
});

Route::post('/products-filter','ProductController@filter')->name('products.filter');
Route::post('/products-filter-studio','ProductController@filterstudio')->name('products.filterstudio');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('login/locked', 'Auth\LoginController@locked')->middleware('auth')->name('login.locked');
//Route::post('login/locked', 'Auth\LoginController@unlock')->name('login.unlock');


//restrict access for customers
//Route::get('/myaccount', 'HomeController@myaccount')->name('myaccount');

//restrict access for admin
Route::middleware(['auth'/*,'admin.lock'*/])->group(function(){

    //Roles
    Route::resource('roles', 'RoleController');
    Route::post('admin/roles/store','RoleController@store')->name('roles.store')->middleware('permission:roles.create');//ok
    Route::get('admin/roles','RoleController@index')->name('roles.index')->middleware('permission:roles.index');//ok
    Route::get('admin/roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');//ok
    Route::put('admin/roles/{role}','RoleController@update')->name('roles.update')->middleware('permission:roles.edit');//ok
    Route::get('admin/roles/{role}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');
    Route::delete('admin/roles/{role}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');
    Route::get('admin/roles/{role}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

    //Users
    //Route::post('admin/users/store','Admin\RegisterController@create')->name('users.store')->middleware('permission:users.create');//ok
    Route::post('admin/users/store','UserController@store')->name('users.store')->middleware('permission:users.create');//ok
    Route::get('admin/users','UserController@index')->name('users.index')->middleware('permission:users.index');//ok
    Route::get('admin/users/create','UserController@create')->name('users.create')->middleware('permission:users.create');//ok
    Route::put('admin/users/{user}','UserController@update')->name('users.update')->middleware('permission:users.edit');//ok
    Route::get('admin/users/{user}','UserController@show')->name('users.show')->middleware('permission:users.show');
    Route::delete('admin/users/{user}','UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');
    Route::get('admin/users/{user}/edit','UserController@edit')->name('users.edit')->middleware('permission:users.edit');
    Route::get('admin/users/reset','UserController@reset')->name('users.reset')->middleware('permission:users.reset');


    //Route::get('admin/associates/create','UserController@associates')->name('associates.create')->middleware('permission:associates.create');//ok
    Route::post('admin/associates/store','AssociateController@store')->name('associates.store')->middleware('permission:associates.create');//ok
    Route::get('admin/associates','AssociateController@index')->name('associates.index')->middleware('permission:associates.index');//ok
    Route::get('admin/associates/create','AssociateController@create')->name('associates.create')->middleware('permission:associates.create');//ok
    Route::put('admin/associates/{associate}','AssociateController@update')->name('associates.update')->middleware('permission:associates.edit');//ok
    Route::get('admin/associates/{associate}','AssociateController@show')->name('associates.show')->middleware('permission:associates.show');
    Route::delete('admin/associates/{associate}','AssociateController@destroy')->name('associates.destroy')->middleware('permission:associates.destroy');
    Route::get('admin/associates/{associate}/edit','AssociateController@edit')->name('associates.edit')->middleware('permission:associates.edit');
    Route::post('admin/associates/resetpassword','AssociateController@resetpassword')->name('associates.resetpassword')->middleware('permission:associates.resetpassword');//ok

    //ShirtColor
    Route::post('admin/shirtcolors/store','ShirtColorController@store')->name('shirtcolors.store')->middleware('permission:shirtcolors.create');
    Route::get('admin/shirtcolors','ShirtColorController@index')->name('shirtcolors.index')->middleware('permission:shirtcolors.index');
    Route::get('admin/shirtcolors/create','ShirtColorController@create')->name('shirtcolors.create')->middleware('permission:shirtcolors.create');
    Route::put('admin/shirtcolors/{shirtcolor}','ShirtColorController@update')->name('shirtcolors.update')->middleware('permission:shirtcolors.edit');
    Route::get('admin/shirtcolors/{shirtcolor}','ShirtColorController@show')->name('shirtcolors.show')->middleware('permission:shirtcolors.show');
    Route::delete('admin/shirtcolors/{shirtcolor}','ShirtColorController@destroy')->name('shirtcolors.destroy')->middleware('permission:shirtcolors.destroy');
    Route::get('admin/shirtcolors/{shirtcolor}/edit','ShirtColorController@edit')->name('shirtcolors.edit')->middleware('permission:shirtcolors.edit');
    Route::post('admin/shirtcolors/asignedfamily','ShirtColorController@asignedfamily')->name('shirtcolors.asignedfamily')->middleware('permission:shirtcolors.asignedfamily');

    //Route::get('admin/shirtcolor/trash', 'ShirtColorController@trash')->name('shirtcolor.trash')->middleware('permission:shirtcolor.trash');
    //Route::get('admin/shirtColor/{id}/restore', 'ShirtColorController@restore')->name('shirtcolor.restore')->middleware('permission:shirtcolor.restore');

    //InkColor
    Route::post('admin/inkcolors/store','InkColorController@store')->name('inkcolors.store')->middleware('permission:inkcolors.create');
    Route::get('admin/inkcolors','InkColorController@index')->name('inkcolors.index')->middleware('permission:inkcolors.index');
    Route::get('admin/inkcolors/create','InkColorController@create')->name('inkcolors.create')->middleware('permission:inkcolors.create');
    Route::put('admin/inkcolors/{inkcolor}','InkColorController@update')->name('inkcolors.update')->middleware('permission:inkcolors.edit');
    Route::get('admin/inkcolors/{inkcolor}','InkColorController@show')->name('inkcolors.show')->middleware('permission:inkcolors.show');
    Route::delete('admin/inkcolors/{inkcolor}','InkColorController@destroy')->name('inkcolors.destroy')->middleware('permission:inkcolors.destroy');
    Route::get('admin/inkcolors/{inkcolor}/edit','InkColorController@edit')->name('inkcolors.edit')->middleware('permission:inkcolors.edit');

    //Records
    Route::get('admin/records','RecordController@index')->name('records.index')->middleware('permission:records.index');//ok
    Route::delete('admin/records/{record}','RecordController@destroy')->name('records.destroy')->middleware('permission:records.destroy');
    Route::get('admin/records/{record}','RecordController@show')->name('records.show')->middleware('permission:records.show');

    //NewsLetters
    Route::get('admin/shownewsletters','NewsletterController@shownewsletters')->name('admin.shownewsletters')->middleware('permission:admin.shownewsletters');//ok
    Route::post('admin/sendnewslettersemail','NewsletterController@sendnewslettersemail')->name('admin.sendnewslettersemail')->middleware('permission:admin.sendnewslettersemail');//ok
    Route::get('admin/newslettershistory','NewsletterController@history')->name('admin.newslettershistory')->middleware('permission:admin.newslettershistory');//ok

    //Category
    Route::post('admin/categories/store','CategoryController@store')->name('categories.store')->middleware('permission:categories.create');
    Route::get('admin/categories','CategoryController@index')->name('categories.index')->middleware('permission:categories.index');
    Route::get('admin/categories/create','CategoryController@create')->name('categories.create')->middleware('permission:categories.create');
    Route::put('admin/categories/{category}','CategoryController@update')->name('categories.update')->middleware('permission:categories.edit');
    Route::get('admin/categories/{category}','CategoryController@show')->name('categories.show')->middleware('permission:categories.show');
    Route::delete('admin/categories/{category}','CategoryController@destroy')->name('categories.destroy')->middleware('permission:categories.destroy');
    Route::get('admin/categories/{category}/edit','CategoryController@edit')->name('categories.edit')->middleware('permission:categories.edit');

    //SubCategory
    Route::post('admin/subcategories/store','SubCategoryController@store')->name('subcategories.store')->middleware('permission:subcategories.create');
    Route::get('admin/subcategories','SubCategoryController@index')->name('subcategories.index')->middleware('permission:subcategories.index');
    Route::get('admin/subcategories/create','SubCategoryController@create')->name('subcategories.create')->middleware('permission:subcategories.create');
    Route::put('admin/subcategories/{subcategory}','SubCategoryController@update')->name('subcategories.update')->middleware('permission:subcategories.edit');
    Route::get('admin/subcategories/{subcategory}','SubCategoryController@show')->name('subcategories.show')->middleware('permission:subcategories.show');
    Route::delete('admin/subcategories/{subcategory}','SubCategoryController@destroy')->name('subcategories.destroy')->middleware('permission:subcategories.destroy');
    Route::get('admin/subcategories/{subcategory}/edit','SubCategoryController@edit')->name('subcategories.edit')->middleware('permission:subcategories.edit');

    //Size
    Route::post('admin/sizes/store','SizesController@store')->name('sizes.store')->middleware('permission:sizes.create');
    Route::get('admin/sizes','SizesController@index')->name('sizes.index')->middleware('permission:sizes.index');
    Route::get('admin/sizes/create','SizesController@create')->name('sizes.create')->middleware('permission:sizes.create');
    Route::put('admin/sizes/{size}','SizesController@update')->name('sizes.update')->middleware('permission:sizes.edit');
    Route::get('admin/sizes/{size}','SizesController@show')->name('sizes.show')->middleware('permission:sizes.show');
    Route::delete('admin/sizes/{size}','SizesController@destroy')->name('sizes.destroy')->middleware('permission:sizes.destroy');
    Route::get('admin/sizes/{size}/edit','SizesController@edit')->name('sizes.edit')->middleware('permission:sizes.edit');

    //FontCategory
    Route::post('admin/fontscategories/store','FontCategoryController@store')->name('fontscategories.store')->middleware('permission:fontscategories.create');
    Route::get('admin/fontscategories','FontCategoryController@index')->name('fontscategories.index')->middleware('permission:fontscategories.index');
    Route::get('admin/fontscategories/create','FontCategoryController@create')->name('fontscategories.create')->middleware('permission:fontscategories.create');
    Route::put('admin/fontscategories/{fontcategory}','FontCategoryController@update')->name('fontscategories.update')->middleware('permission:fontscategories.edit');
    Route::get('admin/fontscategories/{fontcategory}','FontCategoryController@show')->name('fontscategories.show')->middleware('permission:fontscategories.show');
    Route::delete('admin/fontscategories/{fontcategory}','FontCategoryController@destroy')->name('fontscategories.destroy')->middleware('permission:fontscategories.destroy');
    Route::get('admin/fontscategories/{fontcategory}/edit','FontCategoryController@edit')->name('fontscategories.edit')->middleware('permission:fontscategories.edit');

    //Fonts
    Route::post('admin/fonts/store','FontController@store')->name('fonts.store')->middleware('permission:fonts.create');
    Route::get('admin/fonts','FontController@index')->name('fonts.index')->middleware('permission:fonts.index');
    Route::get('admin/fonts/create','FontController@create')->name('fonts.create')->middleware('permission:fonts.create');
    Route::put('admin/fonts/{font}','FontController@update')->name('fonts.update')->middleware('permission:fonts.edit');
    Route::get('admin/fonts/{font}','FontController@show')->name('fonts.show')->middleware('permission:fonts.show');
    Route::delete('admin/fonts/{font}','FontController@destroy')->name('fonts.destroy')->middleware('permission:fonts.destroy');
    Route::get('admin/fonts/{font}/edit','FontController@edit')->name('fonts.edit')->middleware('permission:fonts.edit');

     //Reserved Word
     Route::post('admin/reservedwords/store','ReservedWordController@store')->name('reservedwords.store')->middleware('permission:reservedwords.create');
     Route::get('admin/reservedwords','ReservedWordController@index')->name('reservedwords.index')->middleware('permission:reservedwords.index');
     Route::get('admin/reservedwords/create','ReservedWordController@create')->name('reservedwords.create')->middleware('permission:reservedwords.create');
     Route::put('admin/reservedwords/{reservedword}','ReservedWordController@update')->name('reservedwords.update')->middleware('permission:reservedwords.edit');
     Route::get('admin/reservedwords/{reservedword}','ReservedWordController@show')->name('reservedwords.show')->middleware('permission:reservedwords.show');
     Route::delete('admin/reservedwords/{reservedword}','ReservedWordController@destroy')->name('reservedwords.destroy')->middleware('permission:reservedwords.destroy');
     Route::get('admin/reservedwords/{reservedword}/edit','ReservedWordController@edit')->name('reservedwords.edit')->middleware('permission:reservedwords.edit');

     //Promo Code
     Route::post('admin/promocodes/store','PromoCodeController@store')->name('promocodes.store')->middleware('permission:promocodes.create');
     Route::get('admin/promocodes','PromoCodeController@index')->name('promocodes.index')->middleware('permission:promocodes.index');
     Route::get('admin/promocodes/create','PromoCodeController@create')->name('promocodes.create')->middleware('permission:promocodes.create');
     Route::put('admin/promocodes/{promocode}','PromoCodeController@update')->name('promocodes.update')->middleware('permission:promocodes.edit');
     Route::get('admin/promocodes/{promocode}','PromoCodeController@show')->name('promocodes.show')->middleware('permission:promocodes.show');
     Route::delete('admin/promocodes/{promocode}','PromoCodeController@destroy')->name('promocodes.destroy')->middleware('permission:promocodes.destroy');
     Route::get('admin/promocodes/{promocode}/edit','PromoCodeController@edit')->name('promocodes.edit')->middleware('permission:promocodes.edit');



     //Brand
     Route::post('admin/brands/store','BrandController@store')->name('brands.store')->middleware('permission:brands.create');
     Route::get('admin/brands','BrandController@index')->name('brands.index')->middleware('permission:brands.index');
     Route::get('admin/brands/create','BrandController@create')->name('brands.create')->middleware('permission:brands.create');
     Route::put('admin/brands/{brand}','BrandController@update')->name('brands.update')->middleware('permission:brands.edit');
     Route::get('admin/brands/{brand}','BrandController@show')->name('brands.show')->middleware('permission:brands.show');
     Route::delete('admin/brands/{brand}','BrandController@destroy')->name('brands.destroy')->middleware('permission:brands.destroy');
     Route::get('admin/brands/{brand}/edit','BrandController@edit')->name('brands.edit')->middleware('permission:brands.edit');

     //Product
     Route::post('admin/products/store','ProductController@store')->name('products.store')->middleware('permission:products.create');
     Route::get('admin/products','ProductController@index')->name('products.index')->middleware('permission:products.index');
     Route::get('admin/products/create','ProductController@create')->name('products.create')->middleware('permission:products.create');
     Route::put('admin/products/{product}','ProductController@update')->name('products.update')->middleware('permission:products.edit');
     Route::get('admin/products/{product}','ProductController@show')->name('products.show')->middleware('permission:products.show');
     Route::delete('admin/products/{product}','ProductController@destroy')->name('products.destroy')->middleware('permission:products.destroy');
     Route::get('admin/products/{product}/edit','ProductController@edit')->name('products.edit')->middleware('permission:products.edit');
     Route::post('admin/products/favorite/{product}','ProductController@favorite')->name('products.favorite');
     Route::post('admin/products/default/{product}','ProductController@default')->name('products.default')->middleware('permission:products.default');
     Route::post('admin/products/defaultembroidery/{product}','ProductController@defaultembroidery')->name('products.defaultembroidery')->middleware('permission:products.defaultembroidery');



     //ChildProduct
     Route::post('admin/childproducts/store','ChildProductController@store')->name('childproducts.store')->middleware('permission:childproducts.create');
     Route::get('admin/childproducts/index/{parentproduct}','ChildProductController@index')->name('childproducts.index')->middleware('permission:childproducts.index');
     Route::get('admin/childproducts/create/{parentproduct}','ChildProductController@create')->name('childproducts.create')->middleware('permission:childproducts.create');
     Route::put('admin/childproducts/{childproduct}','ChildProductController@update')->name('childproducts.update')->middleware('permission:childproducts.edit');
     Route::get('admin/childproducts/{childproduct}','ChildProductController@show')->name('childproducts.show')->middleware('permission:childproducts.show');
     Route::delete('admin/childproducts/{childproduct}','ChildProductController@destroy')->name('childproducts.destroy')->middleware('permission:childproducts.destroy');
     Route::get('admin/childproducts/{childproduct}/edit','ChildProductController@edit')->name('childproducts.edit')->middleware('permission:childproducts.edit');
     Route::post('admin/childproducts/default/{childproduct}','ChildProductController@default')->name('childproducts.default')->middleware('permission:childproducts.default');
     Route::post('admin/childproducts/ispersonalize/{childproduct}','ChildProductController@ispersonalize')->name('childproducts.ispersonalize')->middleware('permission:childproducts.ispersonalize');
     Route::post('admin/childproducts/isembroidery/{childproduct}','ChildProductController@isembroidery')->name('childproducts.isembroidery')->middleware('permission:childproducts.isembroidery');
     Route::post('admin/childproducts/isexpedited/{childproduct}','ChildProductController@isexpedited')->name('childproducts.isexpedited')->middleware('permission:childproducts.isexpedited');

     //Charts
     Route::get('admin/charts','AdminController@charts')->name('admin.charts')->middleware('permission:admin.charts');//ok
     Route::get('admin/dashboard','AdminController@dashboard')->name('admin.dashboard')->middleware('permission:admin.dashboard');//ok
     Route::get('admin/dashboard2','AdminController@dashboard2')->name('admin.dashboard2')->middleware('permission:admin.dashboard2');//ok

     Route::post('admin/changepassword','AdminController@changepassword')->name('admin.changepassword')->middleware('permission:admin.changepassword');//ok
     Route::get('admin/profile','AdminController@showprofile')->name('admin.profile')->middleware('permission:admin.profile');//ok
     Route::post('admin/profile','AdminController@updateprofile')->name('admin.profile')->middleware('permission:admin.profile');//ok

     //AditionalImage
     Route::post('admin/aditionalimage/store','AditionalImageController@store')->name('aditionalimage.store')->middleware('permission:aditionalimages.create');
     Route::get('admin/aditionalimage','AditionalImageController@index')->name('aditionalimage.index')->middleware('permission:aditionalimages.index');
     Route::get('admin/aditionalimage/create','AditionalImageController@create')->name('aditionalimage.create')->middleware('permission:aditionalimages.create');
     Route::put('admin/aditionalimage/{aditionalimage}','AditionalImageController@update')->name('aditionalimage.update')->middleware('permission:aditionalimages.edit');
     Route::get('admin/aditionalimage/{aditionalimage}','AditionalImageController@show')->name('aditionalimage.show')->middleware('permission:aditionalimages.show');
     Route::delete('admin/aditionalimage/{aditionalimage}','AditionalImageController@destroy')->name('aditionalimage.destroy')->middleware('permission:aditionalimages.destroy');
     Route::get('admin/aditionalimage/{aditionalimage}/edit','AditionalImageController@edit')->name('aditionalimage.edit')->middleware('permission:aditionalimages.edit');

     //PriceTable
     Route::post('admin/priceshirttable/store', 'PriceShirtTableController@store')->name('priceshirttable.store')->middleware('permission:priceshirttable.create');
     Route::get('admin/priceshirttable', 'PriceShirtTableController@index')->name('priceshirttable.index')->middleware('permission:priceshirttable.index');
     Route::get('admin/priceshirttable/create', 'PriceShirtTableController@create')->name('priceshirttable.create')->middleware('permission:priceshirttable.create');
     Route::put('admin/priceshirttable', 'PriceShirtTableController@update')->name('priceshirttable.update')->middleware('permission:priceshirttable.update');
     Route::get('admin/priceshirttabletmp/{priceshirttabletmp}', 'PriceShirtTableController@show')->name('priceshirttable.show')->middleware('permission:priceshirttable.show');
     //Route::delete('admin/priceshirttable/{priceshirttable}', 'PriceShirtTableController@destroy')->name('priceshirttable.destroy')->middleware('permission:priceshirttable.destroy');
     Route::get('admin/priceshirttable/edit', 'PriceShirtTableController@edit')->name('priceshirttable.edit')->middleware('permission:priceshirttable.edit');
     Route::post('admin/priceshirttable/generate', 'PriceShirtTableController@generate')->name('priceshirttable.generate')->middleware('permission:priceshirttable.generate');

     Route::post('admin/pricediscounttable/store', 'PriceDiscountTableController@store')->name('pricediscounttable.store')->middleware('permission:pricediscounttable.create');
     Route::get('admin/pricediscounttable', 'PriceDiscountTableController@index')->name('pricediscounttable.index')->middleware('permission:pricediscounttable.index');
     Route::get('admin/pricediscounttable/edit', 'PriceDiscountTableController@edit')->name('pricediscounttable.edit')->middleware('permission:pricediscounttable.edit');

     //PriceTableEmbroidery
     Route::post('admin/priceshirttableembroidery/store', 'PriceShirtTableEmbroideryController@store')->name('priceshirttableembroidery.store')->middleware('permission:priceshirttableembroidery.create');
     Route::get('admin/priceshirttableembroidery', 'PriceShirtTableEmbroideryController@index')->name('priceshirttableembroidery.index')->middleware('permission:priceshirttableembroidery.index');
     Route::get('admin/priceshirttableembroidery/create', 'PriceShirtTableEmbroideryController@create')->name('priceshirttableembroidery.create')->middleware('permission:priceshirttableembroidery.create');
     Route::put('admin/priceshirttableembroidery', 'PriceShirtTableEmbroideryController@update')->name('priceshirttableembroidery.update')->middleware('permission:priceshirttableembroidery.update');
     Route::get('admin/priceshirttableembroiderytmp/{priceshirttableembroiderytmp}', 'PriceShirtTableEmbroideryController@show')->name('priceshirttableembroidery.show')->middleware('permission:priceshirttableembroidery.show');
     //Route::delete('admin/priceshirttableembroidery/{priceshirttableembroidery}', 'PriceShirtTableEmbroideryController@destroy')->name('priceshirttableembroidery.destroy')->middleware('permission:priceshirttableembroidery.destroy');
     Route::get('admin/priceshirttableembroidery/edit', 'PriceShirtTableEmbroideryController@edit')->name('priceshirttableembroidery.edit')->middleware('permission:priceshirttableembroidery.edit');
     Route::post('admin/priceshirttableembroidery/generate', 'PriceShirtTableEmbroideryController@generate')->name('priceshirttableembroidery.generate')->middleware('permission:priceshirttableembroidery.generate');

     Route::post('admin/pricediscounttableembroidery/store', 'PriceDiscountTableEmbroideryController@store')->name('pricediscounttableembroidery.store')->middleware('permission:pricediscounttableembroidery.create');
     Route::get('admin/pricediscounttableembroidery', 'PriceDiscountTableEmbroideryController@index')->name('pricediscounttableembroidery.index')->middleware('permission:pricediscounttableembroidery.index');
     Route::get('admin/pricediscounttableembroidery/edit', 'PriceDiscountTableEmbroideryController@edit')->name('pricediscounttableembroidery.edit')->middleware('permission:pricediscounttableembroidery.edit');



     Route::post('admin/pricepersonalizetable/store', 'PricePersonalizeTableController@store')->name('pricepersonalizetable.store')->middleware('permission:pricepersonalizetable.create');
     Route::get('admin/pricepersonalizetable', 'PricePersonalizeTableController@index')->name('pricepersonalizetable.index')->middleware('permission:pricepersonalizetable.index');
     Route::get('admin/pricepersonalizetable/edit', 'PricePersonalizeTableController@edit')->name('pricepersonalizetable.edit')->middleware('permission:pricepersonalizetable.edit');

     //Cliparts Category
     Route::post('admin/clipartcategories/store','ClipartCategoryController@store')->name('clipartcategories.store')->middleware('permission:clipartcategories.create');
     Route::get('admin/clipartcategories','ClipartCategoryController@index')->name('clipartcategories.index')->middleware('permission:clipartcategories.index');
     Route::get('admin/clipartcategories/create','ClipartCategoryController@create')->name('clipartcategories.create')->middleware('permission:clipartcategories.create');
     Route::put('admin/clipartcategories/{clipartcategory}','ClipartCategoryController@update')->name('clipartcategories.update')->middleware('permission:clipartcategories.edit');
     Route::get('admin/clipartcategories/{clipartcategory}','ClipartCategoryController@show')->name('clipartcategories.show')->middleware('permission:clipartcategories.show');
     Route::delete('admin/clipartcategories/{clipartcategory}','ClipartCategoryController@destroy')->name('clipartcategories.destroy')->middleware('permission:clipartcategories.destroy');
     Route::get('admin/clipartcategories/{clipartcategory}/edit','ClipartCategoryController@edit')->name('clipartcategories.edit')->middleware('permission:clipartcategories.edit');

     //Cliparts SubCategory
     Route::post('admin/clipartsubcategories/store','ClipartSubCategoryController@store')->name('clipartsubcategories.create')->middleware('permission:clipartsubcategories.create');
     Route::get('admin/clipartsubcategories/index/{clipartcategory}','ClipartSubCategoryController@index')->name('clipartsubcategories.index')->middleware('permission:clipartsubcategories.index');
     Route::get('admin/clipartsubcategories/create','ClipartSubCategoryController@create')->name('clipartsubcategories.create')->middleware('permission:clipartsubcategories.create');
     Route::put('admin/clipartsubcategories/{clipartsubcategory}','ClipartSubCategoryController@update')->name('clipartsubcategories.update')->middleware('permission:clipartsubcategories.edit');
     Route::get('admin/clipartsubcategories/{clipartsubcategory}','ClipartSubCategoryController@show')->name('clipartsubcategories.show')->middleware('permission:clipartsubcategories.show');
     Route::delete('admin/clipartsubcategories/{clipartsubcategory}','ClipartSubCategoryController@destroy')->name('clipartsubcategories.destroy')->middleware('permission:clipartsubcategories.destroy');
     Route::get('admin/clipartsubcategories/{clipartsubcategory}/edit','ClipartSubCategoryController@edit')->name('clipartsubcategories.edit')->middleware('permission:clipartsubcategories.edit');

     //Cliparts
     Route::post('admin/cliparts/store','ClipartController@store')->name('cliparts.store')->middleware('permission:cliparts.create');
     Route::get('admin/cliparts/index/{clipartcategory}/{clipartsubcategory}','ClipartController@index')->name('cliparts.index')->middleware('permission:cliparts.index');
     Route::get('admin/cliparts/create','ClipartController@create')->name('cliparts.create')->middleware('permission:cliparts.create');
     Route::put('admin/cliparts/{clipart}','ClipartController@update')->name('cliparts.update')->middleware('permission:cliparts.edit');
     Route::get('admin/cliparts/{clipart}','ClipartController@show')->name('cliparts.show')->middleware('permission:cliparts.show');
     Route::delete('admin/cliparts/{clipart}','ClipartController@destroy')->name('cliparts.destroy')->middleware('permission:cliparts.destroy');
     Route::get('admin/cliparts/{clipart}/edit','ClipartController@edit')->name('cliparts.edit')->middleware('permission:cliparts.edit');

     Route::post('admin/cliparts/copymove','ClipartController@copymove')->name('cliparts.copymove')->middleware('permission:cliparts.copymove');
     Route::post('admin/cliparts/addclipart','ClipartController@addclipart')->name('cliparts.addclipart')->middleware('permission:cliparts.addclipart');
     Route::post('admin/cliparts/removeall','ClipartController@removeall')->name('cliparts.removeall')->middleware('permission:cliparts.removeall');

     //Route::get('admin/appearance/theme','AppearanceController@theme')->name('appearance.theme')->middleware('permission:appearance.theme');
    //Theme
     Route::post('admin/themes/store','ThemeController@store')->name('themes.store')->middleware('permission:themes.create');
     Route::get('admin/themes/','ThemeController@index')->name('themes.index')->middleware('permission:themes.index');
     Route::get('admin/themes/create','ThemeController@create')->name('themes.create')->middleware('permission:themes.create');
     Route::put('admin/themes/{theme}','ThemeController@update')->name('themes.update')->middleware('permission:themes.edit');
     Route::get('admin/themes/{theme}','ThemeController@show')->name('themes.show')->middleware('permission:themes.show');
     Route::delete('admin/themes/{theme}','ThemeController@destroy')->name('themes.destroy')->middleware('permission:themes.destroy');
     Route::get('admin/themes/{theme}/edit','ThemeController@edit')->name('themes.edit')->middleware('permission:themes.edit');
     Route::post('admin/themes/activate/{theme}','ThemeController@activate')->name('themes.activate')->middleware('permission:themes.activate');
     Route::post('admin/themes/activatethemecomponent','ThemeController@activatethemecomponent')->name('themes.activatethemecomponent')->middleware('permission:themes.activatethemecomponent');
     Route::post('admin/themes/setcolor/{theme}','ThemeController@setcolor')->name('themes.setcolor')->middleware('permission:themes.setcolor');
     Route::post('admin/themes/setfavicon/{theme}','ThemeController@setFavIcon')->name('themes.setfavicon')->middleware('permission:themes.setbackground');
     Route::post('admin/themes/setbackground/{theme}','ThemeController@setbackground')->name('themes.setbackground')->middleware('permission:themes.setbackground');
     Route::post('admin/themes/unsetbackground/{theme}','ThemeController@unsetbackground')->name('themes.unsetbackground')->middleware('permission:themes.unsetbackground');

    //Design
     Route::post('admin/designs/store','DesignController@store')->name('designs.store')->middleware('permission:designs.create');
     Route::get('admin/designs/','DesignController@index')->name('designs.index')->middleware('permission:designs.index');
     Route::get('admin/designs/create','DesignController@create')->name('designs.create')->middleware('permission:designs.create');
     Route::put('admin/designs/{design}','DesignController@update')->name('designs.update')->middleware('permission:designs.edit');
     Route::get('admin/designs/{design}','DesignController@show')->name('designs.show')->middleware('permission:designs.show');
     Route::delete('admin/designs/{design}','DesignController@destroy')->name('designs.destroy')->middleware('permission:designs.destroy');
     Route::get('admin/designs/{design}/edit','DesignController@edit')->name('designs.edit')->middleware('permission:designs.edit');
     Route::post('admin/designs/deleteall','DesignController@deleteall')->name('designs.deleteall')->middleware('permission:designs.deleteall');
     Route::get('admin/designs/downloadall/{design}','DesignController@downloadall')->name('designs.downloadall')->middleware('permission:designs.downloadall');

     //Template
     //Route::post('admin/templates/store','TemplateController@store')->name('templates.store')->middleware('permission:templates.create');
     Route::get('admin/templates/','TemplateController@index')->name('templates.index')->middleware('permission:templates.index');
     //Route::get('admin/templates/create','TemplateController@create')->name('templates.create')->middleware('permission:templates.create');
     Route::put('admin/templates/{template}','TemplateController@update')->name('templates.update')->middleware('permission:templates.edit');
     Route::get('admin/templates/{template}','TemplateController@show')->name('templates.show')->middleware('permission:templates.show');
     Route::delete('admin/templates/{template}','TemplateController@destroy')->name('templates.destroy')->middleware('permission:templates.destroy');
     Route::get('admin/templates/{template}/edit','TemplateController@edit')->name('templates.edit')->middleware('permission:templates.edit');
     Route::get('admin/pending/templates','TemplateController@pending')->name('templates.pending')->middleware('permission:templates.pending');
     Route::get('admin/addcategories/templates','TemplateController@categories')->name('templates.categories')->middleware('permission:templates.categories');
     Route::get('admin/createcategories/templates','TemplateController@createcategories')->name('templates.createcategories')->middleware('permission:templates.createcategories');
     Route::get('admin/templates/showcategories/{category}','TemplateController@showcategories')->name('templates.showcategories')->middleware('permission:templates.showcategories');
     Route::get('admin/templates/editcategories/{category}/edit','TemplateController@editcategories')->name('templates.editcategories')->middleware('permission:templates.editcategories');
     Route::post('admin/templates/storecategories','TemplateController@storecategories')->name('templates.storecategories')->middleware('permission:templates.storecategories');
     Route::put('admin/templates/updatecategories/{category}','TemplateController@updatecategories')->name('templates.updatecategories')->middleware('permission:templates.updatecategories');
     Route::delete('admin/templates/destroycategories/{category}','TemplateController@destroycategories')->name('templates.destroycategories')->middleware('permission:templates.destroycategories');

     Route::get('admin/addsubcategories/templates','TemplateController@subcategories')->name('templates.subcategories')->middleware('permission:templates.subcategories');
     Route::get('admin/createsubcategories/templates','TemplateController@createsubcategories')->name('templates.createsubcategories')->middleware('permission:templates.createsubcategories');
     Route::get('admin/templates/showsubcategories/{subcategory}','TemplateController@showsubcategories')->name('templates.showsubcategories')->middleware('permission:templates.showsubcategories');
     Route::get('admin/templates/editsubcategories/{subcategory}/edit','TemplateController@editsubcategories')->name('templates.editsubcategories')->middleware('permission:templates.editsubcategories');
     Route::post('admin/templates/storesubcategories','TemplateController@storesubcategories')->name('templates.storesubcategories')->middleware('permission:templates.storesubcategories');
     Route::put('admin/templates/updatesubcategories/{subcategory}','TemplateController@updatesubcategories')->name('templates.updatesubcategories')->middleware('permission:templates.updatesubcategories');
     Route::delete('admin/templates/destroysubcategories/{subcategory}','TemplateController@destroysubcategories')->name('templates.destroysubcategories')->middleware('permission:templates.destroysubcategories');

     Route::post('admin/templates/approve/{template}','TemplateController@approve')->name('templates.approve')->middleware('permission:templates.approve');
     Route::post('admin/templates/reject/{template}','TemplateController@reject')->name('templates.reject')->middleware('permission:templates.reject');
     Route::post('admin/templates/setdefult','TemplateController@setdefult')->name('templates.setdefult')->middleware('permission:templates.setdefult');
     Route::post('admin/templates/setbackground','TemplateController@setbackground')->name('templates.setbackground')->middleware('permission:templates.setbackground');
     Route::post('admin/templates/deleteall','TemplateController@deleteall')->name('templates.deleteall')->middleware('permission:templates.deleteall');
     Route::get('admin/templates/downloadall/{template}','TemplateController@downloadall')->name('templates.downloadall')->middleware('permission:templates.downloadall');
     Route::post('admin/templates/approveall','TemplateController@approveall')->name('templates.approveall')->middleware('permission:templates.approveall');
     Route::post('admin/templates/rejectall','TemplateController@rejectall')->name('templates.rejectall')->middleware('permission:templates.rejectall');

     //Store Design
     Route::post('admin/storedesign/store','StoreDesignsController@store')->name('storedesign.store')->middleware('permission:storedesign.create');
     Route::get('admin/storedesign/','StoreDesignsController@index')->name('storedesign.index')->middleware('permission:storedesign.index');
     Route::get('admin/storedesign/create','StoreDesignsController@create')->name('storedesign.create')->middleware('permission:storedesign.create');
     Route::put('admin/storedesign/{storedesign}','StoreDesignsController@update')->name('storedesign.update')->middleware('permission:storedesign.edit');
     Route::get('admin/storedesign/{storedesign}','StoreDesignsController@show')->name('storedesign.show')->middleware('permission:storedesign.show');
     Route::delete('admin/storedesign/{storedesign}','StoreDesignsController@destroy')->name('storedesign.destroy')->middleware('permission:storedesign.destroy');
     Route::get('admin/storedesign/{storedesign}/edit','StoreDesignsController@edit')->name('storedesign.edit')->middleware('permission:storedesign.edit');


     //Open Cart
    Route::get('admin/opencart','OpenCartController@showopencart')->name('admin.showopencart')->middleware('permission:admin.showopencart');
    Route::get('admin/opencartsended','OpenCartController@showopencartsended')->name('admin.showopencartsended')->middleware('permission:admin.showopencartsended');
    Route::post('admin/sendopencartemail','OpenCartController@sendopencartemail')->name('admin.sendopencartemail')->middleware('permission:admin.sendopencartemail');
    Route::get('admin/opencarthistory','OpenCartController@history')->name('admin.opencarthistory')->middleware('permission:admin.opencarthistory');
    
    //Orders
    //Route::post('admin/orders/store','OrderController@store')->name('orders.store')->middleware('permission:orders.create');
    Route::get('admin/orders/','OrderController@index')->name('orders.index')->middleware('permission:orders.index');
    //Route::get('admin/orders/create','OrderController@create')->name('orders.create')->middleware('permission:orders.create');
    Route::put('admin/orders/{order}','OrderController@update')->name('orders.update')->middleware('permission:orders.edit');
    Route::get('admin/orders/{order}','OrderController@show')->name('orders.show')->middleware('permission:orders.show');
    //Route::delete('admin/orders/{theme}','OrderController@destroy')->name('orders.destroy')->middleware('permission:orders.destroy');
    Route::get('admin/orders/{order}/edit','OrderController@edit')->name('orders.edit')->middleware('permission:orders.edit');
    Route::get('admin/pdf/orders/generate','OrderController@generatelist')->name('orders.generatelist')->middleware('permission:orders.generatelist');
    Route::get('admin/pdf/orders/download','OrderController@downloadlist')->name('orders.downloadlist')->middleware('permission:orders.downloadlist');

    Route::get('admin/ordersheet/{order}','OrderController@ordersheet')->name('orders.ordersheet')->middleware('permission:orders.ordersheet');
    Route::get('admin/ordersheetpdf/{order}','OrderController@ordersheetpdf')->name('orders.ordersheetpdf')->middleware('permission:orders.ordersheetpdf');
    Route::get('admin/ordersheetprint/{order}','OrderController@ordersheetprint')->name('orders.ordersheetprint')->middleware('permission:orders.ordersheetprint');
    Route::get('admin/pakingslip/{order}','OrderController@pakingslip')->name('orders.pakingslip')->middleware('permission:orders.pakingslip');
    Route::get('admin/pakingslippdf/{order}','OrderController@pakingslippdf')->name('orders.pakingslippdf')->middleware('permission:orders.pakingslippdf');
    Route::get('admin/pakingslipprint/{order}','OrderController@pakingslipprint')->name('orders.pakingslipprint')->middleware('permission:orders.pakingslipprint');
    Route::get('admin/orderdetails/{order}','OrderController@orderdetails')->name('orders.orderdetails')->middleware('permission:orders.orderdetails');
    Route::get('admin/orderdetailspdf/{order}','OrderController@orderdetailspdf')->name('orders.orderdetailspdf')->middleware('permission:orders.orderdetailspdf');
    Route::get('admin/orderdetailsprint/{order}','OrderController@orderdetailsprint')->name('orders.orderdetailsprint')->middleware('permission:orders.orderdetailsprint');
    Route::get('admin/invoice/{order}','OrderController@invoice')->name('orders.invoice')->middleware('permission:orders.invoice');
    Route::get('admin/invoicepdf/{order}','OrderController@invoicepdf')->name('orders.invoicepdf')->middleware('permission:orders.invoicepdf');
    Route::get('admin/invoiceprint/{order}','OrderController@invoiceprint')->name('orders.invoiceprint')->middleware('permission:orders.invoiceprint');
    //Route::get('admin/pdf/order/{order}/generate/','OrderController@generate')->name('orders.generate')->middleware('permission:orders.generate');
    //Route::get('admin/pdf/orders{order}/download/','OrderController@download')->name('orders.download')->middleware('permission:orders.download');

    Route::get('admin/all/orders','OrderController@index')->name('orders.all')->middleware('permission:orders.all');
    Route::get('admin/new/orders','OrderController@new')->name('orders.new')->middleware('permission:orders.new');
    Route::get('admin/screenprinting/orders','OrderController@screenprinting')->name('orders.screenprinting')->middleware('permission:orders.screenprinting');
    Route::get('admin/digitalprinting/orders','OrderController@digitalprinting')->name('orders.digitalprinting')->middleware('permission:orders.digitalprinting');
    Route::get('admin/embroidery/orders','OrderController@embroidery')->name('orders.embroidery')->middleware('permission:orders.embroidery');
    Route::get('admin/canceled/orders','OrderController@canceled')->name('orders.canceled')->middleware('permission:orders.canceled');
    Route::get('admin/refounded/orders','OrderController@refounded')->name('orders.refounded')->middleware('permission:orders.refounded');
    Route::post('admin/orders/asignedall','OrderController@asignedall')->name('orders.asignedall')->middleware('permission:orders.asignedall');
    Route::post('admin/orders/asignedto/{order}','OrderController@asignedto')->name('orders.asignedto')->middleware('permission:orders.asignedto');
    Route::post('admin/orders/cancel/{order}','OrderController@cancel')->name('orders.cancel')->middleware('permission:orders.cancel');
    Route::post('admin/orders/cancelall','OrderController@cancelall')->name('orders.cancelall')->middleware('permission:orders.cancelall');
    Route::post('admin/orders/changestatusall','OrderController@changestatusall')->name('orders.changestatusall')->middleware('permission:orders.changestatusall');
    //Route::post('admin/orders/changestatus','OrderController@changestatus')->name('orders.changestatus')->middleware('permission:orders.changestatus');

    //Tags
     Route::post('admin/tags/store','TagsController@store')->name('tags.store')->middleware('permission:tags.create');
     Route::get('admin/tags/','TagsController@index')->name('tags.index')->middleware('permission:tags.index');
     Route::get('admin/tags/create','TagsController@create')->name('tags.create')->middleware('permission:tags.create');
     Route::put('admin/tags/{tag}','TagsController@update')->name('tags.update')->middleware('permission:tags.edit');
     Route::get('admin/tags/{tag}','TagsController@show')->name('tags.show')->middleware('permission:tags.show');
     Route::delete('admin/tags/{tag}','TagsController@destroy')->name('tags.destroy')->middleware('permission:tags.destroy');
     Route::get('admin/tags/{tag}/edit','TagsController@edit')->name('tags.edit')->middleware('permission:tags.edit');

     //Post
     Route::post('admin/posts/store','PostController@store')->name('posts.store')->middleware('permission:posts.create');
     Route::get('admin/posts/','PostController@index')->name('posts.index')->middleware('permission:posts.index');
     Route::get('admin/posts/create','PostController@create')->name('posts.create')->middleware('permission:posts.create');
     Route::put('admin/posts/{post}','PostController@update')->name('posts.update')->middleware('permission:posts.edit');
     Route::get('admin/posts/{post}','PostController@show')->name('posts.show')->middleware('permission:posts.show');
     Route::delete('admin/posts/{post}','PostController@destroy')->name('posts.destroy')->middleware('permission:posts.destroy');
     Route::get('admin/posts/{post}/edit','PostController@edit')->name('posts.edit')->middleware('permission:posts.edit');
     Route::post('admin/posts/approve/{post}','PostController@approve')->name('posts.approve')->middleware('permission:posts.approve');
     Route::get('admin/addcategories/posts','PostController@categories')->name('posts.categories')->middleware('permission:posts.categories');
     Route::post('admin/posts/savecategories','PostController@addcategories')->name('posts.addcategories')->middleware('permission:posts.addcategories');
     Route::get('admin/addsubcategories/posts','PostController@subcategories')->name('posts.subcategories')->middleware('permission:posts.subcategories');
     Route::post('admin/posts/savesubcategories','PostController@addsubcategories')->name('posts.addsubcategories')->middleware('permission:posts.addsubcategories');
     Route::get('admin/addtags/posts','PostController@tags')->name('posts.tags')->middleware('permission:posts.tags');
     Route::post('admin/posts/savetags','PostController@addtags')->name('posts.addtags')->middleware('permission:posts.addtags');

     //Comments
     Route::post('admin/comments/store','CommentController@store')->name('comments.store')->middleware('permission:comments.create');
     Route::get('admin/comments/','CommentController@index')->name('comments.index')->middleware('permission:comments.index');
     Route::get('admin/comments/create','CommentController@create')->name('comments.create')->middleware('permission:comments.create');
     Route::put('admin/comments/{comment}','CommentController@update')->name('comments.update')->middleware('permission:comments.edit');
     Route::get('admin/comments/{comment}','CommentController@show')->name('comments.show')->middleware('permission:comments.show');
     Route::delete('admin/comments/{comment}','CommentController@destroy')->name('comments.destroy')->middleware('permission:comments.destroy');
     Route::get('admin/comments/{comment}/edit','CommentController@edit')->name('comments.edit')->middleware('permission:comments.edit');

     //Media
     Route::post('admin/medias/store','MediaController@store')->name('medias.store')->middleware('permission:medias.create');
     Route::get('admin/medias/','MediaController@index')->name('medias.index')->middleware('permission:medias.index');
     Route::get('admin/medias/create','MediaController@create')->name('medias.create')->middleware('permission:medias.create');
     Route::put('admin/medias/{media}','MediaController@update')->name('medias.update')->middleware('permission:medias.edit');
     Route::get('admin/medias/{media}','MediaController@show')->name('medias.show')->middleware('permission:medias.show');
     Route::delete('admin/medias/{media}','MediaController@destroy')->name('medias.destroy')->middleware('permission:medias.destroy');
     Route::get('admin/medias/{media}/edit','MediaController@edit')->name('medias.edit')->middleware('permission:medias.edit');

     //Pages
     Route::post('admin/pages/store','PageController@store')->name('pages.store')->middleware('permission:pages.create');
     Route::get('admin/pages/','PageController@index')->name('pages.index')->middleware('permission:pages.index');
     Route::get('admin/pages/create','PageController@create')->name('pages.create')->middleware('permission:pages.create');
     Route::put('admin/pages/{page}','PageController@update')->name('pages.update')->middleware('permission:pages.edit');
     Route::get('admin/pages/{page}','PageController@show')->name('pages.show')->middleware('permission:pages.show');
     Route::delete('admin/pages/{page}','PageController@destroy')->name('pages.destroy')->middleware('permission:pages.destroy');
     Route::get('admin/pages/{page}/edit','PageController@edit')->name('pages.edit')->middleware('permission:pages.edit');
     Route::post('admin/pages/publish/{page}','PageController@publish')->name('pages.publish')->middleware('permission:pages.publish');
     Route::post('admin/pages/unpublish/{page}','PageController@unpublish')->name('pages.unpublish')->middleware('permission:pages.unpublish');

     //Pages
     Route::post('admin/components/store','ComponentController@store')->name('components.store')->middleware('permission:components.create');
     Route::get('admin/components/','ComponentController@index')->name('components.index')->middleware('permission:components.index');
     Route::get('admin/components/create','ComponentController@create')->name('components.create')->middleware('permission:components.create');
     Route::put('admin/components/{component}','ComponentController@update')->name('components.update')->middleware('permission:components.edit');
     Route::get('admin/components/{component}','ComponentController@show')->name('components.show')->middleware('permission:components.show');
     Route::delete('admin/components/{component}','ComponentController@destroy')->name('components.destroy')->middleware('permission:components.destroy');
     Route::get('admin/components/{component}/edit','ComponentController@edit')->name('components.edit')->middleware('permission:components.edit');
     Route::post('admin/components/setactivetopheader','ComponentController@setactivetopheader')->name('components.setactivetopheader')->middleware('permission:components.setactivetopheader');

    Route::get('/preview/{theme}/{slug}', function ($theme,$slug)
    {
        if(true)
        {
            return view('preview.'.$theme.'.'.$slug);
        }
        else
        {
            return redirect()->route('404');
        }
    })->name('component.preview')->middleware('permission:component.preview');

     //Mailable
     Route::post('admin/mailables/store','MailableController@store')->name('mailables.store')->middleware('permission:mailables.create');
     Route::get('admin/mailables/','MailableController@index')->name('mailables.index')->middleware('permission:mailables.index');
     Route::get('admin/mailables/create','MailableController@create')->name('mailables.create')->middleware('permission:mailables.create');
     Route::put('admin/mailables/{mailable}','MailableController@update')->name('mailables.update')->middleware('permission:mailables.edit');
     Route::get('admin/mailables/{mailable}','MailableController@show')->name('mailables.show')->middleware('permission:mailables.show');
     Route::delete('admin/mailables/{mailable}','MailableController@destroy')->name('mailables.destroy')->middleware('permission:mailables.destroy');
     Route::get('admin/mailables/{mailable}/edit','MailableController@edit')->name('mailables.edit')->middleware('permission:mailables.edit');
     Route::get('admin/mailables/preview/{mailable}','MailableController@preview')->name('mailables.preview')->middleware('permission:mailables.preview');

      //Post
      Route::post('admin/gallerys/store','GalleryController@store')->name('gallerys.store')->middleware('permission:gallerys.create');
      Route::get('admin/gallerys/','GalleryController@index')->name('gallerys.index')->middleware('permission:gallerys.index');
      Route::get('admin/gallerys/create','GalleryController@create')->name('gallerys.create')->middleware('permission:gallerys.create');
      Route::put('admin/gallerys/{gallery}','GalleryController@update')->name('gallerys.update')->middleware('permission:gallerys.edit');
      Route::get('admin/gallerys/{gallery}','GalleryController@show')->name('gallerys.show')->middleware('permission:gallerys.show');
      Route::delete('admin/gallerys/{gallery}','GalleryController@destroy')->name('gallerys.destroy')->middleware('permission:gallerys.destroy');
      Route::get('admin/gallerys/{gallery}/edit','GalleryController@edit')->name('gallerys.edit')->middleware('permission:gallerys.edit');
      Route::post('admin/gallerys/approve/{gallery}','GalleryController@approve')->name('gallerys.approve')->middleware('permission:gallerys.approve');
      Route::post('admin/gallerys/favorite/{gallery}','GalleryController@favorite')->name('gallerys.favorite');
      Route::get('admin/addcategories/gallerys','GalleryController@categories')->name('gallerys.categories')->middleware('permission:gallerys.categories');
      Route::post('admin/gallerys/savecategories','GalleryController@addcategories')->name('gallerys.addcategories')->middleware('permission:gallerys.addcategories');
      Route::get('admin/addsubcategories/gallerys','GalleryController@subcategories')->name('gallerys.subcategories')->middleware('permission:gallerys.subcategories');
      Route::post('admin/gallerys/savesubcategories','GalleryController@addsubcategories')->name('gallerys.addsubcategories')->middleware('permission:gallerys.addsubcategories');
      Route::get('admin/addtags/gallerys','GalleryController@tags')->name('gallerys.tags')->middleware('permission:gallerys.tags');
      Route::post('admin/gallerys/savetags','GalleryController@addtags')->name('gallerys.addtags')->middleware('permission:gallerys.addtags');


      //Route::post('admin/configurations/store','ConfigurationController@store')->name('configurations.store')->middleware('permission:configurations.create');
      //Route::get('admin/configurations/','ConfigurationController@index')->name('configurations.index')->middleware('permission:configurations.index');
      //Route::get('admin/configurations/create','ConfigurationController@create')->name('configurations.create')->middleware('permission:configurations.create');
      Route::put('admin/configurations/{configuration}','ConfigurationController@update')->name('configurations.update')->middleware('permission:configurations.edit');
      //Route::get('admin/configurations/{configuration}','ConfigurationController@show')->name('configurations.show')->middleware('permission:configurations.show');
      //Route::delete('admin/configurations/{configuration}','ConfigurationController@destroy')->name('configurations.destroy')->middleware('permission:configurations.destroy');
      Route::get('admin/configurations/{configuration}/edit','ConfigurationController@edit')->name('configurations.edit')->middleware('permission:configurations.edit');
      Route::post('admin/configurations/updatelogo','ConfigurationController@updatelogo')->name('configurations.updatelogo')->middleware('permission:configurations.updatelogo');


      Route::post('admin/banners/store','BannerController@store')->name('banners.store')->middleware('permission:banners.create');
      Route::get('admin/banners/','BannerController@index')->name('banners.index')->middleware('permission:banners.index');
      Route::get('admin/banners/create','BannerController@create')->name('banners.create')->middleware('permission:banners.create');
      Route::put('admin/banners/{banner}','BannerController@update')->name('banners.update')->middleware('permission:banners.edit');
      Route::get('admin/banners/{banner}','BannerController@show')->name('banners.show')->middleware('permission:banners.show');
      Route::delete('admin/banners/{banner}','BannerController@destroy')->name('banners.destroy')->middleware('permission:banners.destroy');
      Route::get('admin/banners/{banner}/edit','BannerController@edit')->name('banners.edit')->middleware('permission:banners.edit');
      Route::get('admin/banners/preview/{banner}','BannerController@preview')->name('banners.preview')->middleware('permission:banners.preview');


    //Route::post('admin/stores/store','StoreController@store')->name('stores.store')->middleware('permission:stores.create');
    Route::get('admin/stores/','StoreController@index')->name('stores.index')->middleware('permission:stores.index');
    //Route::get('admin/stores/create','StoreController@create')->name('stores.create')->middleware('permission:stores.create');
    //Route::put('admin/stores/{store}','StoreController@update')->name('stores.update')->middleware('permission:stores.edit');
    //Route::get('admin/stores/{store}','StoreController@show')->name('stores.show')->middleware('permission:stores.show');
    //Route::delete('admin/stores/{store}','StoreController@destroy')->name('stores.destroy')->middleware('permission:stores.destroy');
    //Route::get('admin/stores/{store}/edit','StoreController@edit')->name('stores.edit')->middleware('permission:stores.edit');
    //Route::get('admin/stores/preview/{store}','StoreController@preview')->name('stores.preview')->middleware('permission:stores.preview');
    Route::get('admin/designers/stores','StoreController@designers')->name('stores.designers')->middleware('permission:stores.designers');
    Route::get('admin/designer/storedetail/{designer}','StoreController@storedetail')->name('designer.storedetail')->middleware('permission:designer.storedetail');
    Route::post('admin/designer/savetablesold/{store}','StoreController@savetablesold')->name('designer.savetablesold')->middleware('permission:designer.savetablesold');
    Route::get('admin/addcategories/stores','StoreController@categories')->name('stores.categories')->middleware('permission:stores.categories');
    Route::post('admin/stores/savecategories','StoreController@addcategories')->name('stores.addcategories')->middleware('permission:stores.addcategories');
    Route::get('admin/addsubcategories/stores','StoreController@subcategories')->name('stores.subcategories')->middleware('permission:stores.subcategories');
    Route::post('admin/stores/savesubcategories','StoreController@addsubcategories')->name('stores.addsubcategories')->middleware('permission:stores.addsubcategories');
    Route::get('admin/addtags/stores','StoreController@tags')->name('stores.tags')->middleware('permission:stores.tags');
    Route::post('admin/stores/savetags','StoreController@addtags')->name('stores.addtags')->middleware('permission:stores.addtags');
    Route::post('admin/stores/approve/{store}','StoreController@approve')->name('stores.approve')->middleware('permission:stores.approve');
    Route::post('admin/stores/disapprove/{store}','StoreController@disapprove')->name('stores.disapprove')->middleware('permission:stores.disapprove');

    Route::post('admin/sides/store','SideController@store')->name('sides.store')->middleware('permission:sides.create');
     Route::get('admin/sides/','SideController@index')->name('sides.index')->middleware('permission:sides.index');
     Route::get('admin/sides/create','SideController@create')->name('sides.create')->middleware('permission:sides.create');
     Route::put('admin/sides/{side}','SideController@update')->name('sides.update')->middleware('permission:sides.edit');
     Route::get('admin/sides/{side}','SideController@show')->name('sides.show')->middleware('permission:sides.show');
     Route::delete('admin/sides/{side}','SideController@destroy')->name('sides.destroy')->middleware('permission:sides.destroy');
     Route::get('admin/sides/{side}/edit','SideController@edit')->name('sides.edit')->middleware('permission:sides.edit');

     //Brand
     Route::post('admin/colorfamily/store','ColorFamilyController@store')->name('colorfamily.store')->middleware('permission:colorfamily.create');
     Route::get('admin/colorfamily','ColorFamilyController@index')->name('colorfamily.index')->middleware('permission:colorfamily.index');
     Route::get('admin/colorfamily/create','ColorFamilyController@create')->name('colorfamily.create')->middleware('permission:colorfamily.create');
     Route::put('admin/colorfamily/{brand}','ColorFamilyController@update')->name('colorfamily.update')->middleware('permission:colorfamily.edit');
     Route::get('admin/colorfamily/{brand}','ColorFamilyController@show')->name('colorfamily.show')->middleware('permission:colorfamily.show');
     Route::delete('admin/colorfamily/{brand}','ColorFamilyController@destroy')->name('colorfamily.destroy')->middleware('permission:colorfamily.destroy');
     Route::get('admin/colorfamily/{brand}/edit','ColorFamilyController@edit')->name('colorfamily.edit')->middleware('permission:colorfamily.edit');


     //Cliparts Category Embroidery
     Route::post('admin/clipartcategoriesembroidery/store','ClipartCategoryEmbroideryController@store')->name('clipartcategoriesembroidery.store')->middleware('permission:clipartcategoriesembroidery.store');
     Route::get('admin/clipartcategoriesembroidery','ClipartCategoryEmbroideryController@index')->name('clipartcategoriesembroidery.index')->middleware('permission:clipartcategoriesembroidery.index');
     Route::get('admin/clipartcategoriesembroidery/create','ClipartCategoryEmbroideryController@create')->name('clipartcategoriesembroidery.create')->middleware('permission:clipartcategoriesembroidery.create');
     Route::put('admin/clipartcategoriesembroidery/{clipartcategoryembroidery}','ClipartCategoryEmbroideryController@update')->name('clipartcategoriesembroidery.update')->middleware('permission:clipartcategoriesembroidery.edit');
     Route::get('admin/clipartcategoriesembroidery/{clipartcategoryembroidery}','ClipartCategoryEmbroideryController@show')->name('clipartcategoriesembroidery.show')->middleware('permission:clipartcategoriesembroidery.show');
     Route::delete('admin/clipartcategoriesembroidery/{clipartcategoryembroidery}','ClipartCategoryEmbroideryController@destroy')->name('clipartcategoriesembroidery.destroy')->middleware('permission:clipartcategoriesembroidery.destroy');
     Route::get('admin/clipartcategoriesembroidery/{clipartcategoryembroidery}/edit','ClipartCategoryEmbroideryController@edit')->name('clipartcategoriesembroidery.edit')->middleware('permission:clipartcategoriesembroidery.edit');

     //Cliparts SubCategory
     Route::post('admin/clipartsubcategoriesembroidery/store','ClipartSubCategoryEmbroideryController@store')->name('clipartsubcategoriesembroidery.store')->middleware('permission:clipartsubcategoriesembroidery.store');
     Route::get('admin/clipartsubcategoriesembroidery/index/{clipartcategoryembroidery}','ClipartSubCategoryEmbroideryController@index')->name('clipartsubcategoriesembroidery.index')->middleware('permission:clipartsubcategoriesembroidery.index');
     Route::get('admin/clipartsubcategoriesembroidery/create','ClipartSubCategoryEmbroideryController@create')->name('clipartsubcategoriesembroidery.create')->middleware('permission:clipartsubcategoriesembroidery.create');
     Route::put('admin/clipartsubcategoriesembroidery/{clipartsubcategoryembroidery}','ClipartSubCategoryEmbroideryController@update')->name('clipartsubcategoriesembroidery.update')->middleware('permission:clipartsubcategoriesembroidery.edit');
     Route::get('admin/clipartsubcategoriesembroidery/{clipartsubcategoryembroidery}','ClipartSubCategoryEmbroideryController@show')->name('clipartsubcategoriesembroidery.show')->middleware('permission:clipartsubcategoriesembroidery.show');
     Route::delete('admin/clipartsubcategoriesembroidery/{clipartsubcategoryembroidery}','ClipartSubCategoryEmbroideryController@destroy')->name('clipartsubcategoriesembroidery.destroy')->middleware('permission:clipartsubcategoriesembroidery.destroy');
     Route::get('admin/clipartsubcategoriesembroidery/{clipartsubcategoryembroidery}/edit','ClipartSubCategoryEmbroideryController@edit')->name('clipartsubcategoriesembroidery.edit')->middleware('permission:clipartsubcategoriesembroidery.edit');

     //Cliparts
     Route::post('admin/clipartsembroidery/store','ClipartEmbroideryController@store')->name('clipartsembroidery.store')->middleware('permission:clipartsembroidery.store');
     Route::get('admin/clipartsembroidery/index/{clipartcategoryembroidery}/{clipartsubcategoryembroidery}','ClipartEmbroideryController@index')->name('clipartsembroidery.index')->middleware('permission:clipartsembroidery.index');
     Route::get('admin/clipartsembroidery/create','ClipartEmbroideryController@create')->name('clipartsembroidery.create')->middleware('permission:clipartsembroidery.create');
     Route::put('admin/clipartsembroidery/{clipartembroidery}','ClipartEmbroideryController@update')->name('clipartsembroidery.update')->middleware('permission:clipartsembroidery.edit');
     Route::get('admin/clipartsembroidery/{clipartembroidery}','ClipartEmbroideryController@show')->name('clipartsembroidery.show')->middleware('permission:clipartsembroidery.show');
     Route::delete('admin/clipartsembroidery/{clipartembroidery}','ClipartEmbroideryController@destroy')->name('clipartsembroidery.destroy')->middleware('permission:clipartsembroidery.destroy');
     Route::get('admin/clipartsembroidery/{clipartembroidery}/edit','ClipartEmbroideryController@edit')->name('clipartsembroidery.edit')->middleware('permission:clipartsembroidery.edit');

     Route::post('admin/clipartsembroidery/copymove','ClipartEmbroideryController@copymove')->name('clipartsembroidery.copymove')->middleware('permission:clipartsembroidery.copymove');
     Route::post('admin/clipartsembroidery/addclipart','ClipartEmbroideryController@addclipart')->name('clipartsembroidery.addclipart')->middleware('permission:clipartsembroidery.addclipart');
     Route::post('admin/clipartsembroidery/removeall','ClipartEmbroideryController@removeall')->name('clipartsembroidery.removeall')->middleware('permission:clipartsembroidery.removeall');

     //Templates Category Embroidery
     Route::post('admin/templatecategoriesembroidery/store','TemplateCategoryEmbroideryController@store')->name('templatecategoriesembroidery.store')->middleware('permission:templatecategoriesembroidery.store');
     Route::get('admin/templatecategoriesembroidery','TemplateCategoryEmbroideryController@index')->name('templatecategoriesembroidery.index')->middleware('permission:templatecategoriesembroidery.index');
     Route::get('admin/templatecategoriesembroidery/create','TemplateCategoryEmbroideryController@create')->name('templatecategoriesembroidery.create')->middleware('permission:templatecategoriesembroidery.create');
     Route::put('admin/templatecategoriesembroidery/{templatecategoryembroidery}','TemplateCategoryEmbroideryController@update')->name('templatecategoriesembroidery.update')->middleware('permission:templatecategoriesembroidery.edit');
     Route::get('admin/templatecategoriesembroidery/{templatecategoryembroidery}','TemplateCategoryEmbroideryController@show')->name('templatecategoriesembroidery.show')->middleware('permission:templatecategoriesembroidery.show');
     Route::delete('admin/templatecategoriesembroidery/{templatecategoryembroidery}','TemplateCategoryEmbroideryController@destroy')->name('templatecategoriesembroidery.destroy')->middleware('permission:templatecategoriesembroidery.destroy');
     Route::get('admin/templatecategoriesembroidery/{templatecategoryembroidery}/edit','TemplateCategoryEmbroideryController@edit')->name('templatecategoriesembroidery.edit')->middleware('permission:templatecategoriesembroidery.edit');

     //Templates SubCategory
     Route::post('admin/templatesubcategoriesembroidery/store','TemplateSubCategoryEmbroideryController@store')->name('templatesubcategoriesembroidery.store')->middleware('permission:templatesubcategoriesembroidery.store');
     Route::get('admin/templatesubcategoriesembroidery/index/{templatecategoryembroidery}','TemplateSubCategoryEmbroideryController@index')->name('templatesubcategoriesembroidery.index')->middleware('permission:templatesubcategoriesembroidery.index');
     Route::get('admin/templatesubcategoriesembroidery/create','TemplateSubCategoryEmbroideryController@create')->name('templatesubcategoriesembroidery.create')->middleware('permission:templatesubcategoriesembroidery.create');
     Route::put('admin/templatesubcategoriesembroidery/{templatesubcategoryembroidery}','TemplateSubCategoryEmbroideryController@update')->name('templatesubcategoriesembroidery.update')->middleware('permission:templatesubcategoriesembroidery.edit');
     Route::get('admin/templatesubcategoriesembroidery/{templatesubcategoryembroidery}','TemplateSubCategoryEmbroideryController@show')->name('templatesubcategoriesembroidery.show')->middleware('permission:templatesubcategoriesembroidery.show');
     Route::delete('admin/templatesubcategoriesembroidery/{templatesubcategoryembroidery}','TemplateSubCategoryEmbroideryController@destroy')->name('templatesubcategoriesembroidery.destroy')->middleware('permission:templatesubcategoriesembroidery.destroy');
     Route::get('admin/templatesubcategoriesembroidery/{templatesubcategoryembroidery}/edit','TemplateSubCategoryEmbroideryController@edit')->name('templatesubcategoriesembroidery.edit')->middleware('permission:templatesubcategoriesembroidery.edit');

     //Templates
     Route::post('admin/templateembroidery/store','TemplateEmbroideryController@store')->name('templateembroidery.store')->middleware('permission:templateembroidery.store');
     Route::get('admin/templateembroidery/index/{templatecategoryembroidery}/{templatesubcategoryembroidery}','TemplateEmbroideryController@index')->name('templateembroidery.index')->middleware('permission:templateembroidery.index');
     Route::get('admin/templateembroidery/create','TemplateEmbroideryController@create')->name('templateembroidery.create')->middleware('permission:templateembroidery.create');
     Route::put('admin/templateembroidery/{templateembroidery}','TemplateEmbroideryController@update')->name('templateembroidery.update')->middleware('permission:templateembroidery.edit');
     Route::get('admin/templateembroidery/{templateembroidery}','TemplateEmbroideryController@show')->name('templateembroidery.show')->middleware('permission:templateembroidery.show');
     Route::delete('admin/templateembroidery/{templateembroidery}','TemplateEmbroideryController@destroy')->name('templateembroidery.destroy')->middleware('permission:templateembroidery.destroy');
     Route::get('admin/templateembroidery/{templateembroidery}/edit','TemplateEmbroideryController@edit')->name('templateembroidery.edit')->middleware('permission:templateembroidery.edit');

     Route::post('admin/templateembroidery/copymove','TemplateEmbroideryController@copymove')->name('templateembroidery.copymove')->middleware('permission:templateembroidery.copymove');
     Route::post('admin/templateembroidery/addtemplate','TemplateEmbroideryController@addtemplate')->name('templateembroidery.addtemplate')->middleware('permission:templateembroidery.addtemplate');
     Route::post('admin/templateembroidery/removeall','TemplateEmbroideryController@removeall')->name('templateembroidery.removeall')->middleware('permission:templateembroidery.removeall');


     Route::get('admin/caches','CacheController@index')->name('caches.index')->middleware('permission:caches.index');
     Route::get('admin/configuration/clearcache','ConfigurationController@clearcache')->name('configuration.clearcache')->middleware('permission:configuration.clearcache');
     Route::get('admin/configuration/clearroute','ConfigurationController@clearroute')->name('configuration.clearroute')->middleware('permission:configuration.clearroute');
     Route::get('admin/configuration/clearview','ConfigurationController@clearview')->name('configuration.clearview')->middleware('permission:configuration.clearview');

});


Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/emails/preview/newsletters', function ()
{
    $theme = Theme::where('active', '=', 1)->first();
    return view('emails.preview.newsletters')->with(['theme'=> $theme]);
})->name('emails.preview.newsletters');

Route::get('/emails/preview/opencart', function ()
{
    $theme = Theme::where('active', '=', 1)->first();
    return view('emails.preview.opencart')->with(['theme'=> $theme]);
})->name('emails.preview.opencart');

Route::get('/emails/preview/standar', function ()
{
    $theme = Theme::where('active', '=', 1)->first();
    return view('emails.preview.standar')->with(['theme'=> $theme]);
})->name('emails.preview.standar');

Route::post('admin/posts/favorite/{post}','PostController@favorite')->name('posts.favorite');
Route::post('admin/gallerys/favorite/{gallery}','GalleryController@favorite')->name('gallerys.favorite');
Route::post('admin/comments/sendpostcomment','CommentController@sendpostcomment')->name('comments.sendpostcomment');
Route::post('admin/comments/sendpostreplay/{comment}','CommentController@sendpostreplay')->name('comments.sendpostreplay');
Route::post('admin/comments/sendgallerycomment','CommentController@sendgallerycomment')->name('comments.sendgallerycomment');
Route::post('admin/comments/sendgalleryreplay/{comment}','CommentController@sendgalleryreplay')->name('comments.sendgalleryreplay');
//Route::post('admin/comments/sendproductcomment','CommentController@sendproductcomment')->name('comments.sendproductcomment');
Route::post('admin/comments/sendproductcomment','ProductController@sendproductcomment')->name('comments.sendproductcomment');
Route::post('admin/comments/sendproductreplay/{comment}','CommentController@sendproductreplay')->name('comments.sendproductreplay');

Route::get('subscribers/activate/{token}','SubscriberController@activate')->name('subscribers.activate');
Route::post('subscribers/register','SubscriberController@register')->name('subscribers.register');

//Route::get('store/activate/{token}','SubscriberController@activate')->name('subscribers.activate');
Route::post('stores/register','StoreController@register')->name('stores.register');
Route::post('stores/updateinfo/{store}','StoreController@updateinfo')->name('stores.updateinfo');
Route::post('stores/updatestorename/{store}','StoreController@updatestorename')->name('stores.updatestorename');
Route::post('stores/updatestoreslogan/{store}','StoreController@updatestoreslogan')->name('stores.updatestoreslogan');
Route::post('stores/updatestorebanner/{store}','StoreController@updatestorebanner')->name('stores.updatestorebanner');
Route::get('/my-store', function () {
    $page = Page::where('slug', 'my-store')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $theme = Theme::where('active', '=', 1)->first();
        $store = Store::where('user_id',$user_id)->where('status', 'Approved')->first();
        echo $store->banner;die;
        return view('/layouts/default/my-store')->with(['page'=>$page,'store'=>$store,'theme' => $theme ,]);
    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});
Route::get('/dashboard', function () {
    $page = Page::where('slug', 'dashboard')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $user = Auth::user();

        if(empty($user)){
        	return redirect()->route('404');
        }

        $user_id = $user->id;
        $theme = Theme::where('active', '=', 1)->first();
        $store = Store::where('user_id',$user_id)->where('status', 'Approved')->first();
        return view('/layouts/default/dashboard')->with(['page'=>$page,'store'=>$store,'theme' => $theme ,]);
    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});

Route::get('/all-designs', function () {
    $page = Page::where('slug', 'all-designs')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $user = Auth::user();

        if(empty($user)){
        	return redirect()->route('404');
        }
        
        $user_id = $user->id;

        $all_designs = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('is_purchased','0')->orderBy('id', 'DESC')->get()->toArray();
        $publish_designs = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', 'publish')->where('is_purchased','0')->orderBy('id', 'DESC')->get();
        $saved_designs = Design::with('products','designsides','color','size')->where('user_id',$user_id)->where('save_type', 'save')->where('is_purchased','0')->orderBy('id', 'DESC')->get();

        $theme = Theme::where('active', '=', 1)->first();
        $store = Store::where('user_id',$user_id)->where('status', 'Approved')->first();
        return view('/layouts/default/all-designs')->with(['page'=>$page,'store'=>$store,'theme' => $theme ,'all_designs' => $all_designs,'publish_designs' => $publish_designs,'saved_designs' => $saved_designs,]);

    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});

Route::get('/all-orders', function () {
    $page = Page::where('slug', 'all-orders')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $user = Auth::user();

        if(empty($user)){
        	return redirect()->route('404');
        }
        
        $user_id = $user->id;

        $orders = Order::with('designs')->where('customer_id',$user_id)->orderBy('id', 'DESC')->get()->toArray();
        foreach ($orders as $key => $value) {
        	$designs = $value['designs'][0];
        	$info = DesignSide::where('design_id',$designs['id'])->first();
        	$orders[$key]['design_image'] = $info['design_product_image'];
        }

        //echo "<pre>";print_r($orders);die;

        $theme = Theme::where('active', '=', 1)->first();
        $store = Store::where('user_id',$user_id)->where('status', 'Approved')->first();
        return view('/layouts/default/all-orders')->with(['page'=>$page,'store'=>$store,'theme' => $theme ,'orders' => $orders]);

    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});

Route::get('/view-orders/{order}', function ($order=null) {
    $page = Page::where('slug', 'view-orders')->where('status', 'Enable')->where('published', 1)->first();

    if($page)
    {
        $user = Auth::user();
        if(empty($user)){
        	return redirect()->route('404');
        }
        $user_id = $user->id;
        $order = Order::with('designs')->where('customer_id',$user_id)->where('order_number', $order)->first();
        $designs = $order['designs'][0];
       	$info = DesignSide::where('design_id',$designs['id'])->first();
        $order['design_image'] = $info['design_product_image'];

        $order_info = OrderDetail::where('user_id',$user_id)->where('order_id', $order->id)->first();
        $product = Product::where('id',$designs['product_id'])->first();
        $sizes = $product->sizes->toArray();

        foreach ($sizes as $key => $value) {
        	if($value['id'] == $designs->size_id){
        		$quantity = $order->items;
        		$sizes[$key]['count'] = $quantity;
        	}
        	else{
        		$sizes[$key]['count'] = '0';
        	}
        }
        
        $theme = Theme::where('active', '=', 1)->first();
        $store = Store::where('user_id',$user_id)->where('status', 'Approved')->first();
        return view('/layouts/default/order-info')->with([
            'page'=>$page,
            'store'=>$store,
            'theme' => $theme ,
            'user' => $user,
            'order' => $order,
            'order_info' => $order_info,
            'product' =>$product,
            'design' => $designs,
            'sizes' => $sizes
        ]);

    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});

// Route::get('/all-orders', function () {
//     $page = Page::where('slug', 'all-orders')->where('status', 'Enable')->where('published', 1)->first();

//     if($page)
//     {
//         $user = Auth::user();

//         if(empty($user)){
//         	return redirect()->route('404');
//         }
        
//         $user_id = $user->id;

//         $orders = Order::with('designs')->where('customer_id',$user_id)->orderBy('id', 'DESC')->get()->toArray();
//         foreach ($orders as $key => $value) {
//         	$designs = $value['designs'][0];
//         	$info = DesignSide::where('design_id',$designs['id'])->first();
//         	$orders[$key]['design_image'] = $info['design_product_image'];
//         }

//         //echo "<pre>";print_r($orders);die;

//         $theme = Theme::where('active', '=', 1)->first();
//         $store = Store::where('user_id',$user_id)->where('status', 'Approved')->first();
//         return view('/layouts/default/all-orders')->with(['page'=>$page,'store'=>$store,'theme' => $theme ,'orders' => $orders]);

//     }
//     else
//     {
//         if (Auth::check() && Auth::user()->type == 'Admin')
//         {
//             return redirect()->route('errors.404');
//         }
//         else
//         {
//             return redirect()->route('404');
//         }
//     }
// });

//Route::get('dashboard','StoreController@dashboard')->name('dashboard');

Route::post('admin/orders/changestatus','OrderController@changestatus')->name('orders.changestatus');

Route::post('contact','ContactController@store')->name('contact.store');
//Route::get('contact','ContactController@index')->name('contact.index');
Route::get('refreshcaptcha','ContactController@refreshcaptcha')->name('contact.refreshcaptcha');




//Route::get('/blog/{slug}','PostController@slug')->name('posts.slug');
//Route::get('/gallery/{slug}','GalleryController@slug')->name('gallery.slug');

Route::get('emails/orders/shipped',function(){
    $order= Order::first();
    return new App\Mail\OrderShipped($order);
})->name('emails.orders.shipped');

Route::get('admin/mailables/store', function () {
    $name = ucwords(camel_case(preg_replace('/\s+/', '_', 'text"Mail')));
    $params = collect([
        'name' => $name,
    ]);
    $params->put('--force', true);
    $exitCode = Artisan::call('make:mail', $params->all());
});

// Admin Authentication Routes...
Route::post('profile/changepassword','UserController@changepassword')->name('profile.changepassword');
Route::post('profile/personal-info','UserController@updatepersonalinfo')->name('profile.personal-info');
Route::post('profile/shipping-info','UserController@updateshippinginfo')->name('profile.shipping-info');
Route::post('profile/billing-info','UserController@updatebillinginfo')->name('profile.billing-info');

Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::get('admin/login/locked', 'Admin\LoginController@locked')->middleware('auth')->name('admin.locked');
Route::post('admin/login/locked', 'Admin\LoginController@unlock')->name('admin.unlock');

Route::get('/designstudio','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/p/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/e/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/r/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/a/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/at/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/t/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/sd/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/designstudio/d/{slug}','DesignStudioController@designstudio')->name('designstudio');
Route::get('/getsessioninfo', 'DesignStudioController@getsessioninfo')->name('getsessioninfo');
Route::get('/initialinfo', 'DesignStudioController@initialinfo')->name('initialinfo');
Route::get('/templatedesigninfo', 'DesignStudioController@templatedesigninfo')->name('templatedesigninfo');
Route::get('/saveddesigninfo', 'DesignStudioController@saveddesigninfo')->name('saveddesigninfo');
Route::get('/getpromocode', 'DesignStudioController@getpromocode')->name('getpromocode');
Route::post('/getquote', 'DesignStudioController@getquote')->name('getquote');
Route::post('/getquotepersonalize', 'DesignStudioController@getquotepersonalize')->name('getquotepersonalize');
Route::get('/emailused', 'DesignStudioController@emailused')->name('emailused');
Route::post('/completeorder', 'DesignStudioController@completeorder')->name('completeorder');
Route::post('/saveorder', 'DesignStudioController@saveorder')->name('saveorder');
Route::post('/calcprice', 'DesignStudioController@calcprice')->name('calcprice');
Route::post('/saveasguest', 'DesignStudioController@saveasguest')->name('saveasguest');
Route::post('/savegetprice', 'DesignStudioController@savegetprice')->name('savegetprice');
Route::post('/saveastemplate', 'DesignStudioController@saveastemplate')->name('saveastemplate');
Route::post('/overridetemplate', 'DesignStudioController@overridetemplate')->name('overridetemplate');
Route::post('/savedesign', 'DesignStudioController@savedesign')->name('savedesign');
Route::post('/overridedesign', 'DesignStudioController@overridedesign')->name('overridedesign');
Route::post('/updatesessioninfo', 'DesignStudioController@updatesessioninfo')->name('updatesessioninfo');
Route::post('/createcategory', 'DesignStudioController@createcategory')->name('createcategory');
Route::get('/productinfo/{id}', 'DesignStudioController@productinfo')->name('productinfo');
Route::post('/logindesignstudio', 'DesignStudioController@logindesignstudio')->name('logindesignstudio');
Route::post('/registerdesignstudio', 'DesignStudioController@registerdesignstudio')->name('registerdesignstudio');
Route::post('/uploadclipart', 'DesignStudioController@uploadclipart')->name("uploadclipart");
Route::get('/designstudiotest','DesignStudioController@designstudiotest')->name('designstudiotest');
//Route::get('/designstudiokatie','DesignStudioController@designstudiokatie')->name('designstudiokatie');
Route::post('admin/sendcreatestoredesign/{storedesign}','StoreDesignsController@sendcreatestoredesign')->name('storedesign.sendcreatestoredesign');
Route::get('retrieve/{designname}','DesignStudioController@retrieve')->name('design.retrieve');


Route::get('/designstudioembroidery','DesignStudioEmbroideryController@designstudioembroidery')->name('designstudioembroidery');
Route::get('/getsessioninfoembroidery', 'DesignStudioEmbroideryController@getsessioninfoembroidery')->name('getsessioninfoembroidery');
Route::get('/initialinfoembroidery', 'DesignStudioEmbroideryController@initialinfoembroidery')->name('initialinfoembroidery');
Route::get('/templatedesigninfoembroidery', 'DesignStudioEmbroideryController@templatedesigninfoembroidery')->name('templatedesigninfoembroidery');
Route::get('/saveddesigninfoembroidery', 'DesignStudioEmbroideryController@saveddesigninfoembroidery')->name('saveddesigninfoembroidery');
Route::get('/getpromocodeembroidery', 'DesignStudioEmbroideryController@getpromocodeembroidery')->name('getpromocode');
Route::post('/getquoteembroidery', 'DesignStudioEmbroideryController@getquoteembroidery')->name('getquoteembroidery');
Route::post('/getquotepersonalizeembroidery', 'DesignStudioEmbroideryController@getquotepersonalizeembroidery')->name('getquotepersonalizeembroidery');
Route::get('/emailusedembroidery', 'DesignStudioEmbroideryController@emailusedembroidery')->name('emailusedembroidery');
Route::post('/completeorderembroidery', 'DesignStudioEmbroideryController@completeorderembroidery')->name('completeorderembroidery');
Route::post('/saveorderembroidery', 'DesignStudioEmbroideryController@saveorderembroidery')->name('saveorderembroidery');
Route::post('/calcpriceembroidery', 'DesignStudioEmbroideryController@calcpriceembroidery')->name('calcpriceembroidery');
Route::post('/saveasguestembroidery', 'DesignStudioEmbroideryController@saveasguestembroidery')->name('saveasguestembroidery');
Route::post('/savegetpriceembroidery', 'DesignStudioEmbroideryController@savegetpriceembroidery')->name('savegetpriceembroidery');
Route::post('/saveastemplateembroidery', 'DesignStudioEmbroideryController@saveastemplateembroidery')->name('saveastemplateembroidery');
Route::post('/savedesignembroidery', 'DesignStudioEmbroideryController@savedesignembroidery')->name('savedesignembroidery');
Route::post('/updatesessioninfoembroidery', 'DesignStudioEmbroideryController@updatesessioninfoembroidery')->name('updatesessioninfoembroidery');
Route::post('/createcategoryembroidery', 'DesignStudioEmbroideryController@createcategoryembroidery')->name('createcategoryembroidery');
Route::get('/productinfoembroidery/{id}', 'DesignStudioEmbroideryController@productinfoembroidery')->name('productinfoembroidery');
Route::post('/logindesignstudioembroidery', 'DesignStudioEmbroideryController@logindesignstudioembroidery')->name('logindesignstudioembroidery');
Route::post('/registerdesignstudioembroidery', 'DesignStudioEmbroideryController@registerdesignstudioembroidery')->name('registerdesignstudioembroidery');

Route::get('/designstudiokatie','DesignStudioController@designstudiokatie')->name('designstudiokatie');
Route::get('/designstudiokatie/p/{idproduct}','DesignStudioController@designstudiokatie')->name('designstudiokatie');
Route::get('/designstudiokatie/e/{idproduct}/{name}','DesignStudioController@designstudiokatie')->name('designstudiokatie');
Route::get('/designstudiokatie/t/{idproduct}/{name}','DesignStudioController@designstudiokatie')->name('designstudiokatie');
Route::get('/designstudiokatie/sd/{idproduct}/{name}','DesignStudioController@designstudiokatie')->name('designstudiokatie');

//Route::get('/designstudio/mobile','DesignStudioController@designstudio')->name('mobile.designstudio');
Route::get('/designstudiokatie','DesignStudioController@designstudiokatie')->name('designstudiokatie');
Route::post('/addToCart','DesignStudioController@addToCart')->name('mobile.addToCart');



//Api
Route::get('api/log', function () {
    return DB::table('audits')
    ->join('users', 'users.id', '=', 'audits.user_id')
    ->select('users.firstname', 'users.lastname' , 'users.image', 'audits.id', 'audits.event', 'audits.created_at', 'audits.auditable_type')
    ->latest()
    ->get()->take(5);
})->name('api.log');

Route::get('api/sides', function () {
   $sides= DB::table('sides')->where('status','=','Enable')->orderby('id')->get();
   return response()->json(array('sides' => $sides));
})->name('api.sides');

Route::get('api/shirtcolor', function () {
    return DB::table('colors')->where('type', 'shirt')->orderby('name','ASC')->get();
})->name('api.shirtcolor');

Route::get('api/shirtcolorenable', function () {
    return DB::table('colors')->where([['type','=','shirt'],['status','=','Enable']])->orderby('name','ASC')->get();
})->name('api.shirtcolorenable');

Route::get('api/inkcolor', function () {
    return DB::table('colors')->where('type', 'ink')->orderby('name','ASC')->get();
})->name('api.inkcolor');

Route::get('api/inkcolorenable', function () {
    return DB::table('colors')->where([['type','=','ink'],['status','=','Enable']])->orderby('name','ASC')->get();
})->name('api.inkcolorenable');

/*Route::get('api/users', function (Request $request) {
    return DB::table('users')->orderBy('firstname')->get();
})->name('api.users');

Route::get('api/usersenable', function () {
    return DB::table('users')->where('status','=','Enable')->get();
})->name('api.usersenable');

Route::get('api/role', function () {
    return DB::table('roles')->get();
})->name('api.role');

Route::get('api/roleenable', function () {
    return DB::table('roles')->where('status','=','Enable')->get();
})->name('api.roleenable');*/

Route::get('api/productcategory', function () {
    return DB::table('categories')->where('type','=','Product')->orderby('name','ASC')->get();
})->name('api.productcategory');

Route::get('api/productcategoryenable', function () {
    return DB::table('categories')->where('status','=','Enable')->where('type','=','Product')->where('visibility','=','Visible')->orderby('name','ASC')->get();
    /*$categories = Category::where('status','=','Enable')->where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('name','ASC')->get();
    foreach($categories as $category)
    {        
        $subcategories =  SubCategory::where('status','=','Enable')->where('type','=','Product')->where('category_id','=',$category->id)->get();
        $category->subcategories = $subcategories;
    }
    return $categories;*/
})->name('api.productcategoryenable');

Route::get('api/productsubcategory', function () {
    return DB::table('subcategories')->orderby('name','ASC')->get();
})->name('api.productsubcategory');

Route::get('api/productsubcategoryenable', function () {
    return DB::table('subcategories')->where('status','=','Enable')->orderby('name','ASC')->get();
})->name('api.productsubcategoryenable');

Route::get('api/product/category/{category?}', function ($category=null)
{
    return Product::where('parent_id','=',NUll)
                    ->join('product_categories','products.id', '=', 'product_categories.product_id')
                    ->join('categories','categories.id', '=', 'product_categories.category_id')
                    ->where('categories.id', '=', $category)
                    ->select('products.*')
                    ->distinct('products.id')
                    ->orderby('products.name')
                    ->get();

})->name('api.product.category');

Route::get('api/product/category/{category?}/{subcategory?}', function ($category=null,$subcategory=null)
{
    return Product::where('parent_id','=',NUll)
                    ->join('product_categories','products.id', '=', 'product_categories.product_id')
                    ->join('categories','categories.id', '=', 'product_categories.category_id')
                    ->join('subcategories','subcategories.id', '=', 'product_categories.subcategory_id')
                    ->where('categories.id', '=', $category)
                    ->where('subcategories.id', '=', $subcategory)
                    ->select('products.*')
                    ->distinct('products.id')
                    ->orderby('products.name')
                    ->get();
})->name('api.product.category-subcategory');

Route::get('api/size', function () {
    return DB::table('sizes')->orderBy('orden')->get();
})->name('api.size');

Route::get('api/sizeenable', function () {
    return DB::table('sizes')->where('status','=','Enable')->orderBy('orden')->get();
})->name('api.sizeenable');

Route::get('api/newsletter', function () {
    return DB::table('newsletters')->orderBy('id')->get();
})->name('api.newsletter');

Route::get('api/fontcategory', function () {
    return DB::table('font_categories')->orderby('name','ASC')->get();
})->name('api.fontcategory');

Route::get('api/fontcategoryenable', function () {
    return DB::table('font_categories')->where('status','=','Enable')->orderby('name','ASC')->get();
})->name('api.fontcategoryenable');

Route::get('api/font', function () {
    return DB::table('fonts')->orderby('name','ASC')->get();
})->name('api.font');

Route::get('api/fontenable', function () {
    return DB::table('fonts')->where('status','=','Enable')->orderby('name','ASC')->get();
})->name('api.fontenable');

Route::get('api/reservedword', function () {
    return DB::table('reserved_words')->orderby('name','ASC')->get();
})->name('api.reservedword');

Route::get('api/reservedwordenable', function () {
    return DB::table('reserved_words')->where('status','=','Enable')->orderby('name','ASC')->get();
})->name('api.reservedwordenable');

Route::get('api/promocode', function () {
    return DB::table('promo_codes')->orderby('name','ASC')->get();
})->name('api.promocode');

Route::get('api/promocodeenable', function () {
    return DB::table('promo_codes')->where('status','=','Enable')->orderby('name','ASC')->get();
})->name('api.promocodeenable');

Route::get('api/brand', function () {
    return DB::table('brands')->orderby('name','ASC')->get();
})->name('api.brand');

Route::get('api/brandenable', function () {
    //return DB::table('brands')->where('status','=','Enable')->get();
    return DB::table('brands')
    ->join('products', 'products.brand', '=', 'brands.name')
    ->select(DB::raw('DISTINCT(brands.name) as name, brands.id'))
    ->where([['products.parent_id','=',null],['products.status','=','Enable']])
    ->where('brands.status','=','Enable')
    ->orderBy('brands.name')
    ->get();
})->name('api.brandenable');

Route::get('api/familycolorenable', function () {
    return DB::table('color_families')->where('status','=','Enable')->orderby('name','ASC')->get();
})->name('api.familycolorenable');

Route::get('api/product', function () {
    return DB::table('products')->where('parent_id','=',null)->get();
})->name('api.product');

Route::get('api/defaultproduct', function () {
    $product = Product::where('parent_id','<>',null)->where('default', '=', 1)->firstOrFail();
    $parent = Product::where('id',$product->parent_id)->first();
    $product->parent = $parent;
    $sizes = $product->parent->sizes()->get();
    $product->sizes = $sizes;
    $sides = $product->sides()->get();
    $product->sides = $sides;
    return $product;
})->name('api.defaultproduct');
Route::get('api/getColorById/{id}',function($color_id=null) {
    return DB::table('colors')->where('id','=',$color_id)->get();
});
Route::get('api/productbyid', function (Request $request) {
    $product = Product::where('parent_id','<>',null)->where('id', '=', $request->id)->firstOrFail();
    $parent = Product::where('id',$product->parent_id)->first();
    $product->parent = $parent;
    $sizes = $product->parent->sizes()->get();
    $product->sizes = $sizes;
    $sides = $product->sides()->get();
    $product->sides = $sides;
    return $product;
})->name('api.productbyid');

Route::post('api/calcpricequote', function (Request $request) {
    $amnt = $request->getquotetdesign['num_shirts'];
    $product = $request->getquotetdesign['product'];
    $color = Color::where('id','=',$product['color_id'])->where('type','=','shirt')->first();
    $price = 0;
    $priceshirt = 0;
    $sides = $request->getquotetdesign['sides'];
    $sizes = $request->getquotetdesign['sizes'];
    $count = 0;
    for ($i=0; $i < count($sides); $i++) {
        $quantity =  $sides[$i]['quantity'];
        if($quantity > 0)
        {
            switch ($quantity)
            {
                case 0:
                    $color_col = "_0Color";
                    break;
                case 1:
                    $color_col = "_1Color";
                    break;
                case 2:
                    $color_col = "_2Color";
                    break;
                case 3:
                    $color_col = "_3Color";
                    break;
                case 4:
                    $color_col = "_4color";
                    break;
                case 5:
                    $color_col = "_5Color";
                    break;
                case 6:
                    $color_col = "_6Color";
                    break;
                case 7:
                    $color_col = "_7Color";
                    break;
                default:
                    $color_col = "_8Color";
                    break;
            }

            $pricetable = DB::table('price_shirt_tables')->where('RANGEFROM', '<=', $amnt)
                ->where('RANGETO', '>=', $amnt)
                ->select($color_col)
                ->first();

            if($count == 0)
            {
                $priceshirt+= $pricetable->$color_col;
            }
            if($count > 0)
            {
                    $pricediscounttable = DB::table('price_discount_tables')->where('RANGEFROM', '<=', $amnt)
                    ->where('RANGETO', '>=', $amnt)
                    ->select($color_col)
                    ->first();
                    $discount = ($pricetable->$color_col * $pricediscounttable->$color_col)/100;
                    $priceshirt+= ($pricetable->$color_col - $discount);

            }
            $count++;
        }
        else
        {
                $priceshirt +=0;
        }
    }
    
    for ($j=0; $j < count($sizes); $j++) {

        $element = $sizes[$j]['name'];
        $quantity =  $sizes[$j]['quantity'];

        if ($quantity > 0)
        {
            $categoryprice = "";
            if($element=="NB-0M" || $element=="0M" || $element=="3M" || $element=="6M" || $element=="12M" || $element=="18M" || $element=="24M")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_INFANTWHITE';
                }
                else
                {
                    $categoryprice = '_INFANT';
                }

            }
            else if($element=="2T" || $element=="3T" || $element=="4T" || $element=="5T" || $element=="5_6" || $element=="6T" || $element=="7")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_TODDLERWHITE';
                }
                else
                {
                    $categoryprice = '_TODDLER';
                }
            }
            else if ($element =="YXS" || $element=="YS" || $element=="YM" || $element=="YL" || $element=="YXL")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_YOUTHWHITE';
                }
                else
                {
                    $categoryprice = '_YOUTH';
                }
            }
            else if($element=="XS" || $element=="S" || $element=="M" || $element=="L" || $element=="XL")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_ADULTWHITE';
                }
                else
                {
                    $categoryprice = '_ADULT';
                }
            }
            else if($element=="2XL")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_2xlWHITE';
                }
                else
                {
                    $categoryprice = '_2xl';
                }
            }
            else if($element=="3XL")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_3xlWHITE';
                }
                else
                {
                    $categoryprice = '_3xl';
                }
            }
            else if($element=="4XL")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_4xlWHITE';
                }
                else
                {
                    $categoryprice ='_4xl';
                }
            }
            else if($element=="5XL")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_5xlWHITE';
                }
                else
                {
                    $categoryprice = '_5xl';
                }
            }
            else if($element=="ONE_SIZE")
            {
                if ($color->name == "White")
                {
                    $categoryprice = '_ONE_SIZEWHITE';
                }
                else
                {
                    $categoryprice = '_ONE_SIZE';
                }
            }
            $parent_id = $product['parent'];


            $priceshirttable = DB::table('price_shirts')
            ->join('product_price_shirt', 'price_shirts.id', '=', 'product_price_shirt.price_shirt_id')
            ->select(DB::raw('price_shirts.'.$categoryprice))
            ->where('price_shirts.RANGEFROM', '<=', $amnt)
            ->where('price_shirts.RANGETO', '>=', $amnt)
            ->where('product_price_shirt.product_id', '=', $parent_id['id'])
            ->latest('product_price_shirt.created_at')
            ->first();

            if($priceshirttable)
            {
                $price+= ($priceshirt + $priceshirttable->$categoryprice)*($quantity);
            }
            else
            {
                $price+= ($priceshirt + $product['price'])*($quantity);
            }
        }
    }

    return response()->json(['price' => round($price,2)]);
})->name('api.calcpricequote');

Route::get('price-quote-selected-product/{id}', function ($id=null) {

    $product = Product::where('id',$id)->first();
    $childproducts = Product::where('parent_id',$id)->get();
    $childproducts[0]->parent = $product;
    $sizes = $product->sizes()->get();
    $childproducts[0]->sizes = $sizes;
    $sides = $product->sides()->get();
    $childproducts[0]->sides = $sides;
    $theme = Theme::where('active', '=', 1)->first();
    if($theme->slug == 'subas')
    {
        $info2='';
        $info='<div class="col-xs-12">
                    <div class="section-title text-left mb-40">
                        <h2 class="uppercase">Select Product Color</h2>
                    </div>
                </div>';
        $info.='<div class="up-comming-product-section mb-80">
                <div class="container">
                    <div class="row">
                        <!-- up-comming-pro -->
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="up-comming-pro gray-bg clearfix">
                                <div class="up-comming-pro-img f-left">
                                    <a href="javascript:void(0)">
                                        <img src="/img/product/'.$product->image.'" id="price-quote-product" alt="">
                                    </a>
                                </div>
                                <div class="up-comming-pro-info f-left">
                                    <h3><a href="javascript:void(0)">'.$product->name.'</a></h3>
                                    <div class="sin-pro-color">
                                        <p class="color-title">Available Colors</p>
                                        <div class="">
                                            <ul>';
                                            foreach($childproducts as $childproduct)
                                            {
                                                $info.='<li>
                                                    <div id="price-quote-product-color'.$childproduct->id.'" class="block  color-'.$childproduct->color->id.'" onclick="setactivecolor(this); this.pricequote_productid='.$childproduct->color->id.'; setpricequoteproductcolor('."'".$childproduct->name."'".', '."'".$childproduct->id."'".');" onmouseover="document.getElementById('."'price-quote-preview'".').src='."'/img/product/".$childproduct->image."'".';" style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div>
                                                </li>';
                                            }
                                            $info.='</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm col-xs-12">
                            <div class="banner-item banner-1">
                                <div class="ribbon-price">
                                    <span>Selected</span>
                                </div>
                                <div class="banner-img">
                                    <a href="javascript:void(0)"><img  id="price-quote-preview" src="/img/product/'.$product->image.'" alt=""></a>
                                </div>
                            <!-- <div class="banner-info">
                                    <h3><a href="javascript:void(0)">Product Name</a></h3>
                                    <ul class="banner-featured-list">
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                        </li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        $sizes = '<div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Enter Shirt Quantity</h2>
                        </div>
                    </div>';
        foreach($product->sizes as $size)
        {
            $sizes.='<div class="col-sm-6">
                        <input type="text" placeholder="'.$size->name.'" id="'.$size->name.'" name="'.$size->name.'" oninput="getquotesetsize(this);" onkeypress="validate(event);" >
                    </div>';
        }
        $sizes.= '</div>';
        $sizes.= '</div> <a class="button extra-small button-black" href="javascript:void(0)" onclick="setpricequotenumbercolor();" style="cursor: pointer; background-color: #e62a9ad4 ;"><span class="startdesignbutton">next</span></a>';
        $sides = '<div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">ENTER NUMBER OF INK COLORS IN YOUR DESIGN</h2>
                        </div>
                    </div>
                    <div class="number-color-content box-shadow">
                        <div class="order-info p-30 mb-10">
                            <ul class="order-info-list">';
                            foreach($product->sides as $side)
                            {
                                $sides.=' <li>
                                            <h6>'.$side->name.'</h6>
                                            <select class="form-control" id="'.$side->slug.'" name="'.$side->slug.'" onchange="getquotesetside(this);">
                                                <option title="0" value="0" selected="">0</option>
                                                <option title="1" value="1">1</option>
                                                <option title="2" value="2">2</option>
                                                <option title="3" value="3">3</option>
                                                <option title="4" value="4">4</option>
                                                <option title="5" value="5">5</option>
                                                <option title="6" value="6">6</option>
                                                <option title="7" value="7">7</option>
                                                <option title="8" value="8">8</option>
                                            </select>
                                        </li>';
                            }

        $sides .= '</ul>
                </div>
            </div>
        </div>';
        $sides.= '</div> <a class="button extra-small button-black" href="javascript:void(0)" onclick="setpricequoteestimation();" style="cursor: pointer; background-color: #e62a9ad4 ;"><span class="startdesignbutton">Get Quote</span></a>';
        $estimation = '<div class="row">
            <div class="col-xs-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">Your All Inclusive Pricing</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="border-right: 1px solid #6d6f71;">
                    <h3 id="itemPriceLabel" style="visibility: visible; display: block;"><b>Price per item: </b>$ <span id="itemPrice" style="color: rgb(92, 184, 92); visibility: visible; display: inline;">$0.00</span> </h3>
                    <h3 id="numOfShirtsLabel" style="visibility: visible;"> <b>Quantity:</b> <span style="color: #5cb85c;"> <span id="itemNumOfShirt"></span> item(s)</span></h3>
                    <h3 id="itemTotalLabel" style="visibility: visible;"><b>Total: </b>$ <span id="itemTotal" style="color: rgb(92, 184, 92); visibility: visible;">$0.00</span></h3>
                </div>
                <div class="col-md-6">
                    <h3><strong>FREE Shipping</strong></h3>
                    <h5>Guaranteed by <span id="freeshippingquote" name="freeshippingquote" style="color: #5bc0de;"></span></h5>
                </div>
            </div>
        </div>';
        $estimation.= '</div> <a class="button extra-small button-black" href="javascript:void(0)" onclick="startnewquote();" style="cursor: pointer; background-color: #e62a9ad4 ;"><span class="startdesignbutton">Start New Quote</span></a>';
    }
    else if($theme->slug  == 'default')
    {
       $animate = 'animate';
        $info='<ul>';
        foreach($childproducts as $childproduct)
        {
            if($childproduct->status == 'Enable' && $childproduct->visibility == 'Visible' && $childproduct->min_quantity <> 6)
            {
                $info.=' <li><div id="price-quote-product-color'.$childproduct->id.'" class="block '.$animate.' colour-colorDisplay color-'.$childproduct->color->id.'" onclick="  setactivecolor(this);   this.pricequote_productid='.$childproduct->color->id.'; setpricequoteproductcolor('."'".$childproduct->name."'".', '."'".$childproduct->id."'".');" style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div> </li>
            ';
            $animate= '';
            }

        }
        $info.='</ul><br>';
        $info2='<ul>';
        foreach($childproducts as $childproduct)
        {
            if($childproduct->status == 'Enable' && $childproduct->visibility == 'Visible' )
            {
                $info2.=' <li><div id="price-quote-product-color'.$childproduct->id.'" class="block '.$animate.' colour-colorDisplay color-'.$childproduct->color->id.'" onclick="  setactivecolor(this);   this.pricequote_productid='.$childproduct->color->id.'; setpricequoteproductcolor('."'".$childproduct->name."'".', '."'".$childproduct->id."'".');" style="border-radius: 50%;  width: 30px; height: 30px; border: 1px solid rgb(238, 238, 238); cursor: pointer; margin-right: 1.7px; float: left;"></div> </li>
            ';
            $animate= '';
            }

        }
        $info2.='</ul><br>';
        $sizes= '<div class="row">';
        foreach($product->sizes as $size)
        {
            $sizes.='<div class="col-sm-1">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="'.$size->name.'" id="'.$size->name.'" name="'.$size->name.'" oninput="getquotesetsize(this);" onkeypress="validate(event);" >
                        </div>
                    </div>';
        }
        $sizes.= '</div>';

        $sides = '<h3>ENTER NUMBER OF INK COLORS IN YOUR DESIGN</h3><div class="form-row">';
        foreach($product->sides as $side)
        {
            $sides.='
                        <div class="col-sm-3">
                            <label for="'.$side->slug.'">'.$side->name.'</label>
                            <select class="form-control" id="'.$side->slug.'" name="'.$side->slug.'" onchange="getquotesetside(this);">
                                <option title="0" value="0" selected="">0</option>
                                <option title="1" value="1">1</option>
                                <option title="2" value="2">2</option>
                                <option title="3" value="3">3</option>
                                <option title="4" value="4">4</option>
                                <option title="5" value="5">5</option>
                                <option title="6" value="6">6</option>
                                <option title="7" value="7">7</option>
                                <option title="8" value="8">8</option>
                            </select>
                        </div>
                    ';
        }
    }
    return response()->json(array('success' => true, 'info' => $info, 'info2' => $info2, 'sizes' => $sizes, 'sides' => $sides, 'product' => $product, 'currentproduct'=> $childproducts[0]));
})->name('price-quote-selected-product');

Route::post('api/productpricequote', function (Request $request) {
   
    if(Session::has('configuration'))
    {
        $configuration = Session::get('configuration');
    }
    else
    {            
        $configuration = Configuration::first(); 
        Session::put('configuration', ($configuration));
    }         
    
    $configuration->price_quote_quantity = $request['price_quote_quantity'];
    $configuration->price_quote_front_color = $request['price_quote_front_color'];
    $configuration->price_quote_back_color = $request['price_quote_back_color'];   

    $product = Product::find($request->idproduct);
    $amnt = $configuration->price_quote_quantity;
    $price = 0.0;
    $priceshirt = 0.0;
    $sidescolors = [];
    array_push($sidescolors,$configuration->price_quote_front_color);
    array_push($sidescolors,$configuration->price_quote_back_color);
    $count = 0;
    $categoryprice = "_ADULT";
    foreach($sidescolors as $side)
    {       
        if($side > 0)
        { 
            switch ($side)
            {
                case 0:
                    $color_col = "_0Color";
                    break;
                case 1:
                    $color_col = "_1Color";
                    break;
                case 2:
                    $color_col = "_2Color";
                    break;
                case 3:
                    $color_col = "_3Color";
                    break;
                case 4:
                    $color_col = "_4color";
                    break;
                case 5:
                    $color_col = "_5Color";
                    break;
                case 6:
                    $color_col = "_6Color";
                    break;
                case 7:
                    $color_col = "_7Color";
                    break;
                default:
                    $color_col = "_8Color";
                    break;
            }

            

            $pricetable = DB::table('price_shirt_tables')->where('RANGEFROM', '<=', $amnt)
                ->where('RANGETO', '>=', $amnt)
                ->select($color_col)
                ->first();

              
            if($count == 0)
            {
                $priceshirt+= $pricetable->$color_col;
            }
            if($count > 0)
            {
                $pricediscounttable = DB::table('price_discount_tables')->where('RANGEFROM', '<=', $amnt)
                    ->where('RANGETO', '>=', $amnt)
                    ->select($color_col)
                    ->first();
                    $discount = ($pricetable->$color_col * $pricediscounttable->$color_col)/100;
                    $priceshirt+= ($pricetable->$color_col - $discount);

            }
            $count++;
        }
        else
        {
            $priceshirt +=0;
        }
    }           
    
    $priceshirttable = DB::table('price_shirts')
    ->join('product_price_shirt', 'price_shirts.id', '=', 'product_price_shirt.price_shirt_id')
    ->select(DB::raw('price_shirts.'.$categoryprice))
    ->where('price_shirts.RANGEFROM', '<=', $amnt)
    ->where('price_shirts.RANGETO', '>=', $amnt)
    ->where('product_price_shirt.product_id', '=', $request->idproduct)
    ->latest('product_price_shirt.created_at')
    ->first();

    if($priceshirttable && $priceshirttable->$categoryprice > 0)
    {
        $price= ($priceshirt + $priceshirttable->$categoryprice);
    }
    else
    {
        $categoryprice ='_YOUTH';
        $priceshirttable = DB::table('price_shirts')
            ->join('product_price_shirt', 'price_shirts.id', '=', 'product_price_shirt.price_shirt_id')
            ->select(DB::raw('price_shirts.'.$categoryprice))
            ->where('price_shirts.RANGEFROM', '<=', $amnt)
            ->where('price_shirts.RANGETO', '>=', $amnt)
            ->where('product_price_shirt.product_id', '=', $request->idproduct)
            ->latest('product_price_shirt.created_at')
            ->first(); 
        if($priceshirttable)
        {
            $price= ($priceshirt + $priceshirttable->$categoryprice);
        }
        else
        {
            $price= ($priceshirt + $product->price);
        }
    }
        
    return $price;
})->name('api.productpricequote');

Route::get('api/childproducts/{id}', function ($id) {
    $product = App\Product::where('parent_id',$id)->orderby('name','ASC')->get();
    return response()->json($product);
})->name('api.childproducts');

Route::get('api/childproductsembroidery/{id}', function ($id) {
    $product = App\Product::where('parent_id',$id)->where('isembroidery','=',1)->orderby('name','ASC')->get();
    return response()->json($product);
})->name('api.childproductsembroidery');

Route::get('api/productenablegrid', function () {
    $productenable = App\Product::where([['parent_id','=',null],['status','=','Enable']])->orderBy('name','ASC')->get();
    foreach($productenable as $parent)
    {
        $childs = Product::where('parent_id', '=', $parent->id)->get();
        foreach($childs as $child)
        {
            $color = Color::where([['id','=',$child->color_id],['type','=','shirt']])->first();
            $child->color = $color;            
        }
        $categories = Category::where('categories.status','=','Enable')
                        ->where('products.id','=',$parent->id)
                        ->join('product_categories','product_categories.category_id', '=', 'categories.id')
                        ->join('subcategories','product_categories.subcategory_id', '=', 'subcategories.id')
                        ->join('products','products.id', '=', 'product_categories.product_id')
                        ->select(DB::raw('CONCAT(categories.name,":",subcategories.name) as category'))
                        ->get();
        $parent->categories = $categories;
        $sides = Side::where('products_sides.enable','=',1)
                    ->where('products.id','=',$parent->id)
                    ->join('products_sides','products_sides.side_id', '=', 'sides.id')
                    ->join('products','products.id', '=', 'products_sides.product_id')
                    ->select(DB::raw('sides.*,products_sides.image'))
                    ->get(); 
        $parent->sides = $sides;
        $sizes = $parent->sizes()->get();
        $parent->sizes = $sizes;
        $favorite_to_users = $parent->favorite_to_users()->get();
        $parent->favorite_to_users = $favorite_to_users;
        $parent->products = $childs;
    }
    return response()->json($productenable);
})->name('api.productenablegrid');

Route::get('api/productenablegridpaginate', function () {
    $productenable = App\Product::where([['parent_id','=',null],['status','=','Enable']])->orderBy('name','ASC')->paginate(3);
    foreach($productenable as $parent)
    {
        $childs = Product::where('parent_id', '=', $parent->id)->get();
        foreach($childs as $child)
        {
            $color = Color::where([['id','=',$child->color_id],['type','=','shirt']])->first();
            $child->color = $color;            
        }
        $categories = Category::where('categories.status','=','Enable')
                        ->where('products.id','=',$parent->id)
                        ->join('product_categories','product_categories.category_id', '=', 'categories.id')
                        ->join('subcategories','product_categories.subcategory_id', '=', 'subcategories.id')
                        ->join('products','products.id', '=', 'product_categories.product_id')
                        ->select(DB::raw('CONCAT(categories.name,":",subcategories.name) as category'))
                        ->get();
        $parent->categories = $categories;
        $sides = Side::where('products_sides.enable','=',1)
                    ->where('products.id','=',$parent->id)
                    ->join('products_sides','products_sides.side_id', '=', 'sides.id')
                    ->join('products','products.id', '=', 'products_sides.product_id')
                    ->select(DB::raw('sides.*,products_sides.image'))
                    ->get(); 
        $parent->sides = $sides;
        $sizes = $parent->sizes()->get();
        $parent->sizes = $sizes;
        $favorite_to_users = $parent->favorite_to_users()->get();
        $parent->favorite_to_users = $favorite_to_users;
        $parent->products = $childs;
    }
    return response()->json($productenable);
})->name('api.productenablegridpaginate');

Route::get('api/productenablegridembroidery', function () {
    $productenable = App\Product::where([['parent_id','=',null],['isembroidery','=',1],['status','=','Enable']])->orderBy('name','ASC')->paginate(18);
    foreach($productenable as $parent)
    {
        $childs = Product::where('parent_id', '=', $parent->id)->where('isembroidery','=',1)->get();
        foreach($childs as $child)
        {
            $color = Color::where([['id','=',$child->color_id],['type','=','shirt']])->first();
            $child->color = $color;
        }
        $parent->products = $childs;
    }
    return response()->json($productenable);
})->name('api.productenablegridembroidery');

Route::get('api/productenablelist', function () {
    $productenable = App\Product::where([['parent_id','=',null],['status','=','Enable']])->orderBy('name','ASC')->paginate(18);
    return response()->json($productenable);
})->name('api.productenablelist');

Route::get('api/productenablelistembroidery', function () {
    $productenable = App\Product::where([['parent_id','=',null],['isembroidery','=',1],['status','=','Enable']])->orderBy('name','ASC')->paginate(18);
    return response()->json($productenable);
})->name('api.productenablelistembroidery');

Route::get('api/childproduct', function () {
    return DB::table('products')->where('parent_id','<>',null)->orderby('name','ASC')->get();
})->name('api.childproduct');

Route::get('api/childproductembroidery', function () {
    return DB::table('products')->where('parent_id','<>',null)->where('isembroidery','=',1)->get();
})->name('api.childproductembroidery');

Route::get('api/childproductenable', function () {
    return DB::table('products')->where([['parent_id','<>',null],['status','=','Enable']])->get();
})->name('api.childproductenable');

Route::get('api/childproductenableembroidery', function () {
    return DB::table('products')->where([['parent_id','<>',null],['isembroidery','=',1],['status','=','Enable']])->get();
})->name('api.childproductenableembroidery');

Route::get('api/fabric', function () {
    $fabric = DB::table('products')->select(DB::raw('DISTINCT(products.fabric) as name'))
    ->where([['parent_id','=',null],['status','=','Enable']])
    ->orderBy('products.fabric')
    ->get();
    return response()->json($fabric);
})->name('api.fabric');

Route::get('api/clipartcategorylist', function () {
    $clipartcategories= DB::table('clipart_categories')->where('status','=','Enable')->orderBy('slug','ASC')->get();
    return response()->json($clipartcategories);
})->name('api.clipartcategorylist');

Route::get('api/clipartcategoryembroiderylist', function () {
    $clipartcategories= DB::table('clipart_category_embroideries')->where('status','=','Enable')->orderBy('slug','ASC')->get();
    return response()->json($clipartcategories);
})->name('api.clipartcategoryembroiderylist');

Route::get('api/media', function () {
    $medias= Media::where('uploaded_to','Product')->paginate(98);
    return response()->json($medias);
})->name('api.media');

Route::get('api/mediaproducts', function () {
  $medias= Media::where('uploaded_to','Product')->get();
  return response()->json($medias);
})->name('api.mediaproducts');

Route::get('api/clipartcategory', function () {
    $clipartcategories = ClipartCategory::where('status','=','Enable')->orderBy('slug','ASC')->get();
    //$clipartcategories= DB::table('clipart_categories')->where('status','=','Enable')->paginate(1);
    return response()->json($clipartcategories);
})->name('api.clipartcategory');

Route::get('api/clipartcategoryembroidery', function () {
    $clipartcategories = ClipartCategoryEmbroidery::where('status','=','Enable')->orderBy('slug','ASC')->get();
    //$clipartcategories= DB::table('clipart_categories')->where('status','=','Enable')->paginate(1);
    return response()->json($clipartcategories);
})->name('api.clipartcategoryembroidery');

Route::get('api/templatecategoryembroidery', function () {
    $templatecategories = TemplateCategoryEmbroidery::where('status','=','Enable')->orderBy('slug','ASC')->get();
    //$clipartcategories= DB::table('clipart_categories')->where('status','=','Enable')->paginate(1);
    return response()->json($templatecategories);
})->name('api.templatecategoryembroidery');

/*Route::get('run-command', function () {
    set_time_limit(0);
    return response()->json( \Artisan::call('queue:listen'));
});*/

Route::get('api/templatecategory', function () {
    $templatecategories = Category::where('status','=','Enable')->where('type','=','Template')->orderBy('slug','ASC')->paginate(9);
    //$clipartcategories= DB::table('clipart_categories')->where('status','=','Enable')->paginate(1);
    return response()->json($templatecategories);
})->name('api.templatecategory');

Route::get('api/clipartsubcategorylist/{category_id}', function ($category_id) {
    return DB::table('clipart_sub_categories')->where('status','=','Enable')->where('category_id','=',$category_id)->orderBy('slug','ASC')->get();
})->name('api.clipartsubcategorylist');

Route::get('api/clipartsubcategoryembroiderylist/{category_embroidery_id}', function ($category_embroidery_id) {
    return DB::table('clipart_sub_category_embroideries')->where('status','=','Enable')->where('category_embroidery_id','=',$category_embroidery_id)->orderBy('slug','ASC')->get();
})->name('api.clipartsubcategoryembroiderylist');

Route::get('api/templatesubcategoryembroiderylist/{template_category_embroidery_id}', function ($template_category_embroidery_id) {
    return DB::table('template_sub_category_embroideries')->where('status','=','Enable')->where('category_embroidery_id','=',$template_category_embroidery_id)->orderBy('slug','ASC')->get();
})->name('api.templatesubcategoryembroiderylist');

/*Route::get('api/templatesubcategorylist/{category_id}', function ($category_id) {
    return DB::table('subcategories')->where('status','=','Enable')->where('category_id','=',$category_id)->where('type','=','Template')->orderBy('slug','ASC')->paginate(9);
})->name('api.clipartsubcategorylist');*/

/*
Route::get('api/clipartsubcategoryenable', function () {
    return DB::table('clipart_sub_categories')->where('status','=','Enable')->get();
})->name('api.clipartsubcategoryenable');*/

/*Route::get('api/resize',function()
{
    set_time_limit(0);
    $medias= Media::all();
    foreach($medias as $media)
    {
        $url= 'http://vividcustoms.test:8080/img/'.$media->url.'/'.$media->file;
        Image::make($url)->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('img/media/image/small/'.$media->file));
        echo('id: '.$media->id . "  -  ".$url.'<br>');
    }
})->name("api.resize");*/

Route::get('api/clipartsubcategory/{category_id}', function ($category_id) {
    //$clipartcategories = ClipartCategory::where('status','=','Enable')->orderBy('slug','ASC')->paginate(2);
    $subcategoriesenables = ClipartSubCategory::where('status','=','Enable')->where('category_id','=',$category_id)->orderBy('slug','ASC')->get();
    return response()->json($subcategoriesenables);
})->name('api.clipartsubcategory');

Route::get('api/clipartsubcategoryembroidery/{category_embroidery_id}', function ($category_embroidery_id) {
    //$clipartcategories = ClipartCategory::where('status','=','Enable')->orderBy('slug','ASC')->paginate(2);
    $subcategoriesenables = ClipartSubCategoryEmbroidery::where('status','=','Enable')->where('category_embroidery_id','=',$category_embroidery_id)->orderBy('slug','ASC')->get();
    return response()->json($subcategoriesenables);
})->name('api.clipartsubcategoryembroidery');

Route::get('api/templatesubcategoryembroidery/{category_embroidery_id}', function ($category_embroidery_id) {
    //$clipartcategories = ClipartCategory::where('status','=','Enable')->orderBy('slug','ASC')->paginate(2);
    $subcategoriesenables = TemplateSubCategoryEmbroidery::where('status','=','Enable')->where('category_embroidery_id','=',$category_embroidery_id)->orderBy('slug','ASC')->get();
    return response()->json($subcategoriesenables);
})->name('api.templatesubcategoryembroidery');

Route::get('api/templatesubcategory/{category_id}', function ($category_id) {
    //$clipartcategories = ClipartCategory::where('status','=','Enable')->orderBy('slug','ASC')->paginate(2);
    $subcategoriesenables = SubCategory::where('status','=','Enable')->where('type','=','Template')->where('category_id','=',$category_id)->orderBy('slug','ASC')->paginate(9);
    return response()->json($subcategoriesenables);
})->name('api.templatesubcategory');

Route::get('api/allpermissions', function () {
    $permissions = Permission::get();
    return response()->json($permissions);
})->name('api.allpermissions');

Route::get('api/typepermissions', function () {
    $typepermissions = DB::table('permissions')
    ->select(DB::raw('DISTINCT(type) as type'))
    ->orderBy('type')
    ->get();
    return response()->json($typepermissions);
})->name('api.typepermissions');

/*Route::get('api/clipart', function () {
    return DB::table('cliparts')->get();
})->name('api.clipart');

Route::get('api/clipartenable', function () {
    return DB::table('cliparts')->where('status','=','Enable')->get();
})->name('api.clipartenable');*/

Route::get('api/clipart/{category_id}/{subcategory_id}', function ($category_id,$subcategory_id) {
    $clipartsenables= DB::table('cliparts')->where([['category_id','=',$category_id],['subcategory_id','=',$subcategory_id]])->where('status','=','Enable')->get();
    return response()->json($clipartsenables);
})->name('api.clipart');

Route::get('api/clipartembroidery/{category_embroidery_id}/{subcategory_embroidery_id}', function ($category_embroidery_id,$subcategory_embroidery_id) {
    $clipartsenables= DB::table('clipart_embroideries')->where([['category_embroidery_id','=',$category_embroidery_id],['subcategory_embroidery_id','=',$subcategory_embroidery_id]])->where('status','=','Enable')->get();
    return response()->json($clipartsenables);
})->name('api.clipartembroidery');

Route::get('api/templateembroidery/{category_embroidery_id}/{subcategory_embroidery_id}', function ($category_embroidery_id,$subcategory_embroidery_id) {
    $templatesenables= DB::table('template_embroideries')->where([['category_embroidery_id','=',$category_embroidery_id],['subcategory_embroidery_id','=',$subcategory_embroidery_id]])->where('status','=','Enable')->get();
    return response()->json($templatesenables);
})->name('api.templateembroidery');

Route::get('api/template/{category_id}/{subcategory_id}', function ($category_id,$subcategory_id) {
    $templatesenables= DB::table('designs')->where([['category_id','=',$category_id],['subcategory_id','=',$subcategory_id]])->where('type','=','Template')->where('status','=','Approved')->paginate(100);
    return response()->json($templatesenables);
})->name('api.template');

Route::get('api/clipartbyid/{clipart_id}', function ($clipart_id) {
    $clipartdb= Clipart::where('id',$clipart_id)->first();
    $info = null;
    $clipartcategory= ClipartCategory::where('id',$clipartdb->category_id)->first();
    $clipartsubcategory= ClipartSubCategory::where('id',$clipartdb->subcategory_id)->first();
    $clipartdb->category = $clipartcategory->slug;
    $clipartdb->subcategory = $clipartsubcategory->slug;

    if($clipartdb->type == "svg")
    {
        $info = file_get_contents(public_path().'/img/clipart/'.$clipartdb->category.'/'.$clipartdb->subcategory."/".str_replace("png","svg",$clipartdb->filename));
    }

    $colors=  $clipartdb->colors()->get();
    $clipartdb->colors = $colors;

    return response()->json(['clipart' => $clipartdb, 'info' => $info]);
})->name('api.clipartbyid');

Route::get('api/clipartembroiderybyid/{clipart_embroidery_id}', function ($clipart_embroidery_id) {
    $clipartdb= ClipartEmbroidery::where('id',$clipart_embroidery_id)->first();
    $info = null;
    $clipartcategoryembroidery= ClipartCategoryEmbroidery::where('id',$clipartdb->category_embroidery_id)->first();
    $clipartsubcategoryembroidery= ClipartSubCategoryEmbroidery::where('id',$clipartdb->subcategory_embroidery_id)->first();
    $clipartdb->categoryembroidery = $clipartcategoryembroidery->slug;
    $clipartdb->subcategoryembroidery = $clipartsubcategoryembroidery->slug;

    if($clipartdb->type == "svg")
    {
        $info = file_get_contents(public_path().'/img/clipart-embroidery/'.$clipartdb->categoryembroidery.'/'.$clipartdb->subcategoryembroidery."/".str_replace("png","svg",$clipartdb->filename));
    }

    $colors=  $clipartdb->colors()->get();
    $clipartdb->colors = $colors;

    return response()->json(['clipart' => $clipartdb, 'info' => $info]);
})->name('api.cliparembroiderytbyid');

Route::get('api/templateembroiderybyid/{template_embroidery_id}', function ($template_embroidery_id) {
    $templatedb= TemplateEmbroidery::where('id',$template_embroidery_id)->first();
    $info = null;
    $templatecategoryembroidery= TemplateCategoryEmbroidery::where('id',$templatedb->category_embroidery_id)->first();
    $templatesubcategoryembroidery= TemplateSubCategoryEmbroidery::where('id',$templatedb->subcategory_embroidery_id)->first();
    $templatedb->categoryembroidery = $templatecategoryembroidery->slug;
    $templatedb->subcategoryembroidery = $templatesubcategoryembroidery->slug;

    if($templatedb->type == "svg")
    {
        $info = file_get_contents(public_path().'/img/template-embroidery/'.$templatedb->categoryembroidery.'/'.$templatedb->subcategoryembroidery."/".str_replace("png","svg",$templatedb->filename));
    }

    $colors=  $templatedb->colors()->get();
    $templatedb->colors = $colors;

    return response()->json(['template' => $templatedb, 'info' => $info]);
})->name('api.templateembroiderytbyid');


Route::get('api/clipartuploaded/{clipart_id}', function ($clipart_id) {
    $clipart= Clipart::where('id',$clipart_id)->first();
    $clipartdb = DB::table('cliparts')
    ->join('clipart_categories', 'clipart_categories.id', '=', 'cliparts.category_id')
    ->join('clipart_sub_categories', 'clipart_sub_categories.id', '=', 'cliparts.subcategory_id')
    ->select(DB::raw('cliparts.*, clipart_categories.slug as category, clipart_sub_categories.slug as subcategory'))
    ->where('cliparts.id',$clipart_id)
    ->Where('cliparts.category_id', 0)
    ->Where('cliparts.subcategory_id', 0)
    ->orderBy('cliparts.title')
    ->first();
    if($clipartdb->type == "svg")
    {
        $info = file_get_contents(public_path().'/img/clipart/'.$clipartdb->category.'/'.$clipartdb->subcategory."/".str_replace("png","svg",$clipartdb->filename));
    }
    else
    {
        $info = null;
    }

    $clipartdb->colors = $clipart->colors()->get();
    return response()->json(['clipart' => $clipartdb, 'info' => $info]);
})->name('api.clipartuploaded');




Route::get('api/allcliparts', function () {
    $allcliparts = DB::table('cliparts')
                        ->join('clipart_categories', 'clipart_categories.id', '=', 'cliparts.category_id')
                        ->join('clipart_sub_categories', 'clipart_sub_categories.id', '=', 'cliparts.subcategory_id')
                        ->select(DB::raw('cliparts.id,cliparts.title,cliparts.filename,cliparts.slug, clipart_categories.slug as category, clipart_sub_categories.slug as subcategory'))
                        ->where('cliparts.status','=','Enable')
                        ->where('clipart_categories.status','=','Enable')
                        ->where('clipart_sub_categories.status','=','Enable')
                        ->orderBy('cliparts.title')
                        ->get()/*->take(10)*/;
        return response()->json($allcliparts);
})->name('api.allcliparts');

Route::get('/product-list-studio/{url?}', function ($url=null)
{   
    //return $_GET;
    $filters = [];
    if(!empty($_GET['category']))
    {
        $categoriesArray= explode('_',$_GET['category']);
        $categoryArray = [];
        $subcategoryArray = [];
        foreach($categoriesArray as $categories)
        {
            $slug = explode('/',$categories); 
            array_push($categoryArray,$slug[0]);
            if( count($slug) > 1)     
            {
                array_push($subcategoryArray,$slug[1]);
            }     
        }

        if( count($slug) > 1)     
        {
            $products = Product::where('products.parent_id','=',NUll)
                        ->join('product_categories','products.id', '=', 'product_categories.product_id')
                        ->join('categories','categories.id', '=', 'product_categories.category_id')
                        ->join('subcategories','subcategories.id', '=', 'product_categories.subcategory_id')
                        ->whereIn('categories.slug', $categoryArray)
                        ->whereIn('subcategories.slug', $subcategoryArray)
                        ->select('products.*')
                        ->distinct('products.id');
        }
        else
        {
            $products = Product::where('products.parent_id','=',NUll)
                        ->join('product_categories','products.id', '=', 'product_categories.product_id')
                        ->join('categories','categories.id', '=', 'product_categories.category_id')
                        ->whereIn('categories.slug', $categoryArray)
                        ->select('products.*')
                        ->distinct('products.id');
        }
    }
    else
    {
        $products = Product::where('parent_id',null);
    }

    if(!empty($_GET['color']))
    {
        if($_GET['color'] == 'ViewAll')
        {
            $products = Product::where('parent_id',null);
        }
        else
        {
            $colorArray= explode('_',$_GET['color']);
            $productIdArray = Product::where('parent_id','<>', NUll)
                        ->join('colors','colors.id', '=', 'products.color_id')
                        ->join('color_families','colors.colorfamily', '=', 'color_families.name')
                        ->whereIn('color_families.name', $colorArray)
                        ->where('colors.type','=', 'shirt')
                        ->select(DB::raw('products.parent_id'))
                        ->distinct('products.parent_id')->get(); 

        $products->whereIn('products.id',$productIdArray->toArray()); 
        }
        
    }

    if(!empty($_GET['brand']))
    {
        if($_GET['brand'] != 'ViewAll')
        {
            $brandArray= explode('_',$_GET['brand']);
            $products = $products->whereIn('products.brand',$brandArray);
        }
        else
        {
            $products = Product::where('parent_id',null);
        }
    }
    if(!empty($_GET['fabric']))
    {
        if($_GET['fabric'] != 'ViewAll')
        {
            $fabricArray= explode('_',$_GET['fabric']);
            $products = $products->whereIn('products.fabric',$fabricArray);
        }
        else
        {
            $products = Product::where('parent_id',null);
        }
    }

    if(!empty($_GET['sortby']))
    {
        $products = $products->orderBy($_GET['sortby'],'asc');
    }
    
    $products = $products->paginate(24);

    //if(!empty($_GET['color']))
    //{       
        if(!empty($_GET['color']) && $_GET['color'] != 'ViewAll')
        {
            $productArray = Product::where('parent_id','<>', NUll)
                        ->join('colors','colors.id', '=', 'products.color_id')
                        ->join('color_families','colors.colorfamily', '=', 'color_families.name')
                        //->whereIn('color_families.name', $colorArray)
                        ->where('colors.type','=', 'shirt')
                        ->select(DB::raw('products.*, color_families.name as color_family'))
                        ->get();
                
            foreach ($products as $parent) 
            {   
                $childproducts = [];   
                $position = 0;
                $totalcolors = 0;
                foreach ($productArray as $child) {
                    if($parent->id == $child->parent_id)
                    {  
                        if($child->color_family == $_GET['color'])
                        {
                          if($position == 0)
                            {                 
                                $parent->image = $child->image;
                                $position++; 
                            }
                            array_push($childproducts, $child);  
                        }
                        $totalcolors++;
                    }                     
                }
                $parent->childproducts = $childproducts;
                $parent->totalcolors = $totalcolors;
            }
        }
        else
        {
            $productArray = Product::where('parent_id','<>', NUll)
                        ->join('colors','colors.id', '=', 'products.color_id')
                        ->join('color_families','colors.colorfamily', '=', 'color_families.name')
                        //->whereIn('color_families.name', $colorArray)
                        ->where('colors.type','=', 'shirt')
                        ->select(DB::raw('products.*'))
                        ->get();
                
            foreach ($products as $parent) 
            {   
                $childproducts = [];   
                $position = 0;
                $totalcolors = 0;
                foreach ($productArray as $child) {
                    if($parent->id == $child->parent_id)
                    {  
                        $totalcolors++;
                        if($position == 0)
                        {                 
                            $parent->image = $child->image;
                            $position++; 
                        }
                    array_push($childproducts, $child);  
                    }
                   
                }
                $parent->childproducts = $childproducts;
                $parent->totalcolors = $totalcolors;
            }
        }
    //}


    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $brandslist = Brand::where('status','Enable')->get();
        $colorslist = DB::table('color_families')->select('color_families.*')->where('status', '=', 'Enable')->get();
        $configurations = DB::table('configurations')->select('configurations.*')->first();
        $recentgallerys = Gallery::latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'product-list-studio')->where('status', 'Enable')->where('published', 1)->first();
        $fabricslist = Product::where('parent_id','=',NUll)
                    ->where('status','=','Enable')->where('visibility','=','Visible')
                    ->select(DB::raw('products.fabric as name'))
                    ->distinct('products.fabric')
                    ->get();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'colors' => $colors,
                                    'brandslist' => $brandslist,
                                    'url' => $url,
                                    'colorslist' => $colorslist,
                                    'fabricslist' => $fabricslist,
                                    'configurations' => $configurations,
                                    'products' => $products]);
    }
    else
    {

        return redirect()->route('/');
    }
})->name('product-list-studio');

//--------------------------------------------PRODUCT PAGE------------------------------------------//
Route::get('/products', function ()
{   
    //return $_GET;
   /* $filters = [];
    if(!empty($_GET['category']))
    {
        $categoriesArray= explode('_',$_GET['category']);
        $categoryArray = [];
        $subcategoryArray = [];
        foreach($categoriesArray as $categories)
        {
            $slug = explode('/',$categories); 
            array_push($categoryArray,$slug[0]);
            if( count($slug) > 1)     
            {
                array_push($subcategoryArray,$slug[1]);
            }     
        }

        if( count($slug) > 1)     
        {
            $products = Product::where('products.parent_id','=',NUll)
                        ->join('product_categories','products.id', '=', 'product_categories.product_id')
                        ->join('categories','categories.id', '=', 'product_categories.category_id')
                        ->join('subcategories','subcategories.id', '=', 'product_categories.subcategory_id')
                        ->whereIn('categories.slug', $categoryArray)
                        ->whereIn('subcategories.slug', $subcategoryArray)
                        ->select('products.*')
                        ->distinct('products.id');
        }
        else
        {
            $products = Product::where('products.parent_id','=',NUll)
                        ->join('product_categories','products.id', '=', 'product_categories.product_id')
                        ->join('categories','categories.id', '=', 'product_categories.category_id')
                        ->whereIn('categories.slug', $categoryArray)
                        ->select('products.*')
                        ->distinct('products.id');
        }
    }
    else
    {
        $products = Product::where('parent_id',null);
    }

    

    if(!empty($_GET['color']))
    {
        if($_GET['color'] == 'ViewAll')
        {
            $products = Product::where('parent_id',null);
        }
        else
        {
            $colorArray= explode('_',$_GET['color']);
            $productIdArray = Product::where('parent_id','<>', NUll)
                        ->join('colors','colors.id', '=', 'products.color_id')
                        ->join('color_families','colors.colorfamily', '=', 'color_families.name')
                        ->whereIn('color_families.name', $colorArray)
                        ->where('colors.type','=', 'shirt')
                        ->select(DB::raw('products.parent_id'))
                        ->distinct('products.parent_id')->get(); 

        $products->whereIn('products.id',$productIdArray->toArray()); 
        }
        
    }

    if(!empty($_GET['brand']))
    {
        if($_GET['brand'] != 'ViewAll')
        {
            $brandArray= explode('_',$_GET['brand']);
            $products = $products->whereIn('products.brand',$brandArray);
        }
        else
        {
            $products = Product::where('parent_id',null);
        }
    }
    if(!empty($_GET['fabric']))
    {
        if($_GET['fabric'] != 'ViewAll')
        {
            $fabricArray= explode('_',$_GET['fabric']);
            $products = $products->whereIn('products.fabric',$fabricArray);
        }
        else
        {
            $products = Product::where('parent_id',null);
        }
    }

    if(!empty($_GET['sortby']))
    {
        $products = $products->orderBy($_GET['sortby'],'asc');
    }*/
    $products = Product::where('parent_id',null);
    $products = $products->paginate(24);
    
    //if(!empty($_GET['color']))
    //{       
        if(!empty($_GET['color']) && $_GET['color'] != 'ViewAll')
        {
            $productArray = Product::where('parent_id','<>', NUll)
                        ->join('colors','colors.id', '=', 'products.color_id')
                        ->join('color_families','colors.colorfamily', '=', 'color_families.name')
                        //->whereIn('color_families.name', $colorArray)
                        ->where('colors.type','=', 'shirt')
                        ->select(DB::raw('products.*, color_families.name as color_family'))
                        ->get();
                
            foreach ($products as $parent) 
            {   
                $childproducts = [];   
                $position = 0;
                $totalcolors = 0;
                foreach ($productArray as $child) {
                    if($parent->id == $child->parent_id)
                    {  
                        if($child->color_family == $_GET['color'])
                        {
                          if($position == 0)
                            {                 
                                $parent->image = $child->image;
                                $position++; 
                            }
                            array_push($childproducts, $child);  
                        }
                        $totalcolors++;
                    }                     
                }
                $parent->childproducts = $childproducts;
                $parent->totalcolors = $totalcolors;
            }
        }
        else
        {
            $productArray = Product::where('parent_id','<>', NUll)
                        ->join('colors','colors.id', '=', 'products.color_id')
                        ->join('color_families','colors.colorfamily', '=', 'color_families.name')
                        //->whereIn('color_families.name', $colorArray)
                        ->where('colors.type','=', 'shirt')
                        ->select(DB::raw('products.*'))
                        ->get();
                
            foreach ($products as $parent) 
            {   
                $childproducts = [];   
                $position = 0;
                $totalcolors = 0;
                foreach ($productArray as $child) {
                    if($parent->id == $child->parent_id)
                    {  
                        $totalcolors++;
                        if($position == 0)
                        {                 
                            $parent->image = $child->image;
                            $position++; 
                        }
                    array_push($childproducts, $child);  
                    }
                   
                }
                $parent->childproducts = $childproducts;
                $parent->totalcolors = $totalcolors;
            }
        }
    //}


    if($products)
    {
        /*$colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $brandslist = Brand::where('status','Enable')->get();
        $colorslist = DB::table('color_families')->select('color_families.*')->where('status', '=', 'Enable')->get();
        $configurations = DB::table('configurations')->select('configurations.*')->first();
        $recentgallerys = Gallery::latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        
      
        $fabricslist = Product::where('parent_id','=',NUll)
                    ->where('status','=','Enable')->where('visibility','=','Visible')
                    ->select(DB::raw('products.fabric as name'))
                    ->distinct('products.fabric')
                    ->get();*/  
                    $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'products')->where('status', 'Enable')->where('published', 1)->first();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    //'colors' => $colors,
                                    //'brandslist' => $brandslist,
                                    //'url' => $url,
                                    //'colorslist' => $colorslist,
                                    //'fabricslist' => $fabricslist,
                                    //'configurations' => $configurations,
                                   /* 'products' => $products*/]);
    }
    else
    {

        return redirect()->route('/');
    }
})->name('products');





Route::get('/products/{category?}/{subcategory?}/{color?}/{brand?}/{fabric?}/{search?}/{sortby?}', function ($category=null,$subcategory=null,$color=null,$brand=null,$fabric=null,$search=null,$sortby=null)
{
    $data = 'parameters: ';
    $data .= $category != null ? ' category: '. $category : '';
    $data .= $subcategory != null ? ' subcategory: '. $subcategory : '';
    $data .= $color != null ? ' color: '. $color : '';
    $data .= $brand != null ? ' brand: '. $brand : '';
    $data .= $fabric != null ? ' fabric: '. $fabric : '';
    $data .= $search != null ? ' search: '. $search : '';
    $data .= $sortby != null ? ' sortby: '. $sortby : '';
    return $data;
    //$ids =  explode("_",$category);
    $products = Product::where('parent_id','=',NUll)
                    ->join('product_categories','products.id', '=', 'product_categories.product_id')
                    ->join('categories','categories.id', '=', 'product_categories.category_id')
                    ->join('subcategories','subcategories.id', '=', 'product_categories.subcategory_id')
                    ->where('categories.slug', '=', $category)
                    ->where('subcategories.slug', '=', $subcategory)
                    //->select('products.*')
                    ->select(DB::raw('products.*, categories.name as categoryname, subcategories.name as subcategoryname'))
                    ->latest()
                    ->paginate(24);
    if(count($products) > 0){
      Session::put('categoryname',$products[0]->categoryname);
      Session::put('categoryslug',$category);
      Session::put('subcategoryname', $products[0]->subcategoryname);
      Session::put('subcategoryslug',$subcategory);
    }
    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'products')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'colors' => $colors,
                                    'pcategory' => $category,
                                    'psubcategory' => $subcategory,
                                    'products' => $products]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('product.filters');

Route::get('/product/category/{category?}', function ($category=null)
{
    $products = Product::where('parent_id','=',NUll)
                    ->join('product_categories','products.id', '=', 'product_categories.product_id')
                    ->join('categories','categories.id', '=', 'product_categories.category_id')
                   // ->join('subcategories','subcategories.id', '=', 'product_categories.subcategory_id')
                    ->where('categories.slug', '=', $category)
                    ->where('categories.type', '=', 'Product')
                    //->where('subcategories.slug', '=', $subcategory)
                    // ->select('products.*, categories.name')
                    ->select(DB::raw('products.*, categories.name as categoryname'))
                    ->distinct('products.id')
                    ->latest()
                    ->paginate(24);
    if(count($products) > 0){
      Session::put('categoryname',$products[0]->categoryname);
      Session::put('categoryslug',$category);
      Session::put('subcategoryname', 'VIEW ALL');
      Session::put('subcategoryslug','');
    }

    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'products')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'colors' => $colors,
                                    'pcategory' => $category,
                                    'psubcategory' => null,
                                    'products' => $products]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('product.category');

Route::get('/product/category/{category?}/{subcategory?}', function ($category=null,$subcategory=null)
{
    //$ids =  explode("_",$category);
    $products = Product::where('parent_id','=',NUll)
                    ->join('product_categories','products.id', '=', 'product_categories.product_id')
                    ->join('categories','categories.id', '=', 'product_categories.category_id')
                    ->join('subcategories','subcategories.id', '=', 'product_categories.subcategory_id')
                    ->where('categories.slug', '=', $category)
                    ->where('subcategories.slug', '=', $subcategory)
                    //->select('products.*')
                    ->select(DB::raw('products.*, categories.name as categoryname, subcategories.name as subcategoryname'))
                    ->latest()
                    ->paginate(24);
    if(count($products) > 0){
      Session::put('categoryname',$products[0]->categoryname);
      Session::put('categoryslug',$category);
      Session::put('subcategoryname', $products[0]->subcategoryname);
      Session::put('subcategoryslug',$subcategory);
    }
    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'products')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'colors' => $colors,
                                    'pcategory' => $category,
                                    'psubcategory' => $subcategory,
                                    'products' => $products]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('product.category-subcategory');

Route::get('/product/color/{color}', function ($color=null)
{
    $products = Product::where('colors.name', '=', $color)
                        ->join('colors','products.color_id', '=', 'colors.id')
                        ->select('products.*')
                        ->latest()
                        ->paginate(24);
    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'products')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'colors' => $colors,
                                    'tags' => $tags,
                                    'pcategory' => null,
                                    'psubcategory' => null,
                                    'products' => $products]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('product.color');

Route::get('/product/brand/{brand}', function ($brand=null)
{
    $products = Product::where('products.parent_id', '=', NULL)
            ->where('products.brand', '=', $brand)
            ->select('products.*')
            ->latest()
            ->paginate(24);
    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug', 'products')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'colors' => $colors,
                                    'tags' => $tags,
                                    'pcategory' => null,
                                    'psubcategory' => null,
                                    'products' => $products]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('product.brand');

Route::post('/product/search', function (Request $request)
{
    $products = Product::where('name', 'like', '%'.$request->get('productsearch').'%')->where('products.parent_id', '=', NULL)->latest()->paginate(24);

    if($products)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug', 'products')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'colors' => $colors,
                                    'tags' => $tags,
                                    'pcategory' => null,
                                    'psubcategory' => null,
                                    'products' => $products]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('product.search');


Route::get('/product/{id}', function ($id=null)
{

    $product = Product::where('id',$id)->first();
    $childproducts = Product::where('parent_id',$id)->get();
    if($product)
    {
        $productKey = 'product_'.$product->id;
        if(!Session::has($productKey))
        {
            $product->increment('view_count');
            Session::put($productKey,1);
        }
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'single-product')->where('status', 'Enable')->where('published', 1)->first();
        $brandslist = Brand::where('status','Enable')->get();
        $colorslist = DB::table('color_families')->select('color_families.*')->where('status', '=', 'Enable')->get();
        $fabricslist = Product::where('parent_id','=',NUll)
                        ->where('status','=','Enable')->where('visibility','=','Visible')
                        ->select(DB::raw('products.fabric as name'))
                        ->distinct('products.fabric')
                        ->get();
        $countrelatedproduct = 1;
        $countadditionalimage = 1;
        if($page)
        {
            return view('page')->with(['page'=>$page,
                                        'theme' => $theme ,
                                        'productcategories' => $productcategories ,
                                        'product' => $product,
                                        'colors' => $colors,
                                        'brandslist' => $brandslist,
                                        'url' => '',
                                        'colorslist' => $colorslist,
                                        'fabricslist' => $fabricslist,
                                        'countrelatedproduct' => $countrelatedproduct,
                                        'countadditionalimage' => $countadditionalimage,
                                        'childproducts' => $childproducts]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
    else
    {
        return redirect()->route('404');
    }
})->name('single-product');

Route::get('/single-product-studio/{id}', function ($id=null)
{

    $product = Product::where('id',$id)->first();
    $childproducts = Product::where('parent_id',$id)->get();
    if($product)
    {
        $productKey = 'product_'.$product->id;
        if(!Session::has($productKey))
        {
            $product->increment('view_count');
            Session::put($productKey,1);
        }
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug','single-product-studio')->where('status', 'Enable')->where('published', 1)->first();
        $brandslist = Brand::where('status','Enable')->get();
        $colorslist = DB::table('color_families')->select('color_families.*')->where('status', '=', 'Enable')->get();
        $fabricslist = Product::where('parent_id','=',NUll)
                        ->where('status','=','Enable')->where('visibility','=','Visible')
                        ->select(DB::raw('products.fabric as name'))
                        ->distinct('products.fabric')
                        ->get();
        $countrelatedproduct = 1;
        $countadditionalimage = 1;
        if($page)
        {
            return view('page')->with(['page'=>$page,
                                        'theme' => $theme ,
                                        'productcategories' => $productcategories ,
                                        'product' => $product,
                                        'colors' => $colors,
                                        'brandslist' => $brandslist,
                                        'url' => '',
                                        'colorslist' => $colorslist,
                                        'fabricslist' => $fabricslist,
                                        'countrelatedproduct' => $countrelatedproduct,
                                        'countadditionalimage' => $countadditionalimage,
                                        'childproducts' => $childproducts]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
    else
    {
        return redirect()->route('404');
    }
})->name('single-product-studio');

//--------------------------------------------BLOG AREA---------------------------------------------//
Route::get('/blog/{slug}', function ($slug=null)
{
    //$post= Post::where('slug',$slug)->orwhere('id',$slug)->first();
    $post= Post::where('slug',$slug)->first();
    if($post)
    {
        $postKey = 'post_'.$post->id;
        if(!Session::has($postKey))
        {
            $post->increment('view_count');
            Session::put($postKey,1);
        }
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'single-blog')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'post' => $post]);
        //$theme = Theme::where('active', '=', 1)->first();
        //return view('single-blog', compact('post','theme'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('single-blog');

Route::get('/gallery/{slug}', function ($slug=null)
{
    $gallery= Gallery::where('slug',$slug)->first();
    if($gallery)
    {
        $galleryKey = 'gallery_'.$gallery->id;
        if(!Session::has($galleryKey))
        {
            $gallery->increment('view_count');
            Session::put($galleryKey,1);
        }
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'single-gallery')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'gallery' => $gallery]);
        //$theme = Theme::where('active', '=', 1)->first();
        //return view('single-gallery', compact('gallery','theme'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('single-gallery');

Route::get('/blog', function ()
{
    $posts = Post::latest()->paginate(24);
    if($posts)
    {
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'blog')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'posts' => $posts]);
    }
    else
    {
        return redirect()->route('404');
    }
    /*$recentposts = Post::latest()->paginate(3);
    $theme = Theme::where('active', '=', 1)->first();
    if($theme == 'subas')
    {
        $posts = Post::latest()->paginate(24);
    }
    else if($theme == 'eshopper')
    {
        $posts = Post::latest()->paginate(2);
    }
    $tags = Tag::latest()->paginate(10)->where('status','Enable');
    $categories = Category::where('type','Post')->latest()->paginate(10);
    return view('blog', compact('posts','theme','tags','categories','recentposts'));*/
})->name('blog');

Route::get('/gallery', function ()
{
    $gallerys = Gallery::latest()->paginate(24);
    if($gallerys)
    {
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'gallery')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'gallerys' => $gallerys]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('gallery');

Route::get('/blog/category/{category?}/{subcategory?}', function ($category=null,$subcategory=null)
{
    $posts = Post::join('categories_posts','posts.id', '=', 'categories_posts.post_id')
                    ->join('categories','categories.id', '=', 'categories_posts.category_id')
                    ->join('subcategories','subcategories.id', '=', 'categories_posts.subcategory_id')
                    ->where('categories.slug', '=', $category)
                    ->where('subcategories.slug', '=', $subcategory)
                    ->select('posts.*')
                    ->latest()
                    ->paginate(24);
    if($posts)
    {
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'blog')->where('status', 'Enable')->where('published', 1)->first();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'posts' => $posts]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('blog.category');

Route::get('/gallery/category/{category?}/{subcategory?}', function ($category=null,$subcategory=null)
{
    $gallerys = Gallery::join('galleries_categories','galleries.id', '=', 'galleries_categories.gallery_id')
                        ->join('categories','categories.id', '=', 'galleries_categories.category_id')
                        ->join('subcategories','subcategories.id', '=', 'galleries_categories.subcategory_id')
                        ->where('categories.slug', '=', $category)
                        ->where('subcategories.slug', '=', $subcategory)
                        ->select('galleries.*')
                        ->latest()
                        ->paginate(24);
    if($gallerys)
    {
        $tags = Tag::latest()->paginate(10)->where('status','Enable')->where('type','Gallery');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'gallery')->where('status', 'Enable')->where('published', 1)->first();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'gallerys' => $gallerys]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('gallery.category');

Route::get('/blog/tag/{tag}', function ($tag=null)
{
    $tag = Tag::where('slug',$tag)->first();
    if($tag)
    {
        $posts = $tag->posts()->orderBy('created_at','DESC')->latest()->paginate(24);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'blog')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'posts' => $posts]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('blog.tag');

Route::post('/blog/search', function ( Request $request)
{
    $posts = Post::where('title', 'like', '%'.$request->get('postsearch').'%')->where('is_approved','Approved')->latest()->paginate(24);
    if($posts)
    {
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'blog')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'posts' => $posts]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('blog.search');


Route::get('/gallery/tag/{tag}', function ($tag=null)
{
    $tag = Tag::where('slug',$tag)->first();
    if($tag)
    {
        $gallerys = $tag->gallerys()->orderBy('created_at','DESC')->latest()->paginate(24);
        $tags = Tag::latest()->paginate(10)->where('status','Enable')->where('type','Gallery');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'gallery')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'gallerys' => $gallerys]);
        //$recentgallerys = Gallery::latest()->paginate(3);
        //$theme = Theme::where('active', '=', 1)->first();
        //$tags = Tag::latest()->paginate(10)->where('status','Enable');
        //$categories = Category::where('type','Gallery')->latest()->paginate(10);
        //return view('gallery', compact('gallerys','theme','tags','categories','recentgallerys'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('gallery.tag');

Route::post('/gallery/search', function (Request $request)
{
    $gallerys = Gallery::where('title', 'like', '%'.$request->get('gallerysearch').'%')->where('is_approved','Approved')->latest()->paginate(24);
    if($gallerys)
    {

        $tags = Tag::latest()->paginate(10)->where('status','Enable')->where('type','Gallery');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'gallery')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'gallerys' => $gallerys]);
        //$recentgallerys = Gallery::latest()->paginate(3);
        //$theme = Theme::where('active', '=', 1)->first();
        //$tags = Tag::latest()->paginate(10)->where('status','Enable');
        //$categories = Category::where('type','Gallery')->latest()->paginate(10);
        //return view('gallery', compact('gallerys','theme','tags','categories','recentgallerys'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('gallery.search');

//------------------------------------------TEMPLATE DESIGNS----------------------------------------//

Route::get('/template-designs', function()
{
    $templatedesigns = Design::where('type','Template')->where('status','=','Approved')->paginate(24);


    if($templatedesigns)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);


        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Template')->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'template-designs')->where('status', 'Enable')->where('published', 1)->first();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'colors' => $colors,
                                    'pcategory' => null,
                                    'psubcategory' => null,
                                    'templatedesigns' => $templatedesigns]);
    }
    else
    {
        return redirect()->route('404');
    }
})->name('template-designs');

Route::get('/template-designs/category/{category?}', function ($category=null)
{
    $templatedesigns = Design::where('designs.type','=','Template')
                    ->join('categories','designs.category_id', '=', 'categories.id')
                    //->join('subcategories','designs.subcategory_id', '=', 'subcategories.id')
                    ->where('categories.slug', '=', $category)
                    ->where('categories.type', '=', 'Template')
                    //->where('subcategories.slug', '=', $subcategory)
                    ->where('designs.status','=','Approved')
                    ->where('categories.status','=','Enable')
                    //->where('subcategories.status','=','Enable')
                    ->select('designs.*')
                    ->latest()
                    ->paginate(24);
                    if(count($templatedesigns) > 0){
                      Session::put('categoryname',$templatedesigns[0]->categoryname);
                      Session::put('categoryslug',$category);
                      Session::put('subcategoryname', 'VIEW ALL');
                      Session::put('subcategoryslug','');
                    }
    if($templatedesigns)
    {
        //$posts = $category->posts()->orderBy('created_at','DESC')->paginate(24);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Template')->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'template-designs')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'pcategory' => $category,
                                    'psubcategory' => null,
                                    'templatedesigns' => $templatedesigns]);
        //$recentposts = Post::latest()->paginate(3);
        //$theme = Theme::where('active', '=', 1)->first();
        //$tags = Tag::latest()->paginate(10)->where('status','Enable');
        //$categories = Category::where('type','Post')->latest()->paginate(10);
        //return view('blog', compact('posts','theme','tags','categories','recentposts'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('template-designs.category');

Route::get('/template-designs/category/{category}/{subcategory}', function ($category=null,$subcategory=null)
{
    $templatedesigns = Design::where('designs.type','=','Template')
                    ->join('categories','designs.category_id', '=', 'categories.id')
                    ->join('subcategories','designs.subcategory_id', '=', 'subcategories.id')
                    ->where('categories.slug', '=', $category)
                    ->where('categories.type', '=', 'Template')
                    ->where('subcategories.slug', '=', $subcategory)
                    ->where('designs.status','=','Approved')
                    ->where('categories.status','=','Enable')
                    ->where('subcategories.status','=','Enable')
                    ->select('designs.*')
                    ->latest()
                    ->paginate(24);
                    if(count($templatedesigns) > 0){
                      Session::put('categoryname',$templatedesigns[0]->categoryname);
                      Session::put('categoryslug',$category);
                      Session::put('subcategoryname', $templatedesigns[0]->subcategoryname);
                      Session::put('subcategoryslug',$subcategory);
                    }
    if($templatedesigns)
    {
        //$posts = $category->posts()->orderBy('created_at','DESC')->paginate(24);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Template')->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'template-designs')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'pcategory' => $category,
                                    'psubcategory' => $subcategory,
                                    'tags' => $tags,
                                    'templatedesigns' => $templatedesigns]);
        //$recentposts = Post::latest()->paginate(3);
        //$theme = Theme::where('active', '=', 1)->first();
        //$tags = Tag::latest()->paginate(10)->where('status','Enable');
        //$categories = Category::where('type','Post')->latest()->paginate(10);
        //return view('blog', compact('posts','theme','tags','categories','recentposts'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('template-designs.subcategory');

Route::post('/template-designs/search', function (Request $request)
{
    //$templatedesigns = Design::where('title', 'like', '%'.$request->get('gallerysearch').'%')->where('is_approved','Approved')->latest()->paginate(24);
    $templatedesigns = Design::where('designs.type','=','Template')
                        ->where('categories.name', 'like', '%'.$request->get('template-designs-search').'%')
                        ->where('designs.status','=','Approved')
                        ->where('categories.status','=','Enable')
                        ->where('subcategories.status','=','Enable')
                        ->orWhere('subcategories.name', 'like', '%'.$request->get('template-designs-search').'%')
                        ->join('categories','designs.category_id', '=', 'categories.id')
                        ->join('subcategories','designs.subcategory_id', '=', 'subcategories.id')
                        ->select('designs.*')
                        //->groupBy('designs.*')
                        ->latest()
                        ->paginate(24);
                       // return $templatedesigns;
    if($templatedesigns)
    {

        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'template-designs')->where('status', 'Enable')->where('published', 1)->first();
        //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'products' => $products, 'recentproducts' => $recentproducts, 'brands' => $brands]);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'brands' => $brands,
                                    'tags' => $tags,
                                    'templatedesigns' => $templatedesigns]);
        //$recentgallerys = Gallery::latest()->paginate(3);
        //$theme = Theme::where('active', '=', 1)->first();
        //$tags = Tag::latest()->paginate(10)->where('status','Enable');
        //$categories = Category::where('type','Gallery')->latest()->paginate(10);
        //return view('gallery', compact('gallerys','theme','tags','categories','recentgallerys'));
    }
    else
    {
        return redirect()->route('404');
    }
})->name('template-designs.search');

Route::get('/template-design/{id}', function ($id=null)
{

    $product = Product::where('id',$id)/*->where('parent_id',null)*/->first();
    $childproducts = Product::where('parent_id',$id)->get();
    if($product)
    {
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'single-template-design')->where('status', 'Enable')->where('published', 1)->first();

        if($page)
        {
            $productKey = 'product_'.$product->id;
            if(!Session::has($productKey))
            {
                $product->increment('view_count');
                Session::put($productKey,1);
            }
            //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'product' => $product, 'childproducts' => $childproducts, 'recentproducts' => $recentproducts, 'brands' => $brands]);
            return view('page')->with(['page'=>$page,
                                        'theme' => $theme ,
                                        'productcategories' => $productcategories ,
                                        'postcategories' => $postcategories ,
                                        'templatecategories' => $templatecategories ,
                                        'gallerycategories' => $gallerycategories,
                                        'recentproducts' => $recentproducts ,
                                        'recentposts' => $recentposts ,
                                        'recentgallerys' => $recentgallerys ,
                                        'popularpost' => $popularpost,
                                        'populargallery' => $populargallery,
                                        'brands' => $brands,
                                        'product' => $product,
                                        'colors' => $colors,
                                        'tags' => $tags,
                                        'childproducts' => $childproducts]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
    else
    {
        return redirect()->route('404');
    }
})->name('single-template-design');

//--------------------------------------------PRICE QUOTE-------------------------------------------//
Route::get('/price-quote/{id}', function ($id=null)
{
    if($id)
    {
        $product = Product::where('id',$id)/*->where('parent_id',null)*/->first();
    }
    else
    {
        $product = Product::where('parent_id',null)->where('default', '=', 1)->firstOrFail();
    }

    if($product)
    {
        $products = Product::where('parent_id',null)->where('id','<>',$product->id)->get();
        $productlists = Product::where('status','Enabled')->where('visibility','=','Visible')->get();


        /*$childproducts = Product::where('parent_id',$product->id)->get();
        $colors = DB::table('products')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->select(DB::raw('count(colors.id) as quantity, colors.name, colors.id'))
        ->where('colors.type','=','shirt')
        ->groupBy('colors.name')
        ->groupBy('colors.id')
        ->orderBy('quantity','DESC')
        ->get()->take(10);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();*/
        $popularproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->get()->take(8);
        $newproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(8);
        $bestsellerproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'asc')->get()->take(8);
        $specialofferproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('price', 'asc')->get()->take(8);
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'price-quote')->where('status', 'Enable')->where('published', 1)->first();

        if($page)
        {
            $productKey = 'product_'.$product->id;
            if(!Session::has($productKey))
            {
                $product->increment('view_count');
                Session::put($productKey,1);
            }
            //return view('page')->with(['page'=>$page, 'theme' => $theme , 'categories' => $categories, 'product' => $product, 'childproducts' => $childproducts, 'recentproducts' => $recentproducts, 'brands' => $brands]);
            return view('page')->with(['page'=>$page,
                                        'theme' => $theme ,
                                        'product' => $product,
                                        'popularproducts' => $popularproducts ,
                                        'newproducts' => $newproducts ,
                                        'bestsellerproducts' => $bestsellerproducts ,
                                        'specialofferproducts' => $specialofferproducts ,
                                        'products' => $products,
                                        'productlists' => $productlists]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
    else
    {
        return redirect()->route('404');
    }
})->name('price-quote');

Route::POST('/order/view', function (Request $request)
{
    $order = Order::where('order_number',$request->get('order_number'))->first();
    if($order)
    {
        $theme = Theme::where('active', '=', 1)->first();
        $page = Page::where('slug',  'view-orders')->where('status', 'Enable')->where('published', 1)->first();

        if($page)
        {
            return view('page')->with(['page'=>$page,
                                        'theme' => $theme ,
                                        'order' => $order]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
    else
    {
        return redirect()->back()->with('danger','The order number '.$request->get('order_number').' do not exist');
    }
})->name('view-orders');
//--------------------------------------------GENERAL PAGE------------------------------------------//



Route::get('{slug}', function (Request $request, $slug=null)
 {
    $user = null;
    $page = Page::where('slug', $slug)->where('status', 'Enable')->where('published', 1)->first();
    if($page)
    {
        if(Auth::user())
        {
            $user = User::where('id',Auth::user()->id)->first();
        }
        $popularproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->get()->take(8);
        $newproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(8);
        $bestsellerproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'asc')->get()->take(8);
        $specialofferproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('price', 'asc')->get()->take(8);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $productsubcategories = SubCategory::where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $productlists = Product::where('parent_id','=',NUll)->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $product = Product::where('parent_id','<>',null)->where('default', '=', 1)->firstOrFail();
        $parent = Product::where('id',$product->parent_id)->first();
        $product->parent = $parent;
        $childproducts = Product::where('parent_id',$parent->id)->get();
        $countstoredesigns=1;
        $countrelatedproduct = 1;
        $states = array(
            'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'DC' => 'District Of Columbia',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming',
          );
        //return $page->bodycomponents;
        //return count(Session::get('shoppingcart')['items']);
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'popularproducts' => $popularproducts ,
                                    'newproducts' => $newproducts ,
                                    'bestsellerproducts' => $bestsellerproducts ,
                                    'specialofferproducts' => $specialofferproducts ,
                                    'productcategories' => $productcategories ,
                                    'productsubcategories' => $productsubcategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'tags' => $tags,
                                    'user' => $user,
                                    'countstoredesigns' => $countstoredesigns,
                                    'countrelatedproduct' => $countrelatedproduct,
                                    'brands' => $brands,
                                    'states' => $states,
                                    'productlists' => $productlists,
                                    'product' => $product,
                                    'childproducts' => $childproducts]);
    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});

Route::get('/', function () {
    $page = Page::where('slug', 'index')->where('status', 'Enable')->where('published', 1)->first();
    if($page)
    {
        $popularproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->get()->take(8);
        $newproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(8);
        $bestsellerproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'asc')->get()->take(8);
        $specialofferproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('price', 'asc')->get()->take(8);
        $newproduct = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->first();
        $featuredproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->orderBy('view_count', 'desc')->latest()->get()->take(8);
        $tags = Tag::latest()->paginate(10)->where('status','Enable');
        $recentproducts = Product::where('parent_id','=',NUll)->where('status','=','Enable')->latest()->get()->take(3);
        $recentposts = Post::latest()->get()->take(3);
        $recentgallerys = Gallery::latest()->get()->take(3);
        $popularpost = Post::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $populargallery = Gallery::where('is_approved','=','Approved')->orderBy('view_count', 'desc')->latest()->get()->take(3);
        $brands = DB::table('products')->select(DB::raw('count(*) as quantity, brand as name'))->where('parent_id', '=', null)->groupBy('brand')->orderBy('quantity','DESC')->get()->take(10);
        $productcategories = Category::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $productsubcategories = SubCategory::where('type','=','Product')->where('status','=','Enable')->where('visibility','=','Visible')->orderby('order')->get();
        $maincategories = Category::where('type','=','Product')->where('status','=','Enable')->get()/*->take(8)*/;
        $postcategories = Category::where('type','=','Post')->where('status','=','Enable')->get();
        $templatecategories = Category::where('type','=','Template')->where('status','=','Enable')->get();
        $gallerycategories = Category::where('type','=','Gallery')->where('status','=','Enable')->get();
        $theme = Theme::where('active', '=', 1)->first();
        $productlists = Product::where('parent_id','=',NUll)->where('status','=','Enable')->where('visibility','=','Visible')->get();
        $product = Product::where('parent_id','<>',null)->where('default', '=', 1)->firstOrFail();
        $parent = Product::where('id',$product->parent_id)->first();
        $product->parent = $parent;
        $childproducts = Product::where('parent_id',$parent->id)->get();
        return view('page')->with(['page'=>$page,
                                    'theme' => $theme ,
                                    'productcategories' => $productcategories ,
                                    'productsubcategories' => $productsubcategories ,
                                    'popularproducts' => $popularproducts ,
                                    'newproducts' => $newproducts ,
                                    'bestsellerproducts' => $bestsellerproducts ,
                                    'specialofferproducts' => $specialofferproducts ,
                                    'maincategories' => $maincategories ,
                                    'postcategories' => $postcategories ,
                                    'templatecategories' => $templatecategories ,
                                    'gallerycategories' => $gallerycategories,
                                    'recentproducts' => $recentproducts ,
                                    'recentposts' => $recentposts ,
                                    'recentgallerys' => $recentgallerys ,
                                    'popularpost' => $popularpost,
                                    'populargallery' => $populargallery,
                                    'tags' => $tags,
                                    'brands' => $brands,
                                    'featuredproducts' => $featuredproducts,
                                    'newproduct' => $newproduct,
                                    'productlists' => $productlists,
                                    'product' => $product,
                                    'childproducts' => $childproducts]);
    }
    else
    {
        if (Auth::check() && Auth::user()->type == 'Admin')
        {
            return redirect()->route('errors.404');
        }
        else
        {
            return redirect()->route('404');
        }
    }
});



// clear application cache
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return "Cache is cleared";
});
// clear route cache
Route::get('/clear-route-cache', function() {
    Artisan::call('route:clear');
    return "Route cache file removed";
});

// clear view compiled files
Route::get('/clear-view-compiled-cache', function() {
    Artisan::call('view:clear');
    return "View compiled files removed";
});

// clear config files
Route::get('/clear-config-cache', function() {
    Artisan::call('config:clear');
    return "Configuration cache file removed";
});


Route::get('admin/taxcharges','TaxController@index')->name('taxcharges.index');
Route::get('admin/taxcharges/create','TaxController@create')->name('taxcharges.create');
Route::get('admin/taxcharges/{taxcharge}','TaxController@show')->name('taxcharges.show');
Route::get('admin/taxcharges/{taxcharge}/edit','TaxController@edit')->name('taxcharges.edit');
Route::post('admin/taxcharges/store','TaxController@store')->name('taxcharges.store');
Route::put('admin/taxcharges/{taxcharge}','TaxController@update')->name('taxcharges.update');
Route::delete('admin/taxcharges/{taxcharge}','TaxController@destroy')->name('taxcharges.destroy');

