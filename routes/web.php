<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/categories',[CategoryController::class, 'List_Categories'])->name('Categories.List');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('Categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('Categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('Categories.edit');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('Categories.edit');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('Categories.destroy');
    Route::get('/revenues', [IncomeController::class, 'list_revenues']);
    Route::get('/expenses', [ExpenseController::class, 'list_expenses'])->name('Expenses.list');
    Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('Expenses.create');
    Route::post('/expenses', [ExpenseController::class, 'store'])->name('Expenses.store');
    Route::get('/expenses/{id}/edit', [ExpenseController::class, 'edit'])->name('Expenses.edit');
    Route::put('/expenses/{id}', [ExpenseController::class, 'update'])->name('Expenses.update');
    Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy'])->name('Expenses.destroy');
    Route::get('/template', function () {
        return view('template');
    });
});

Route::get('/Form login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Formlogin', function () {
    return view('Formlogin');
});
