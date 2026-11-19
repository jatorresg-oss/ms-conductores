<?php

namespace App\Controllers;

use App\Models\Conductor;
use Illuminate\Database\Eloquent\Collection;

class ConductoresController
{
    public function all(): Collection
    {
        return Conductor::all();
    }
}