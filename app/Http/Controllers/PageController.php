<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail; // Add this line
use App\Mail\ContactMail; // Add this line

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function services()
    {
        return view('services');
    }
    public function about()
    {
        return view('about');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function contact()
    {
        return view('contact');
    }
    public function websitedesign()
    {
        return view('websitedesign');
    }
    public function websitedevelopment()
    {
        return view('websitedevelopment');
    }
    public function graphicdesign()
    {
        return view('graphicdesign');
    }
    public function socialmediamarketing()
    {
        return view('socialmediamarketing');
    }
    public function searchengineoptimization()
    {
        return view('searchengineoptimization');
    }
    public function appdevelopment()
    {
        return view('appdevelopment');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }
    public function videoediting()
    {
        return view('videoediting');
    }
    public function animation()
    {
        return view('animation');
    }
    public function illustration()
    {
        return view('illustration');
    }
    public function ecommerce()
    {
        return view('ecommerce');
    }
    public function youtubemonetization()
    {
        return view('youtubemonetization');
    }
    public function copywriting()
    {
        return view('copywriting');
    }
    public function contentcreation()
    {
        return view('contentcreation');
    }
    public function gamedevelopment()
    {
        return view('gamedevelopment');
    }
    public function portfolio1()
    {
        return view('portfolio1');
    }
    public function branding()
    {
        return view('branding');
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];

        Mail::to('rizwan.sparklab@gmail.com')->send(new ContactMail($details));
        return back()->with(['message' => 'Email successfully sent!']);
    }
}