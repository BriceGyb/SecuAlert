<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\SosController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

;

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
/* FRONT ROUTES */
Route::get('404' , function () {
    return view('pages.404');})->name('404');


Route::get('/home', function () {
    
    return view('pages.home');
})->name('my_home');
Route::get('/sos', function () {
    return view('pages.sos');
})->name('sos');


/*ALERT RESSOURCES ROUTES */
Route::resource('/alert', AlertController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/stats', function () {
    // Récupérer les données de la base de données pour l'histogramme
    $alertsByCity = DB::table('alerts')
                      ->select('ville', DB::raw('count(*) as total'))
                      ->groupBy('ville')
                      ->get();

    // Récupérer les données de la base de données pour le diagramme circulaire
    $alertsByType = DB::table('alerts')
                      ->select('type', DB::raw('count(*) as total'))
                      ->groupBy('type')
                      ->get();

    // Passer les données à la vue
    return view('pages.stats', ['alertsByCity' => $alertsByCity, 'alertsByType' => $alertsByType]);
})->name('stats');;

Route::resource('managesos', SosController::class);

/*Breeze */





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







/* ROUTEEEE LIEEE AUXX RESEAUXXXXXXXXXXXXXXXX*/

Route::get('/reseau-add', function () {
    return view('reseau.add');
})->name('add');;
Route::get('/reseau-suppr', function () {
    return view('reseau.add');
})->name('suppr');;


Route::get('/reseau-list', function () {
    $userId = Auth::id();
    $relations = DB::table('relations')
    ->where('user_id', $userId)
    ->orWhere('friend_id', $userId)
    ->get();

    $friends = [];

    foreach ($relations as $relation) {
        if ($relation->user_id != $userId) {
            $friend = DB::table('users')->where('id', $relation->user_id)->first();
        } else {
            $friend = DB::table('users')->where('id', $relation->friend_id)->first();
        }

        if ($friend) {
            $friends[] = $friend;
        }
    }

    return view('reseau.list', compact('friends'));
})->name('list');
    



Route::post('/makefriend', function (Illuminate\Http\Request $request) {
    // Récupérer l'identifiant envoyé par le formulaire
    $identifiant = $request->input('identifiant');
    // Rechercher l'utilisateur correspondant dans la table users
    $user = DB::table('users')->where('identifiant', $identifiant)->first();
    if ($user) {
        // Créer une nouvelle relation dans la table relations
        DB::table('relations')->insert([
            'user_id' => auth()->user()->id,
            'friend_id' => $user->id,
        ]);
     // Rediriger vers la même page avec un message de succès
     return redirect()->back()->with('success', "L'utilisateur a été correctement ajouté à votre réseau.");
    }
// Si aucun utilisateur correspondant n'est trouvé, rediriger avec un message d'erreur
return redirect()->back()->with('error', "Aucun utilisateur avec cet identifiant n'a été trouvé.");
})->name('makefriend');

   


















require __DIR__.'/auth.php';
