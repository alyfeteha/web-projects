<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use App\Scopes\FilterScope;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $user=auth()->user();
        $companies=$user->companies()->orderBy('name')->pluck('name','id')->prepend('All Companies','');
        // \DB::enableQueryLog();
        $contacts=Contact::latestFirst()->paginate(10);
        // dd(\DB::getQueryLog());
        return view('contacts.index',compact('contacts','companies'));
    }

    public function create(){
        $companies=Company::orderBy('name')->pluck('name','id')->prepend('Select Company','');
        $contact=new Contact;
        return view('contacts.create',compact('companies','contact'));
    }

    public function show($id){
        $contact=Contact::find($id);
        return view('contacts.show',compact('contact'));
    }

    public function store(Request $request){
        $contact=$this->validateData();
        $company=Company::find($request->company_id);
        $company->contacts()->create($contact);
        return redirect()->route('contacts.index')->with('message','Contact has been stored successfully');
    }

    public function edit($id){
        $contact= Contact::findOrFail($id);
        $companies=Company::orderBy('name')->pluck('name','id')->prepend('Select Company','');
        return view('contacts.edit',compact('contact','companies'));
    }

    public function update($id){
        $new_data=$this->validateData();
        $contact= Contact::find($id);
        $contact->update($new_data);
        return redirect()->route('contacts.index')->with('message','Contact has been updated successfully');
    }

    public function destroy($id){
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return back()->with('message','Contact has been deleted successfully');
    }
    private function validateData(){
        return request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'email|required',
            'phone'=>'required',
            'address'=>'required',
            'company_id'=>'required|exists:companies,id'
        ]);
    }
}
