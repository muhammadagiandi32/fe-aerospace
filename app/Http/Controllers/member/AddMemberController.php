<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    //
    public function index()
    {
        return view('pages.member.add-new-member');
    }
}
