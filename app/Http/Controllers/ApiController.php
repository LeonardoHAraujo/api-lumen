<?php

namespace App\Http\Controllers;

use App\ApiDatas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller {
    
    // READ
    public function index(Request $req) {
        return ApiDatas::all();
    }

    // CREATE
    public function store(Request $req) {
        ApiDatas::create([
            'name' => $req->name,
            'year' => $req->year
        ]);

        return [
            'success' => 200
        ];
    }

    // UPDATE
    public function update($id, Request $req) {
        DB::table('api_datas')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'year' => $req->year
            ]);

        return [
            'success' => 200
        ];
    }

    // DELETE
    public function delete($id) {
        DB::table('api_datas')
            ->where('id', $id)
            ->delete();

        return [
            'success' => 200
        ];
    }

}
