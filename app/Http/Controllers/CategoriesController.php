<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;
    
    use App\Models\ViewFunctions;


    class CategoriesController extends BaseController
    {
        function index(){

            $basicVars = ViewFunctions::basicNeeds('categories', false, false);

            return view('mis-views.categories-view', $basicVars);
        }
    }

?>