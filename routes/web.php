<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Http;

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
// Route::get('/courses-innerpage', function () {
//     return view('Admin.courses-innerpage');
// });
Route::get('/users', function () {
    return view('admin/usermanagement');
});

Route::get('/courses','ProjectController@apiWithKey')->name('apiWithKey');
Route::get('/courses/{id}','ProjectController@apiWithKeyproduct');
// Route::get('/bundle', 'ProjectController@viewbundles');
Route::get('/', 'Website\homeController@index');
Route::get('/aboutus','Website\Aboutuscontroller@index');
Route::get('/privacypolicy','Website\privacypolicyController@index');
Route::get('/blogs','Website\blogcontroll@index');
Route::get('/blogs-search','Website\blogcontroll@search');
// Route::get('/courses-search','Website\ProjectController@search');
Route::get('/single-blogs/{slug}/{id}','Website\blogcontroll@blogindex');
Route::post('/blog-comments','Admin\BlogCommentsController@store');
Route::get('/privacypolicy','Website\privacypolicyController@index');

// role management
Route::get('/faq', function () {
    return view('Website/faq');
});
Route::get('/cookiepolicy' ,'Website\CookiePolicyController@index');
// terms and conditions
Route::get('/terms&conditions','Website\TermsAndConditionsController@index');
Route::post('/subscription-save','Website\subscriptionController@store');
// contact
Route::get('/contactus','Website\ContactUsController@index');
Route::post('/contactus-save','Website\ContactUsController@store');
// Dashboard
Route::group(['middleware' => ['auth']], function() { 
Route::resource('roles','UserManagement\RoleController');
Route::resource('users','UserManagement\UserController');
Route::get('/blog-comments','Admin\BlogCommentsController@index');
Route::get('/blog-comments-view/{slug}/{id}','Admin\BlogCommentsController@view');
Route::get('/blog-comments-delete/{id}','Admin\BlogCommentsController@delete');
// ajax control
Route::post('/blog-comments-control/{id}','Admin\BlogCommentsController@control');

Route::get('about','Admin\AboutController@index');
Route::post('about-save','Admin\AboutController@store')->name('about');
// contact
Route::get('contact','Admin\ContactController@index');
Route::get('contact-delete/{id}','Admin\ContactController@delete');
// subscription
Route::get('subscription','Admin\subscriptionController@index');
Route::get('subscription-delete/{id}','Admin\subscriptionController@delete');
// Route::post('subscription-save','Admin\Subscription@store');
// terms and conditions
Route::get('terms-and-conditions','Admin\TermsAndConditionsController@index');
Route::post('terms-and-conditions-save','Admin\TermsAndConditionsController@store');
// Cookie Policy
Route::get('cookie_policy','Admin\CookiePloicyController@index');
Route::post('cookie_policy_save','Admin\CookiePloicyController@store');
// privacypolicy
Route::get('privacy_policy','Admin\PrivacyPolicyController@index');
Route::post('privacy-policy-save','Admin\PrivacyPolicyController@store');
// new blog
Route::get('new-blog','Admin\NewBlogController@index')->name('new-blog');
Route::post('new-blog-save','Admin\NewBlogController@store');
Route::post('new-blog-edit','Admin\NewBlogController@edit');
// testimonial
Route::get('testimonial','Admin\testimonialcontroller@index');
Route::get('/testimonial-add','Admin\testimonialcontroller@store'); 
Route::post('/testimonial-add','Admin\testimonialcontroller@save');
Route::get('/testimonial-edit/{id}','Admin\testimonialcontroller@edit');
Route::post('/testimonial-edit/{id}','Admin\testimonialcontroller@update');
// ajax control
Route::post('/testimonial-control/{id}','Admin\testimonialcontroller@control');
// blog-list
Route::get('blog-list','Admin\NewBlogController@view');
Route::get('blog-list-delete/{id}','Admin\NewBlogController@delete');
Route::get('blog-list-edit/{id}','Admin\NewBlogController@edit');
Route::get('blog-list-update/{id}','Admin\NewBlogController@update');
Route::post('blog-list-add/{id}','Admin\NewBlogController@add');
Route::post('blog-list-control/{id}','Admin\NewBlogController@control');
// blog-list
Route::get('blog-category-list','Admin\blog_categoryController@list');
Route::get('blog-category','Admin\blog_categoryController@index');
Route::post('blog-category-save','Admin\blog_categoryController@store');
Route::get('blog-category-delete/{id}','Admin\blog_categoryController@delete');
Route::get('blog-category-edit/{id}','Admin\blog_categoryController@edit');
Route::get('blog-category-update/{id}','Admin\blog_categoryController@update');
Route::post('blog-category-update-save/{id}','Admin\blog_categoryController@updatesave');
Route::get('tag-management','Admin\TagManagementController@index');
Route::post('tag-management-save','Admin\TagManagementController@store');
Route::get('tag-management-delete/{id}','Admin\TagManagementController@delete');
Route::get('tag-management-edit/{id}','Admin\TagManagementController@edit');
Route::post('tag-management/{id}','Admin\TagManagementController@update');
Route::post('userprofile/{id}','Admin\HomeController@view');
});
Auth::routes();
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'HomeController@index');


