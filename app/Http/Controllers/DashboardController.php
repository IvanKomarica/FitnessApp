<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data =
        [
            'fname' => 'Amitav',
            'lname' => 'Roy'
        ];

        return Inertia::render('dashboard/Index', $data);
    }
}
