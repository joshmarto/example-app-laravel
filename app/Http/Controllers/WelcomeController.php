<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;


    class WelcomeController extends BaseController
    {
        function index(){
            return view('mis-views.welcome-view', [
                'isLoggedIn' => true,
                'location' => 'welcome',
                'user_name' => 'Josue',
            ]);
        }
    }

?>