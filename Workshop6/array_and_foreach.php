<?php
    //Array
        //creating and printing array, for loops in PHP
        $party_list =array("cakes","flowers","balloons");
        echo "Purchase list for the party: <br> " . $party_list[0] . ", <br>" . $party_list[1] . "<br>" . $party_list[2] . ".";

        //for
        $array_length = count($party_list);
        echo "<br><br>array length<br>".$array_length;
        echo "<br><br> -- Using For loop -- <br>Puchase list for the party: <br>";
        for ($i = 0; $i <$array_length; $i++){
            echo $party_list[$i];

            if($i < ($array_length-1)){
                echo ', <br>';
            }else{
                echo".";
            }
        }

    //Multi dimensional array
        $parks = array(
            array("Bayfront", '5km', '5 Stars'),
            array("Confederation", '15km', '4.5 Stars'),
            array("Churchill", '2km', '5 Stars'),
        );

        echo '<br><br>Printing Multi dimensional array: <br>Park '.$parks[0][0].": is : ".$parks[0][1]." away, and havint : ".$parks[0][2]." ratings.<br>";
        echo 'Park '.$parks[1][0].": is : ".$parks[1][1]." away, and havint : ".$parks[1][2]." ratings.<br>";
        echo 'Park '.$parks[2][0].": is : ".$parks[2][1]." away, and havint : ".$parks[2][2]." ratings.<br>";
    
    //Associative arrays
    //Replaces indexing with names
    $parks_in_array = array(
        array(
            "name" => "Bayfront", 
            "distance" => '5km', 
            "rating" => '5 Stars'),
        array(
            "name" => "Confederation", 
            "distance" => '15km', 
            "rating" => '4.5 Stars'),
        array(
            "name" => "Churchill", 
            "distance" => '2km', 
            "rating" => '5 Stars'),
    );

    echo "<br> Printing Array:<pre>";
        print_r($parks_in_array);

    echo "</pre>";

    echo "Printing using foreach: <br>";
    foreach($parks_in_array as $value){
        echo 'Park '.$value["name"].": is ".$value["distance"]." away, and having : ".$value["rating"]." ratings.<br>";
    }


?>
