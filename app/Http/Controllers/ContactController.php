<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactusMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contactus.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|min:10|max:255',
        ]);

        Mail::to('servicios163@gmail.com')->send(new ContactusMailable($request->all()));

        session()->flash('info', 'Mensaje enviado con éxito');

        return redirect()->route('contactus.index');
    }
}
