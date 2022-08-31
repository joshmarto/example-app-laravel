<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;

    use App\Models\ViewFunctions;


    class CategoryController extends BaseController
    {
        function get( $category ){

            $basicVars = ViewFunctions::basicNeeds('category', $category, false);

            return view('mis-views.category-view', $basicVars);
        }
    }

?>