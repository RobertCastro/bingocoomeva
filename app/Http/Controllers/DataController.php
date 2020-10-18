<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Data;


class DataController extends Controller
{
    public function index()
    {
        // $data = [
        //     'name' => 'Robert',
        //     'lastname' => 'Castro'
        // ];

        // $data = Data::selectRaw('id,name')->get()->toArray();
        // $data = Data::all();
        // $data = array_reverse($data);

        return Inertia::render('Dashboard', [
            "datos" => Data::all()
        ]);
    }

    public function create()
    {
    }

    public function delete()
    {
    }

    public function edit()
    {
    }
}
