<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class EnviarCorreosController extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Welcome New User',
            'url' => 'https://www.remotestack.io'
        ];

        Mail::to('jhoezrr@gmail.com')->send(new SignUp($details));

        return view('welcomemail');
    }
}
