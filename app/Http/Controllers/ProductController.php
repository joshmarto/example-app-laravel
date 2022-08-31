<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;

    use App\Models\ViewFunctions;


    class ProductController extends BaseController
    {
        function get( $category, $product ){

            $basicVars = ViewFunctions::basicNeeds('product', $category, $product);

            return view('mis-views.product-view', $basicVars);
        }
    }

?>