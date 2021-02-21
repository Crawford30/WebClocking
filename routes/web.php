<?php

use Carbon\Carbon;

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

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/time', function() {

// // $dt = Carbon::now();
// $dt = new Carbon();
// // $dt = timezone('US/Central');
// //echo $dt;

// // echo "<br>";
// // echo $dt->today();

// // echo "<br>";
// // echo $dt->today();


// // echo "<br>";
// // echo $dt->yesterday();

// // echo "<br>";
// // echo $dt->tomorrow();

// // echo "<br>";

// // $newYear = new Carbon('First day of September 2018');

// // echo $newYear->diffForHumans();

// // echo "<br>";

// // echo "<br>";
// // echo $dt->diffForHumans();


// //More control over dates
// // echo Carbon::createFromDate(2018, 9,4,'Africa/Nairobi' );


// // echo "<br>";

// // echo Carbon::create(2018, 9,4, 12,45,5, 'US/Central' );

// //GETTERS AND SETTERS

// // echo "<br>";

// // //  $dt->year = 2025;

// // echo $dt->year;

// // echo "<br>";

// // echo $dt->now();

// // echo "<br>";


// // echo $dt->daysInMonth;

// // echo "<br>";


// // //FORMATTING
// // echo $dt->toDayDateTimeString();

// // echo "<br>";

// // echo $dt->toFormattedDateString();

// // echo "<br>";


// // echo $dt->format('h:i:s A');

// // echo "<br>";

// //SOME HUMAN READABLE

// $dt = Carbon::now();

// echo $dt;

// echo "<br>";




// });