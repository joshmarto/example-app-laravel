<?php


    namespace App\Http\Controllers;


    use Illuminate\Routing\Controller as BaseController;


    class ProductController extends BaseController
    {
        function get( $category, $product ){

            $ropa = [
                'camisa formal' => [ 'nombre'=>'Camisa formal', 'descripcion'=>'Camisa para ocasiones formales', 'precio'=>100 ],
                'Pantalon de vestir' => [ 'nombre'=>'Pantalon de vestir', 'descripcion'=>'Camisa para ocasiones formales', 'precio'=>100 ],
                'camisa formal' => [ 'nombre'=>'Camisa formal', 'descripcion'=>'Pantalon para ocasiones formales', 'precio'=>150 ],
                'Vestido de gala' => [ 'nombre'=>'Vestido de gala', 'descripcion'=>'Vestido para ocasiones formales', 'precio'=>800 ],
                'Pijama' => [ 'nombre'=>'Pijama', 'descripcion'=>'Pijame para ocasiones dormir comodamente', 'precio'=>175 ],
            ];
            $zapatos = [
                'Converse' => [ 'nombre'=>'Converse', 'descripcion'=>'Los converse mas recientes y a la moda aqui', 'precio'=>500 ],
                'Adidas' => [ 'nombre'=>'Adidas', 'descripcion'=>'Para jugar esos partidos con la calidad de Messi', 'precio'=>750 ],
                'Nike' => [ 'nombre'=>'Nike', 'descripcion'=>'Para jugar esos partidos con la calidad de Cristiano Ronaldo', 'precio'=>690 ],
                'Puma' => [ 'nombre'=>'Puma', 'descripcion'=>'Para tus deportes favoritos', 'precio'=>350 ],
            ];
            $comestibles = [
                'Frutas' => [ 'nombre'=>'Frutas', 'descripcion'=>'Las mejores frutas', 'precio'=>10 ],
                'Verduras' => [ 'nombre'=>'Verduras', 'descripcion'=>'Los mas frescos vegetales', 'precio'=>5 ],
                'Carne' => [ 'nombre'=>'Carne', 'descripcion'=>'La mejor carne importada. Para todas tus comidad', 'precio'=>50 ],
                'Granos' => [ 'nombre'=>'Granos', 'descripcion'=>'Los granos mas selectos para una dieta balanceada', 'precio'=>9 ],
            ];
            $electrodomesticos = [
                'Laptop' => [ 'nombre'=>'Laptop', 'descripcion'=>'La computadora portatil de mayor conveniencia en el mercado', 'precio'=>15000 ],
                'Microondas' => [ 'nombre'=>'Microondas', 'descripcion'=>'Un horno de microondas moderno y confiable', 'precio'=>1500 ],
                'Lavadora' => [ 'nombre'=>'Lavadora', 'descripcion'=>'La lavadora con todas las funciones necesarias actualmente', 'precio'=>8000 ],
                'Refrigeradora' => [ 'nombre'=>'Refrigeradora', 'descripcion'=>'Para que conserves tus comestibles con tecnologia de vanguardia', 'precio'=>100 ],
            ];
            $tupper = [
                'Jarron' => [ 'nombre'=>'Jarron', 'descripcion'=>'Para guardar y servir tus bebidas con comodidad', 'precio'=>160 ],
                'Uvas' => [ 'nombre'=>'Uvas', 'descripcion'=>'Contenedor con forma de uvas', 'precio'=>90 ],
                'Clasico' => [ 'nombre'=>'Clasico', 'descripcion'=>'Contenedor clasico para almacenar cualquier tipo de comida', 'precio'=>120 ],
                'Cubiertos' => [ 'nombre'=>'Cubiertos', 'descripcion'=>'Porque son indispensables al comer', 'precio'=>45 ],
            ];
            $juegosDeMesa = [
                'Monopoly' => [ 'nombre'=>'Monopoly', 'descripcion'=>'El clasico juego de compra y venta de propiedades', 'precio'=>150 ],
                'Uno' => [ 'nombre'=>'Uno', 'descripcion'=>'Si te atreves a jugar UNO, lo tenemos para ti', 'precio'=>70 ],
                'Ajedrez' => [ 'nombre'=>'Ajedrez', 'descripcion'=>'Eres mas de probar tu estrategia? Este es el juego para ti', 'precio'=>150 ],
                'Jenga' => [ 'nombre'=>'Jenga', 'descripcion'=>'No dejes caer la torre con Jenga', 'precio'=>100 ],
            ];
            $libros = [
                'Constitucion' => [ 'nombre'=>'Constitucion', 'descripcion'=>'Constitucion Politica de la Republica de Guatemala', 'precio'=>45 ],
                'Juegos' => [ 'nombre'=>'Juegos del Hambre', 'descripcion'=>'La coleccion de libros', 'precio'=>150 ],
                'Comics' => [ 'nombre'=>'Comics', 'descripcion'=>'Los comics mas exclusivos de Marvel & DC', 'precio'=>50 ],
                'Notas' => [ 'nombre'=>'Notas', 'descripcion'=>'Cuaderno de notas para recordar los datos mas importantes', 'precio'=>15 ],
            ];
            $instrumentosMusicales = [
                'Teclado' => [ 'nombre'=>'Teclado', 'descripcion'=>'Un teclado que combina la mejor calidad y precio', 'precio'=>7500 ],
                'Guitarra' => [ 'nombre'=>'Guitarra', 'descripcion'=>'Eres un amante de la guitarra, esta es ideal para ti', 'precio'=>4500 ],
                'Bateria' => [ 'nombre'=>'Bateria', 'descripcion'=>'Si las percusiones son lo tuyo, esta bateria es lo que estas buscando', 'precio'=>5000 ],
                'Saxofon' => [ 'nombre'=>'Saxofon', 'descripcion'=>'Ese sonido unico que hace que todo cambie, disponible para ti', 'precio'=>1500 ],
            ];
            $herramientas = [
                'Martillo' => [ 'nombre'=>'Martillo', 'descripcion'=>'El siempre confiable martillo con un nuevo diseño', 'precio'=>90 ],
                'Barreno' => [ 'nombre'=>'Barreno', 'descripcion'=>'Para instalar y desarmar todos los muebles que quieras', 'precio'=>780 ],
                'Serrucho' => [ 'nombre'=>'Serrucho', 'descripcion'=>'Indispensable si quieres trabajar algo de carpinteria', 'precio'=>50 ],
                'Pulidora' => [ 'nombre'=>'Pulidora', 'descripcion'=>'Usa el disco que más te convenga y corta lo que necesites', 'precio'=>540 ],
            ];

            $products = [
                'ropa' => $ropa,
                'zapatos' => $zapatos,
                'comestibles' => $comestibles,
                'electrodomesticos' => $electrodomesticos,
                'tupper' => $tupper,
                'juegosDeMesa' => $juegosDeMesa,
                'libros' => $libros,
                'instrumentosMusicales' => $instrumentosMusicales,
                'herramientas' => $herramientas,
            ];


            $producto = $products[$category][$product];

            $icon = "../../img/comprobacion-de-lista.png";
            $title = "Categorias - Cool Store GT";
            $style = "../../css/main.css";
            $location = 'categories';
            $isLoggedIn = false;

            return view('mis-views.product-view', [
                'category' => $category,
                'product' => $product,
                'icon' => $icon,
                'title' => $title,
                'style' => $style,
                'location' => $location,
                'isLoggedIn' => $isLoggedIn,
                'producto' => $producto,
            ]);
        }
    }

?>