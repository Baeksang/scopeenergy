<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
    //
    public function index()
    {
        return view('devices.index');
    }
}
