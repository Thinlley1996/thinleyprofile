<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class FeedbackFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('frontend.feedback');
      }

      // Store Contact Form data
      public function ContactUsForm(Request $request) {

          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'comments' => 'required'
           ]);

        //   //  Store data in database
        //   Feedback::create($request->all());

          //  Send mail to admin
          \Mail::send('frontend.mail', array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'comments' => $request->get('comments')

          ), function($message) use ($request){
              $message->from($request->email);
              $message->to('thinley1996.bhutan@gmail.com', 'Admin')->subject('From User');
          });
          return back()->with('success', 'We have received your message and would like to thank you for comments to us.');
      }
}
