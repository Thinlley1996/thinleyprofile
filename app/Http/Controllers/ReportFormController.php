<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ReportFormController extends Controller
{
       // Create Contact Form
    public function index()
    {
      return view('frontend.reportform');
    }

    // Store Contact Form data
    public function send(Request $request) {
         // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'locations' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descriptions' => 'required'
         ]);
  
          $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'locations' => $request->get('locations'),
            'image' => $request->file('image'),
            'descriptions' => $request->get('descriptions'),
          ];
          $to = 'thinley1996.bhutan@gmail.com';
          \Mail::to($to)->send(new \App\Mail\report($data));
         return back()->with('success', 'We have received your message and would like to thank you for reporting to us.');
    }
}
