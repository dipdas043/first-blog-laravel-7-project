<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requet;
use App\Http\Controllers\Controller;
use App\Contact;
use Framework\Sessions;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'name' => 'required|max:32',
            'email'  => 'required',
            'subject' => 'required|max:50',
            'message'  => 'required|min:50'
        ));
        //store in the database
        $contacts = new Contact;

        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->subject = $request->name;
        $contacts->message = $request->message;

        $contacts->save();

       //passes massege after save
       $request->session()->flash('success', 'The post was successfully save!');

        //redirect to another page
        return redirect()->route('messages.show', $contacts->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts = Contact::find($id);
        return view('messages.show')->withContact($contacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
