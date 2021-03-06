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

//users routes
//index routes
Route::get('/', 'User\HomeController@index')->name('home');

//Routes for loading more subcategories
Route::get('/load-more-sub-categories', 'User\HomeController@loadMoreSubCategories');
//End of routes for loading more subcategories

//Route for loading more categories
Route::get('/load-more-categories', 'User\HomeController@loadMoreCategories');
//End of route for loading more categories

Route::get('contact-us', 'User\HomeController@contact')->name('user.contact');
Route::get('about-us', 'User\HomeController@about')->name('user.about');
Route::get('terms-and-conditions', 'User\HomeController@termsofUse')->name('user.termsofUse');
Route::get('Privacy', 'User\HomeController@privacy')->name('user.privacy');
Route::get('Personal-Safety', 'User\HomeController@personalsafety')->name('user.personalsafety');
Route::get('Disclaimer', 'User\HomeController@disclaimer')->name('user.disclaimer');
Route::get('faq', 'User\HomeController@faq')->name('user.faq');
Route::get('/user/packages', 'User\PackageSubsriptionController@showPackages')->name('user.package');

//search routes
Route::get('/search', 'User\SearchController@search')->name('users.search');

//authentication routes
Route::post('/user/registration', 'User\RegistrationController@registerUser')->name('user.submit');
Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
Route::post('/logout', 'User\LoginController@logout')->name('user.logout');


//User blog routes
Route::get('blog/posts', 'User\BlogPostController@getAllPosts')->name('user.blog.posts');
Route::get('blog/{slug}', 'User\BlogPostController@showPost')->name('user.show.posts');
Route::post('comment', 'User\BlogPostController@postComment')->name('user.comment.submit');

//service routes
Route::get('/policies', 'User\PolicyController@getAll')->name('policies.all');
Route::get('/policies/{id}/category', 'User\CategoriesController@getCategory')->name('policies.category');
Route::get('/policies/{id}/details', 'User\CategoriesController@policy_details')->name('policies.details');


Route::group(['middleware' => 'user'], function () {
//user account
    Route::get('/user-account', 'User\UserProfileController@showUserProfile')->name('user.profile');
    Route::get('/user/{userId}/myads', 'User\UserProfileController@myAds')->name('user.myads');
    Route::get('/user/{userId}/favourites', 'User\FavouritesController@myFavourites')->name('user.favourites');
    Route::get('/user/{userId}/mysearch', 'User\UserProfileController@mySearch')->name('user.search');
    Route::get('/user/{userId}/archived', 'User\UserProfileController@showArchived')->name('user.archived');
    Route::get('/user/{userId}/pending', 'User\UserProfileController@pendingAds')->name('user.pending');
    Route::post('/user_data', 'User\UserProfileController@addUserProfileData')->name('user.profile_data');
    Route::post('/user/edit', 'User\UserProfileController@userEditSubmit')->name('user.edit.submit');
    Route::post('/user/update', 'User\UserProfileController@userUpdatePassword')->name('user.update.submit');
    Route::post('/user/select-package', 'User\PackageSubsriptionController@addPackage')->name('user.select.package.submit');
    Route::post('/user/account-close', 'User\UserProfileController@deleteAccount')->name('account.close');


//company Routes
    Route::get('/user/company', 'User\CompanyController@newCompany')->name('company.create');
    Route::post('/user/company', 'User\CompanyController@postCompany')->name('company.submit');
    Route::get('/company/{slug}/edit', 'User\CompanyController@companyEdit')->name('company.edit');
    Route::post('/company/edit', 'User\CompanyController@submitEdit')->name('company.edit.submit');

    //service routes
    Route::get('/user/select-package', 'User\UserCreateServiceController@showSelectPackage')->name('user.select.package');
    Route::get('/user/add-new-service', 'User\UserCreateServiceController@showNewServiceForm')->name('user.create.service');
    Route::post('/user/submit-new-service', 'User\UserCreateServiceController@createService')->name('user.create.service.submit');
    Route::get('/user/add-payment', 'User\UserCreateServiceController@showPaymentForm')->name('user.payment.form');
    Route::post('/user/add-payment', 'User\UserCreateServiceController@addPayment')->name('user.payment.submit');
    Route::get('/user/{id}/edit-service', 'User\UserCreateServiceController@editServiceForm')->name('user.edit.service');
    Route::post('/user/edit-service', 'User\UserCreateServiceController@submitChanges')->name('user.edit.service.submit');
    Route::get('/user/{id}/delete-service', 'User\UserCreateServiceController@deleteService')->name('user.delete.service');


    Route::get('/orders/user', 'SubmissionController@orders')->name('delete.image');

});


