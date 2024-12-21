<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactFormController;

Route::get('/clear-cache', function () {
    // Clear configuration cache
    Artisan::call('config:clear');

    // Clear application cache
    Artisan::call('cache:clear');

    // Re-cache the configuration
    Artisan::call('config:cache');

    return "Cache and config have been cleared and re-cached.";
});

/**Home**/
Route::get('/', [IndexController::class, 'Index'])->name('index');

/**About Us**/
Route::get('/about', [IndexController::class, 'About'])->name('about');

/**Services**/
Route::get('/services', [ServiceController::class, 'Service'])->name('service');

Route::get('/nursing-care', [ServiceController::class, 'NursingCare'])->name('nursing-care');
Route::get('/critical-care-nursing', [ServiceController::class, 'CriticalCare'])->name('critical-care');
Route::get('/icu-nursing-care', [ServiceController::class, 'ICUNursing'])->name('icu-nursing');
Route::get('/advance-care-nursing', [ServiceController::class, 'AdvanceCare'])->name('advance-care');
Route::get('/basic-care-nursing', [ServiceController::class, 'BasicCare'])->name('basic-care');
Route::get('/clinical-attendant', [ServiceController::class, 'ClinicalAttendant'])->name('clinical-attendant');
Route::get('/short-term-nursing', [ServiceController::class, 'ShortTerm'])->name('short-term');

Route::get('/rehabilitation-therapies', [ServiceController::class, 'RehabilitationTherapies'])->name('rehabilitation-therapies');
Route::get('/physiotherapy', [ServiceController::class, 'Physiotherapy'])->name('physiotherapy');
Route::get('/speech-and-swallow-therapy', [ServiceController::class, 'STherapy'])->name('s-therapy');


Route::get('/health-tests', [ServiceController::class, 'HealthTests'])->name('health-tests');
Route::get('/polysomnography', [ServiceController::class, 'Polysomnography'])->name('polysomnography');
Route::get('/arterial-blood-gas-analysis', [ServiceController::class, 'ABG'])->name('abg');
Route::get('/ambulatory-blood-pressure-monitoring', [ServiceController::class, 'AVPM'])->name('avpm');
Route::get('/portable-x-ray', [ServiceController::class, 'XRay'])->name('x-ray');
Route::get('/holter', [ServiceController::class, 'Holter'])->name('holter');

Route::get('/telemedicine', [ServiceController::class, 'Telemedicine'])->name('telemedicine');

Route::get('/hospice', [ServiceController::class, 'Hospice'])->name('hospice');

Route::get('/senior-care', [ServiceController::class, 'SeniorCare'])->name('senior-care');

Route::get('/sample-collection', [ServiceController::class, 'SampleCollection'])->name('sample-collection');

/**Differntiators**/
Route::get('/our-key-differntiators', [IndexController::class, 'Differntiators'])->name('differntiators');

/**Gallery**/
Route::get('/gallery', [IndexController::class, 'Gallery'])->name('gallery');

/**Testimonial**/
Route::get('/testimonials', [IndexController::class, 'Testimonial'])->name('testimonial');

/**Blog**/
Route::get('/blogs', [BlogController::class, 'Blog'])->name('blog');
Route::get('/blog-detailss/{id}', [BlogController::class, 'BlogDetails'])->name('blog-detailss');

/**Blog**/
Route::get('/shop', [ShopController::class, 'Shop'])->name('shop');

/**Contact**/
Route::get('/contact', [IndexController::class, 'Contact'])->name('contact');

/**Appoinment**/
Route::get('/book-appointment', [IndexController::class, 'Appointment'])->name('appointment');

/**Nurse Registration**/
Route::get('/nurse-registration', [IndexController::class, 'Nurse'])->name('nurse');

/*Others */
Route::get('/terms-and-condition', [OtherController::class, 'Terms'])->name('terms');
Route::get('/privacy-policy', [OtherController::class, 'Privacy'])->name('privacy');
Route::get('/frequently-asked-questions', [OtherController::class, 'FAQ'])->name('faq');
Route::get('/careers', [OtherController::class, 'Career'])->name('career');

Route::post('/contact-form', [ContactFormController::class, 'store'])->name('contact-form.store');

//------------ form submit ----------
Route::post('/submit-nurse-form', [FormController::class, 'store'])->name('nurse.store');
Route::post('/save-appointment', [FormController::class, 'saveAppointment'])->name('save.appointment');
Route::post('/save-emergency_appointment', [FormController::class, 'saveEmergencyAppointment'])->name('save.emergency_appointment');
