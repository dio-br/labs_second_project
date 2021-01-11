<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminNewsletterController extends Controller
{
    public function index(){
        $newsletter = Newsletter::all();
        return view("adminNewsletter", compact("newsletter"));
    }
}
