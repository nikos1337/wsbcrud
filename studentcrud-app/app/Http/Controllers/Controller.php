<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $student = people::all();

        if ($student->count() > 0) {
            return response()->json([
                'status' => 200,
                'people' => $student
            ], 200);

        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No data'
            ], 404);
        }
    }
}
