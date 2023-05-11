<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\base_url;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $promise = Http::get(base_url::url('test'));

        return view('pages.index', ['data' => $promise]);
    }
}
