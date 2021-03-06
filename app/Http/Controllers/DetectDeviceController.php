<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class DetectDeviceController extends Controller
{
    public function showDevice()
    {
        $agent = new Agent();

        $platform = $agent->platform();
        $device = $agent->device();
        $version = $agent->version($platform);

        return view('welcome', compact('platform', 'version', 'device'));
    }
}
