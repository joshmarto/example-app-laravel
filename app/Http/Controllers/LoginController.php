<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;

    use App\Models\ViewFunctions;


    class LoginController extends BaseController
    {
        function index(){

            $basicVars = ViewFunctions::basicNeeds('login', false, false);

            return view('mis-views.login-view', $basicVars);
        }
    }

?>