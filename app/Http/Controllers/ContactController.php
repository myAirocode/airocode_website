<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInquiry;
use App\Models\Inquiry;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:100',
            'mobile'   => ['required', 'regex:/^[6-9]\d{9}$/'],
            'email'    => 'required|email:rfc,dns|max:255',
        ]);

        try {
            // Try to save to database
            ContactInquiry::create($request->only(['fullname', 'whatsapp', 'email', 'message']));
        } catch (QueryException $e) {
            // Save to fallback JSON file if DB fails
            $this->saveToJson('contact_fallback.json', $request->only(['fullname', 'whatsapp', 'email', 'message']));
            Log::error('DB insert failed (ContactInquiry): ' . $e->getMessage());
        }

        // Return success message always
        return redirect()->back()->with([
            'success'  => 'Your enquiry has been submitted successfully!',
            'phone'    => env('CONTACT_PHONE'),
            'whatsapp' => env('CONTACT_WHATSAPP'),
            'email'    => env('CONTACT_EMAIL')
        ]);
    }

    public function submit(Request $request)
    {
        logger($request->all());

        $request->validate([
            'fullname'          => 'required|string|max:255',
            'email'             => 'required|email:rfc,dns|max:255',
            'whatsapp'          => ['required', 'regex:/^[6-9]\d{9}$/'],
            'college_name'      => 'nullable|string|max:255',
            'address'           => 'required|string|max:500',
            'program_type'      => 'required|string|max:255',
            'duration'          => [
                'nullable','string','max:255',
                Rule::requiredIf(fn () => in_array($request->program_type, ['internship','training'])),
            ],
            'course'            => [
                'nullable','string','max:255',
                Rule::requiredIf(fn () => $request->program_type === 'course'),
            ],
            'education'         => 'required|string|max:255',
            'preferred_location'=> 'required|string|max:255',
            'batchdays'         => 'required|string|max:255',
            'batchtiming'       => 'required|string|max:255',
            'course_fee'        => 'nullable|numeric|min:0',
            'message'           => 'nullable|string|max:1000',
        ]);

        try {
            // Normal DB save
            Inquiry::create($request->only([
                'fullname', 'email', 'whatsapp', 'college_name', 'address',
                'program_type', 'duration', 'course', 'education',
                'preferred_location', 'batchdays', 'batchtiming', 'course_fee', 'message'
            ]));
        } catch (QueryException $e) {
            // Fallback to JSON file
            $this->saveToJson('enrollment_fallback.json', $request->all());
            Log::error('DB insert failed (Inquiry): ' . $e->getMessage());
        }

        return back()->with('success', 'Your enrollment has been submitted successfully!');
    }

    /**
     * Fallback method — append data to a JSON file safely
     */
    private function saveToJson($filename, $data)
    {
        $path = storage_path('app/' . $filename);
        $existing = [];

        if (file_exists($path)) {
            $json = file_get_contents($path);
            $existing = json_decode($json, true) ?? [];
        }

        $existing[] = [
            'data' => $data,
            'saved_at' => now()->toDateTimeString()
        ];

        file_put_contents($path, json_encode($existing, JSON_PRETTY_PRINT));
    }
}
