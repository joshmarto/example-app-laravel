<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;


    class LoginController extends BaseController
    {
        function index(){

            $users = [
                'luis' => ['password'=>'code', 'name' => 'Luis Déleon'],
                'maria' => ['password'=>'marie', 'name' => 'Maria Ana'],
                'josue' => ['password'=>123, 'name' => 'Josue Martinez'],
            ];

            return view('mis-views.login-view', [
                'isLoggedIn' => false,
                'location' => 'login',
                'users' => $users,
            ]);
        }
    }

?>