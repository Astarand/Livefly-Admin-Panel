<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\SessionTestController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\LoginController;


Route::get('/clear-cache', function () {
    // Clear configuration cache
    Artisan::call('config:clear');
    
    // Clear application cache
    Artisan::call('cache:clear');
    
    // Re-cache the configuration
    Artisan::call('config:cache');
    
    // Storage link created 
    Artisan::call('storage:link');
    
    return "Cache and config have been cleared and re-cached.";
});



/*Home*/

Route::get('/', [DashboardController::class, 'Dashboard'])->name('index');
Route::get('/login', [LoginController::class, 'Login'])->name('login');
Route::post('/loginCheck', [LoginController::class, 'loginCheck'])->name('login.check');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

/*Customer Quries*/
Route::get('/new-customer-quries', [CustomerController::class, 'NewCustomer'])->name('new-customer');
Route::get('/customer-lists', [CustomerController::class, 'Customer'])->name('customer');
Route::get('/add-customer', [CustomerController::class, 'AddCustomer'])->name('add-customer');

Route::get('/customer/reject/{id}', [CustomerController::class, 'rejectCustomer'])->name('customer.reject');
Route::get('/customer_move/{id}', [CustomerController::class, 'moveToCustomer'])->name('customer.move');
Route::get('/customer/delete/{id}', [CustomerController::class, 'deleteCustomer'])->name('customer.delete');


// Route::get('/customer/move/{id}', [CustomerController::class, 'move'])->name('customer.move');

// Route::get('/view-customer/{id}', [CustomerController::class, 'viewCustomer'])->name('view-customer.move');
Route::get('/customer/view/{id}', [CustomerController::class, 'viewCustomer'])->name('view-customer');
Route::get('/customer/edit/{id}', [CustomerController::class, 'editCustomer'])->name('edit-customer');
// Route::post('/appointments/store', [CustomerController::class, 'CustomerStore'])->name('appointments.store');
Route::post('/appointments/store', [CustomerController::class, 'store'])->name('appointments.store');
Route::post('/customer/update', [CustomerController::class, 'updateCustomer'])->name('customer.update');



/*Nurse Quries*/
Route::get('/new-nurse-quries', [NurseController::class, 'NewNurse'])->name('new-nurse');
Route::get('/nurse-lists', [NurseController::class, 'Nurse'])->name('nurse');
Route::get('/add-nurse', [NurseController::class, 'AddNurse'])->name('add-nurse');

Route::get('/nurse/view/{id}', [NurseController::class, 'viewNurse'])->name('nurse.view');
// Route::get('/nurse/move/{id}', [NurseController::class, 'moveToNurse'])->name('nurse.move');
Route::get('/nurse/delete/{id}', [NurseController::class, 'deleteNurse'])->name('nurse.delete');
Route::get('/nurse/reject/{id}', [NurseController::class, 'rejectNurse'])->name('nurse.reject');

Route::get('/nurse/move/{id}', [NurseController::class, 'moveToNurse'])->name('nurse.move');

Route::post('/save-nurse', [NurseController::class, 'saveNurse'])->name('nurse.save');


/*Nurse Assignment*/
Route::get('/service-details', [AssignmentController::class, 'Assignment'])->name('assignment');
Route::get('/add-service', [AssignmentController::class, 'AddService'])->name('add-service');
Route::post('/save-service', [AssignmentController::class, 'serviceStore'])->name('save.service');

Route::get('/view-service/{id}', [AssignmentController::class, 'serviceView'])->name('view.service');
Route::get('/service_deactivate/{id}', [AssignmentController::class, 'serviceDeactivate'])->name('service.deactivate');
Route::get('/service_complete/{id}', [AssignmentController::class, 'serviceCompleted'])->name('service.complete');


/*Session Service Quries*/
Route::get('/new-session-test-quries', [SessionTestController::class, 'NewsessionTest'])->name('new-session');
Route::get('/session-test-quries', [SessionTestController::class, 'SessionTest'])->name('session-test');
Route::get('/add-session-test', [SessionTestController::class, 'AddSessionTest'])->name('add-session');

Route::get('/customer/move/{id}', [SessionTestController::class, 'moveToSessionCustomer'])->name('customer.SessionMove');
Route::post('/appointments', [SessionTestController::class, 'AddSessionCustomer'])->name('appointments.store');
Route::get('/view-session/{id}', [SessionTestController::class, 'ViewSessionCustomer'])->name('view-session');
Route::get('/delete-session/{id}', [SessionTestController::class, 'DeleteSessionCustomer'])->name('delete-session');
Route::get('/work_update-session/{id}', [SessionTestController::class, 'WorkUpdateSessionCustomer'])->name('work_update-session');

/*Shop*/
Route::get('/shop-quries', [ShopController::class, 'Quries'])->name('quries');
Route::get('/shop-update', [ShopController::class, 'Update'])->name('update');
Route::get('/add-product', [ShopController::class, 'AddProduct'])->name('add-product');
Route::get('/view-shop-quries', [ShopController::class, 'ViewQuries'])->name('view-shop-quries');
Route::get('/product-edit/{id}', [ShopController::class, 'editProduct'])->name('product.edit');

Route::post('/add-product', [ShopController::class, 'store'])->name('product.store');
Route::put('/products/{id}', [ShopController::class, 'updateProduct'])->name('products.update');
// Route::get('/ProductDelete/{id}', [ShopController::class, 'deleteProduct'])->name('product.delete');
Route::get('/product/delete/{id}', [ShopController::class, 'deleteProduct'])->name('product.delete');
Route::get('/shop-queries/{id}', [ShopController::class, 'showShopQueries'])->name('view-shop-quries-details');

Route::get('/product/reject/{id}', [ShopController::class, 'rejectProduct'])->name('product.reject');
Route::get('/product/confirm/{id}', [ShopController::class, 'confirmProduct'])->name('product.confirm');



/*Blog*/
Route::get('/blog-details', [BlogController::class, 'Blog'])->name('blog');
Route::get('/add-blog', [BlogController::class, 'AddBlog'])->name('add-blog');
Route::post('/store-blog', [BlogController::class, 'storeBlog'])->name('store.blog');


Route::get('/blog/{id}/activate', [BlogController::class, 'activate'])->name('blog.activate');
Route::get('/blog/{id}/deactivate', [BlogController::class, 'deactivate'])->name('blog.deactivate');
Route::get('/blog-edit/{id}', [BlogController::class, 'edit_blog'])->name('blog.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('update.blog');

/*Career*/
Route::get('/career-details', [CareerController::class, 'Career'])->name('carrer');
Route::get('/add-career', [CareerController::class, 'AddCareer'])->name('add-career');
Route::post('/career/store', [CareerController::class, 'store'])->name('career.store');
Route::get('/career/edit/{id}', [CareerController::class, 'careerEdit'])->name('career.edit');
Route::put('careers/{id}', [CareerController::class, 'update'])->name('career.update');
Route::get('career_deactive/{id}', [CareerController::class, 'career_deactive'])->name('career.deactive');
Route::get('career_active/{id}', [CareerController::class, 'career_active'])->name('career.activate');
Route::get('/candidate-list', [CareerController::class, 'CandidateList'])->name('candidate');