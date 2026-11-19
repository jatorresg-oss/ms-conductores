<?php

use App\Presentation\Repositories\ConductoresRepository;
use Slim\App;

return function (App $app) {
    // Día 1: listado inicial para verificar la conexión con la base de datos.
    $app->get('/conductores', [ConductoresRepository::class, 'all']);
};