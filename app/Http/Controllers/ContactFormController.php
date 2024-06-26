<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\ContactForm;
use App\Models\Log;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        if(auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $contactForm = ContactForm::latest()->get();

        return view('contact-form', compact('contactForm'));
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);

        try {
            ContactForm::create($input);

            Log::create([
                'causer_id' => 1,
                'description' => 'received a success submission contact form',
                'target_id' => null
            ]);

        } catch (\Exception $e) {
            info('Error submitting form contact form: '.$e);
            Log::create([
                'causer_id' => 1,
                'description' => 'received a failed submission contact form',
                'target_id' => null
            ]);

        }
 
        return redirect()->back();
    }
}
