<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CrowdFundInvestorController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\InventoryController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/fund-farmer', [HomeController::class, 'fundFarmer'])->name('fund.farmer');

Route::get('/our-impact', [HomeController::class, 'ourImpact'])->name('our.impact');

Route::get('/short-term-investment', [HomeController::class, 'shortTerm'])->name('short.term');

Route::get('/long-term-investment', [HomeController::class, 'longTerm'])->name('long.term');

Route::get('/seasonal-investment', [HomeController::class, 'seasonalInvestment'])->name('seasonal.investment');

Route::get('/agri-trade-investment', [HomeController::class, 'agriTradeInvestment'])->name('agri.investment');

Route::get('/create-account', [AuthController::class, 'index'])->name('create.account');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');

Route::get('/verification', [AuthController::class, 'verification'])->name('verification');

Route::get('/welcome-dashboard', [AuthController::class, 'welcomeDashboard'])->name('welcome.dashboard');

Route::get('/booking-method', [BookingController::class, 'bookingMethod'])->name('booking.method');

Route::get('/booking-details', [BookingController::class, 'bookingDetails'])->name('booking.details');

Route::get('/cheque-submission', [BookingController::class, 'chequeSubmission'])->name('cheque.submission');

Route::get('/bank-transfer', [BookingController::class, 'bankTransfer'])->name('bank.transfer');

Route::get('/booking-confirmation', [BookingController::class, 'bookingConfirmation'])->name('booking.confirmation');

Route::get('/crowd-fund-investor-dashboard', [CrowdFundInvestorController::class, 'userCrowdFundDashboard'])->name('crowd.fund.investor');

Route::get('/account/personal-information', [AccountController::class, 'personalInformation'])->name('account.personal');

Route::get('/account/bank-information', [AccountController::class, 'bankInformation'])->name('account.bankInfo');

Route::get('/account/nominee-information', [AccountController::class, 'nomineeInformation'])->name('account.nomineeInfo');

Route::get('/inventory/farmer-registration', [InventoryController::class, 'farmerRegistration'])->name('inventory.farmerReg');

Route::get('/inventory/community', [InventoryController::class, 'community'])->name('inventory.community');

Route::get('/inventory/beneficiary-management', [InventoryController::class, 'beneficiaryManagement'])->name('inventory.beneficiaryManagement');

Route::get('/inventory/project-initialization', [InventoryController::class, 'projectInitialization'])->name('inventory.projectInit');

