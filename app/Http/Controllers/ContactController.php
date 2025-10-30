<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInquiry;
use App\Models\Inquiry;
use Illuminate\Validation\Rule;

// use App\Mail\ContactInquiryMail;
// use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'fullname' => 'required|string|max:100',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:100',
        ]);

            // Save to database
            $inquiry =ContactInquiry::create($request->only([
                'fullname', 'mobile', 'email', 'message'
            ]));

            // Access values from .env
            $phone = env('CONTACT_PHONE');
            $whatsapp = env('CONTACT_WHATSAPP');
            $email = env('CONTACT_EMAIL');
            $adminEmail = env('ADMIN_EMAIL');

            // Mail::to(config($email))->send(new ContactInquiryMail($inquiry));


            // Redirect back with success message
            return redirect()->back()->with([
                'success' => 'Your enquiry has been submitted successfully!',
                'phone' => $phone,
                'whatsapp' => $whatsapp,
                'email' => $email
            ]);   
    }

            public function submit(Request $request)
            {
                logger($request->all());
                // Validate inputs
           $request->validate([
        'fullname'      => 'required|string|max:255',
        'mobile'        => 'required|string|max:15',
        'email'         => 'required|email|max:255',
        'program_type'  => 'required|string|max:255',

        'course' => [
            'nullable',
            'string',
            'max:255',
            Rule::requiredIf(fn () => $request->program_type === 'course'),
        ],

        'duration' => [
            'nullable',
            'string',
            'max:255',
            Rule::requiredIf(fn () => in_array($request->program_type, ['internship', 'training'])),
        ],

        'education'     => 'required|string|max:255',
        'batchdays'     => 'required|string|max:255',
        'batchtiming'   => 'required|string|max:255',
        'message'       => 'nullable|string|max:1000',
    ]);
        
        $batch = trim(($request->batchdays ? $request->batchdays : '') . ' ' . ($request->batchtiming ? $request->batchtiming : ''));

        // Store into database
        Inquiry::create([
            'fullname'     => $request->fullname,
            'mobile'       => $request->mobile,
            'email'        => $request->email,
            'program_type' => $request->program_type,
            'duration'     => $request->duration,
            'course'       => $request->course,
            'education'    => $request->education,
            'batchdays'    => $request->batchdays,
            'batchtiming'  => $request->batchtiming,
            'message'      => $request->message,
        ]);

        return back()->with('success', 'Your form has been submitted successfully!');
    }

}
