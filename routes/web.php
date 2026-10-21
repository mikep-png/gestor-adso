<<<<<<< HEAD

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendizController;

Route::redirect('/', '/aprendices');

Route::resource('aprendices', AprendizController::class);

// Rutas temporales para practicar:
// Route::get('/ping', fn() => 'pong');
// Route::get('/hola/{nombre}', fn($nombre) => "Hola, $nombre");
// Route::get('/suma/{a}/{b}', fn($a, $b) => (int) $a + (int) $b);
=======
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 3c59269e0b4d40ecee4b3407869e1fe39508f469