//newsletter routes
Route::post('/subscribe-to-newsletter', 'User\NewsletterController@subscribe')->name('subscribe.to.newsletter');


//Socialite logins
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//ajax routes
Route::get('/submission/getSubCategories/{id}', 'User\AdminpoliciesController@getSubCategories')->name('sub_categories');
Route::get('loadsubcat/{id}', 'SubmissionController@secondMethod');
use Illuminate\Http\Request;
Route::get('/form/tryout', function (Request $request) {

    return view('user.image');

});

Route::post('/form/tryout-submit', function (Request $request) {

    dd($request->image);

});

//multiple file upload with dropzone routes
Route::get('/multi-upload', 'User\UserCreateServiceController@multi_upload_form')->name('post.upload.form');
Route::post('/multi-pload', 'User\UserCreateServiceController@post_upload')->name('post.upload');
Route::post('/multi-upld', 'User\UserCreateServiceController@upld')->name('post.upld');


/*
* Begining of Admin routes
*/
//login routes
Route::get('/admin', 'Admin\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/submit', 'Admin\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

//dashboard routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', 'Admin\AdminDashboard@index')->name('admin.dashboard');
    Route::get('/admin/users', 'Admin\AdminUsersController@getAllUsers')->name('admin.user.list');
    Route::get('/admin/users/{id}', 'Admin\AdminUsersController@showUser')->name('admin.user');
    Route::get('/admin/users/{id}/edit', 'Admin\AdminUsersController@editUser')->name('admin.user.edit.form');
    Route::post('/admin/users/save', 'Admin\AdminUsersController@save')->name('admin.user.edit.submit');
    Route::get('/admin/users/{id}/delete', 'Admin\AdminUsersController@delete')->name('admin.user.delete');
    Route::post('/admin/users/delete', 'Admin\AdminUsersController@destroy')->name('admin.user.destroy');

    //Policy routes
    Route::get('/admin/new-policy', 'Admin\AdminpoliciesController@newPolicy')->name('admin.new.policy');
    Route::post('/admin/new-policy', 'Admin\AdminpoliciesController@submitPolicy')->name('admin.submit.policy');
    Route::get('/admin/policies', 'Admin\AdminpoliciesController@showAll')->name('admin.all.policies');
    Route::get('/admin/suspended/policies', 'Admin\AdminpoliciesController@suspended')->name('admin.suspended.policies');
    Route::get('/admin/pending/policies', 'Admin\AdminpoliciesController@pending')->name('admin.pending.policies');
    Route::get('/admin/service/{id}/approve', 'Admin\AdminpoliciesController@approveService')->name('admin.policy.approve');
    Route::get('/admin/service/{id}', 'Admin\AdminpoliciesController@getService')->name('admin.policy.show');
    Route::get('/admin/service/{id}/delete', 'Admin\AdminpoliciesController@delete')->name('admin.policy.delete');
    Route::post('/admin/service/delete', 'Admin\AdminpoliciesController@destroy')->name('admin.policy.destroy');
    
    //requests routes admin
    Route::get('/admin/all-requests', 'Admin\ServiceRequestsController@serviceRequests')->name('admin.service.requests');
    Route::get('/admin/all-orders', 'Admin\ServiceRequestsController@serviceOrders')->name('admin.service.orders');

    //types routes
    Route::get('/admin/types', 'Admin\AdminTypesController@showAll')->name('admin.all.types');
    Route::get('/admin/type/new', 'Admin\AdminTypesController@typeForm')->name('admin.new.type');
    Route::post('/admin/type', 'Admin\AdminTypesController@submitType')->name('admin.new.type.submit');
    Route::get('/admin/type/{id}/edit', 'Admin\AdminTypesController@edit')->name('admin.type.edit');
    Route::post('/admin/type/edit', 'Admin\AdminTypesController@editSubmit')->name('admin.type.edit.submit');
    Route::get('/admin/type/{id}/delete', 'Admin\AdminTypesController@delete')->name('admin.type.delete');
    Route::post('/admin/type/delete', 'Admin\AdminTypesController@destroy')->name('admin.type.destroy');

    //Podicast routes
    Route::get('/admin/podcasts', 'Admin\PodcastController@showAll')->name('admin.all.podcasts');
    Route::get('/admin/podcast/new', 'Admin\PodcastController@podcastForm')->name('admin.new.podcast');
    Route::post('/admin/podcast', 'Admin\PodcastController@submitPodcast')->name('admin.new.podcast.submit');
    Route::get('/admin/podcast/{id}/edit', 'Admin\PodcastController@edit')->name('admin.podcast.edit');
    Route::post('/admin/podcast/edit', 'Admin\PodcastController@editSubmit')->name('admin.podcast.edit.submit');
    Route::get('/admin/podcast/{id}/delete', 'Admin\PodcastController@delete')->name('admin.podcast.delete');
    Route::post('/admin/podcast/delete', 'Admin\PodcastController@destroy')->name('admin.podcast.destroy');


    //Resource routes
    Route::get('/admin/resources', 'Admin\ResourceController@showAll')->name('admin.all.resources');
    Route::get('/admin/resource/new', 'Admin\ResourceController@resourceForm')->name('admin.new.resource');
    Route::post('/admin/resource', 'Admin\ResourceController@submitResource')->name('admin.new.resource.submit');
    Route::get('/admin/resource/{id}/edit', 'Admin\ResourceController@edit')->name('admin.resource.edit');
    Route::post('/admin/resource/edit', 'Admin\ResourceController@editSubmit')->name('admin.resource.edit.submit');
    Route::get('/admin/resource/{id}/delete', 'Admin\ResourceController@delete')->name('admin.resource.delete');
    Route::post('/admin/resource/delete', 'Admin\ResourceController@destroy')->name('admin.resource.destroy');

    //Admin news letter routes
    Route::get('/admin/news-letters', 'Admin\AdminNewsLetterController@createNewsLetter')->name('admin.create.news.letter.form');
    Route::post('/admin/news-letters', 'Admin\AdminNewsLetterController@saveNewsLetter')->name('admin.create.news.letter.submit');
    Route::get('/admin/subscribers', 'Admin\AdminNewsLetterSubscribersController@getSubscribers')->name('admin.subscribers.listings');

    //Admin blog routes
    Route::get('/admin/blog', 'Admin\BlogPostController@createPost')->name('admin.create.post.form');
    Route::post('/admin/blog', 'Admin\BlogPostController@savePost')->name('admin.create.post.submit');
    Route::get('/admin/blog/posts', 'Admin\BlogPostController@getAllPosts')->name('admin.blog.list');
    Route::get('/admin/blog/posts/{id}/edit', 'Admin\BlogPostController@edit')->name('admin.post.edit.form');
    Route::post('/admin/blog/posts/edit', 'Admin\BlogPostController@save')->name('admin.post.edit.submit');
    Route::get('/admin/blog/posts/{id}/delete', 'Admin\BlogPostController@delete')->name('admin.post.delete');
    Route::post('/admin/blog/posts/delete', 'Admin\BlogPostController@destroy')->name('admin.post.destroy');

    //Categories routes
    Route::get('/admin/all-categories', 'Admin\AdminCategoriesController@showAll')->name('admin.all.categories');
    Route::get('/admin/categories', 'Admin\AdminCategoriesController@categoriesForm')->name('admin.new.category');
    Route::post('/admin/categories', 'Admin\AdminCategoriesController@submitCategory')->name('admin.new.category.submit');
    Route::get('/admin/category/{id}/edit', 'Admin\AdminCategoriesController@edit')->name('admin.category.edit');
    Route::post('/admin/category/edit', 'Admin\AdminCategoriesController@editSubmit')->name('admin.category.edit.submit');
    Route::get('/admin/category/{id}/delete', 'Admin\AdminCategoriesController@delete')->name('admin.category.delete');
    Route::post('/admin/category/delete', 'Admin\AdminCategoriesController@destroy')->name('admin.category.destroy');

    //Sub-Categories routes
    Route::get('/admin/all-sub-categories', 'Admin\AdminSubCategoriesController@showAll')->name('admin.all.subcategories');
    Route::get('/admin/sub-categories', 'Admin\AdminSubCategoriesController@subcategoriesForm')->name('admin.new.subcategory');
    Route::post('/admin/sub-categories', 'Admin\AdminSubCategoriesController@submitCategory')->name('admin.new.subcategory.submit');
    Route::get('/admin/sub-category/{id}/edit', 'Admin\AdminSubCategoriesController@edit')->name('admin.subcategory.edit');
    Route::post('/admin/sub-category/edit', 'Admin\AdminSubCategoriesController@editSubmit')->name('admin.subcategory.edit.submit');
    Route::get('/admin/sub-category/{id}/delete', 'Admin\AdminSubCategoriesController@delete')->name('admin.subcategory.delete');
    Route::post('/admin/sub-category/delete', 'Admin\AdminSubCategoriesController@destroy')->name('admin.subcategory.destroy');

    //Suspend service
    Route::get('/admin/suspend-service', 'Admin\AdminSuspendpoliciesController@suspendService')->name('suspend.service');
    Route::get('/admin/get-suspended-policies', 'Admin\AdminSuspendpoliciesController@getSuspendedpolicies')->name('suspended.policies');
    Route::get('/admin/service/{id}/unsuspend', 'Admin\AdminSuspendpoliciesController@unsuspendService')->name('admin.service.unsuspend');

    //Feature Service
    Route::get('/admin/feature-service', 'Admin\AdminFeaturepoliciesController@featureService')->name('feature.service');
    Route::get('/admin/get-featured-policies', 'Admin\AdminFeaturepoliciesController@getFeatured')->name('featured.policies');

    //Feature Company
    Route::get('/admin/feature-company', 'Admin\AdminFeatureCompaniesController@featureCompany')->name('feature.company');
    Route::get('/admin/get-featured-companies', 'Admin\AdminFeatureCompaniesController@getFeatured')->name('featured.company');

    //Suspend company
    Route::get('/admin/suspend-company', 'Admin\AdminSuspendCompaniesController@suspendCompany')->name('suspend.company');
    Route::get('/admin/get-suspended-companies', 'Admin\AdminSuspendCompaniesController@getSuspendedCompanies')->name('suspended.companies');
    Route::get('/admin/company/{id}/unsuspend', 'Admin\AdminSuspendCompaniesController@unsuspendCompany')->name('admin.company.unsuspend');

    //Random Company
    Route::get('/admin/random-company', 'Admin\AdminRandomCompaniesController@randomCompany')->name('random.company');
    Route::get('/admin/get-random-companies', 'Admin\AdminRandomCompaniesController@getRandom')->name('random.company');

});
