<?php

namespace App\Http\Controllers;

use App\Events\ContactCreatedEvent;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('contact.index');
    }

    public function re()
    {
        dd('OK Redirection');
        // return redirect()->action(
        //     [ContactController::class, 'index']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        $contact = Contact::create($request->all());
  
        event(new ContactCreatedEvent($contact));
        
        // return redirect()->action(
        //     [ContactController::class, 'index']);
        return redirect()->back()
                         ->with(['success' => 'Merci de nous contacter.']);

        // return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
