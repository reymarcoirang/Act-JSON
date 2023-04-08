<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $shoes = new stdClass();
    $shoes->shoe = array(
        [ 
            "brand" => "Nike",
            "logo" => "Nike logo.png",
            "models" => [
                array(
                    "img" => "Air_Force1.png",
                    "model" => "Air Force1",
                    "size" => "8.5",
                ),

                array(
                    "img" => "Nike-Air Jordan1.png",
                    "model" => "Air jordan 1",
                    "size" => "9.5",
                ),

                array(
                    "img" => "Nike Zoom.png",
                    "model" => "nike zoom",
                    "size" => "7.5",
                ),

                array(
                    "img" => "Curry 3.png",
                    "model" => "curry 3",
                    "size" => "10.5",
                ),

                array(
                    "img" => "Lebron 12.png",
                    "model" => "lebron12",
                    "size" => "10",
                ),
                array(
                    "img" => "Harden Vol 3.png",
                    "model" => "harden vol 3",
                    "size" => "9",
                ),

            ],
        ],
        //Next brand
        [
            "brand" => "Adidas",
            "logo" => "Adidas logo.jpg",
            "models" => [
                array(
                    "img" => "Adidas Sneakers.png",
                    "model" => "Sneakers",
                    "size" => "8",
                ),


            ],
        ],

        [
            "brand" => "Vans",
            "logo" => "Vans logo.png",
            "models" => [
                array(
                    "img" => "Vans Classic.png",
                    "model" => "Vans Classic",
                    "size" => "9",
                ),


            ],
        ],
        
        [
            "brand" => "Sketchers",
            "logo" => "Skechers logo.png",
            "models" => [
                array(
                    "img" => "Arch Fit Stretch Sketchers.png",
                    "model" => "Arch Fit Stretch",
                    "size" => "9.5",
                ),


            ],
        ],
            

);
         

    $data = json_encode($shoes);
    echo $data;
    
?>
