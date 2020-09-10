<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews = new Contact();
        return view('review');
    }

    public function todo(){
        $reviews = new Contact();
        return view('home', ['reviews' => $reviews->all()]);
        
    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'message' => 'required|min:1|max:100'
        ]);

        $review = new Contact();  
        $review->message = $request->input('message'); 
        $review->save();
        
        return redirect()->route('home');
    }

    public function del($id){
        Contact::find($id)->delete();
        return redirect()->route('home');
    }
}
