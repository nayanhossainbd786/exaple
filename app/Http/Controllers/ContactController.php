<?php

namespace App\Http\Controllers;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



   public function index()
   {
      return view('contact');
   }
   public function contact(Request $request)
   {

    // $name=$request->firstName .','.$request->lastName;
   
     Contact::insert([
         'firstName'=> $request->firstName,
         'lastName'=> $request->lastName,
         'email'=> $request->email,
         'dob'=> $request->dob,
         'presentAddress'=> $request->presentAddress,
         'streetOne'=> $request->streetOne,
         'cityOne'=> $request->cityOne,
         'zipOne'=> $request->zipOne,
         'countryOne'=> $request->countryOne,
         'permanantAddress'=> $request->permanantAddress,
         'streetTwo'=> $request->streetTwo,
         'zipTwo'=> $request->zipTwo,
         'countryTwo'=> $request->countryTwo,
         'homePhone'=> $request->homePhone,
         'officePhone'=> $request->officePhone,
         'personalPhone'=> $request->personalPhone,
         'created_at'=>Carbon::now(),

     ]);
     return back()->with('status', 'Task was successful!');
   }
   public function edit( $editId)
   {
      $edit=Contact::find($editId);
      return view('edit',compact('edit'));

   }
   public function view($id)
   {
      $view=Contact::find($id);
      return view('view',compact('view'));

   }
   public function update($id,Request $request)
   {

    Contact::find($id)->update([
        'firstName'=> $request->firstName,
        'lastName'=> $request->lastName,
        'email'=> $request->email,
        'dob'=> $request->dob,
        'presentAddress'=> $request->presentAddress,
        'streetOne'=> $request->streetOne,
        'cityOne'=> $request->cityOne,
        'zipOne'=> $request->zipOne,
        'countryOne'=> $request->countryOne,
        'permanantAddress'=> $request->permanantAddress,
        'streetTwo'=> $request->streetTwo,
        'zipTwo'=> $request->zipTwo,
        'countryTwo'=> $request->countryTwo,
        'homePhone'=> $request->homePhone,
        'officePhone'=> $request->officePhone,
        'personalPhone'=> $request->personalPhone,
        'updated_at'=>Carbon::now(),
    ]);
    return redirect('/home')->with('status', 'Task was successful!');
   }
   
   public function delete( $delete)
   {
       Contact::find($delete)->delete();
       return back()->with('success',"Records Deleted;");

   }
}
