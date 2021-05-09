<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;


class FormsController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        Mail::send('mails.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('nickquispel@outlook.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect(url()->previous().'#contact')->with('success', 'I have received your message and would like to thank you for writing.');
    }

    public function delete(string $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect('/admin');

    }
}
