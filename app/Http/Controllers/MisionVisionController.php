<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;


    class MisionVisionController extends BaseController
    {
        function index(){
            return view('mis-views.misionVision-view', [
                'isLoggedIn' => false,
                'location' => 'misionVision',
            ]);
        }
    }

?>