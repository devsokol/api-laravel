<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController  extends Controller {

    public function index() {
        return response()->json([
            'success' => true,
            'message' => 'function name index controller MainController...'
        ]);
    }
}
