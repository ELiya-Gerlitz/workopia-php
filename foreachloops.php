<?php
// $callout = 'hi Guys!!';
// $firstName = 'Netanel';
// $lastName = 'Sirota';

// function inspect($aCrtainLastName){
//     echo '<h1>Hello</h1>';
//     var_dump($aCrtainLastName);
// }
// var_dump("hiiiiiiiiiiiiiiii");
// $array1 = ['Ami', 'Tami', 'Halchu', 'Layam'];
// inspect($lastName)
$indexedArr = array("Jack", "Jill", "Hill");
echo $indexedArr[0];
$associativeArr = array("Jack"=> 35, "Jill"=> 37, "Hill"=>5000);
print_r($associativeArr );
$fruits=[
    ["Apple", "red"],
    ["Orange","orange"],
    ["Banana", "Yellow"]
];
$emp = ['name'=>"John", 'lastName'=> 'Doe', 'email'=> 'JohnD@gmail.com', 'address'=>[
    'city'=>'Jerusalem', 'street'=>'Gordon']
];
$employees = [

    ['name'=>"John", 'lastName'=> 'Doe', 'email'=> 'JohnD@gmail.com', 'address'=>[
        'city'=>'Jerusalem', 'street'=>'Gordon']
    ],

    ['name'=>"Miri", 'lastName'=> 'MiriDoe', 'email'=> 'MiriJohnD@gmail.com', 'address'=>[
    'city'=>'MiriJerusalem', 'street'=>'MiriGordon']
    ],

    ['name'=>"Shiri", 'lastName'=> 'ShiriDoe', 'email'=> 'Shiri@gmail.com', 'address'=>[
        'city'=>'ShiriJerusalem', 'street'=>'ShiriGordon']
        ]

];
// echo $fruits[2][1];


// echo "Jack's age: " . $associativeArr["Jack"] . "<br>";

// function inspect($value){
//     echo '<pre>';
//         var_dump($value) ;
//         '</pre>';
// }
// inspect($associativeArr);
// inspect("Brrrrrrrrrrrrrrrrrrr")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1><?= $callout?>
    </h1> -->
    <h2>Employees array:</h2>
    <?php 
    // echo 'name: ' . $employees['name'] . ', <br> last name : ' . $employees['lastName'] . ', <br> email: ' . $employees['email'] . ', <br>  city: ' . $employees['address']['city'] . ', <br>  street: '. $employees['address']['street'] ;
    ?>
    <pre>
    <?php 
    print_r($fruits)
    ?>
    </pre>

    <!-- <?= "first name: $firstName, Last name: <br/> $lastName" ?> -->
    <?php  
     foreach($associativeArr as $name=>$age){
       echo '<span> name: ' . $name . "age: " . $age .
            '</span>';
    }
    ?>
    <?php 
    foreach($employees as $employee){
echo     '<p> name: ' . $employee['name'] . ', <br> last name : ' . $employee['lastName'] . ', <br> email: ' . $employee['email'] . ', <br>  city: ' . $employee['address']['city'] . ', <br>  street: '. $employee['address']['street'] . '</p>';

}
    ?>
<!-- plural -->
<ul>
    <?php foreach($employees as $employee):?>
    <?php foreach($employee as $key=>$value) :?>
        <li>
            <?php 
            if(is_array($value)){
                echo  $key . ': <br>' ;
                foreach($value as $subKey=>$subValue){
                // echo $subKey . ": " . $subValue . '<br>';
                echo "<li style='list-style-type: circle; margin-left: 20px;'>{$subKey} : {$subValue}</li>"; /// cool condition. Cool styling of the li which are more indented!!
                } 
            }else{
                    echo $key . ": " . $value;
            }
            ?>
        </li>
    <?php endforeach ;?>
    <?php endforeach ;?>
</ul>
<h3>Second option - without endforeach</h3>

<ul>
    <?php 
    foreach($employees as $employee){
        foreach($employee as $key=>$value) {
            echo ' <li>';
                    if(is_array($value)){
                        echo  $key . ': <br>' ;
                        foreach($value as $subKey=>$subValue){
                        // echo $subKey . ": " . $subValue . '<br>';
                        echo "<li style='list-style-type: circle; margin-left: 20px;'>{$subKey} : {$subValue}</li>"; /// cool condition. Cool styling of the li which are more indented!!
                        } 
                    }else{
                        
                        echo $key . ": " . $value;
                    }
            echo  '</li>';
        }
    }
    ?>
</ul>




<!-- single employee -->
<h3>single employee</h3>

    <ul>
        <?php foreach($emp as $key=>$value) :?>
            <li>
                <?php 
                if(is_array($value)){
                    echo  $key . ': <br>' ;
                    foreach($value as $subKey=>$subValue){
                    // echo $subKey . ": " . $subValue . '<br>';
                    echo "<li style='list-style-type: circle; margin-left: 20px;'>{$subKey} : {$subValue}</li>"; /// cool condition. Cool styling of the li which are more indented!!
                    } 
                }else{
                    
                     echo $key . ": " . $value;
                }
                ?>
            </li>
        <?php endforeach ;?>
    </ul>







<!-- another option to get the VERY SAME RESULT...!:-->
    <ul>
        <?php foreach($emp as $key=>$value) {
            echo ' <li>';
                 if(is_array($value)){
                     echo  $key . ': <br>' ;
                     foreach($value as $subKey=>$subValue){
                     // echo $subKey . ": " . $subValue . '<br>';
                     echo "<li style='list-style-type: circle; margin-left: 20px;'>{$subKey} : {$subValue}</li>"; /// cool condition. Cool styling of the li which are more indented!!
                     } 
                 }else{
                     
                      echo $key . ": " . $value;
                 }
            echo  '</li>';
        }
        ?>
    </ul>
</body>
</html>