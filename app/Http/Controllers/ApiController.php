<?php

namespace App\Http\Controllers;

use App\ApiDatas;
use Illuminate\Http\Request;

class ApiController extends Controller {
    
    public function index() {
        return 'hello Leo';
    }

    public function store(Request $req) {
        ApiDatas::create([
            'name' => $req->name,
            'year' => $req->year
        ]);

        return [
            'success' => 200
        ];
    }

}
