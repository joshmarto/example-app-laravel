<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;


    class ContactController extends BaseController
    {
        function index(){
            return view('mis-views.contact-view', [
                'isLoggedIn' => false,
                'location' => 'contact',
            ]);
        }
    }

?>