<?php 

class Cars{
// properties
    public $color;
    public $brands;
    public $year_model;

// methods constructor
public function __constract($color , $brands, $year_model){

    $this->$color = $color;
    $this->$brands = $brands;
    $this->$year_model = $year_model;
}
// method 
public function Color($color , $brands){
    return "this color is " .$color ."this brands is ". $brands;
}
}
?>

$oode = new Cars('red','odee', 2022);
$hunda = new Cars('blue' ,'hunda',2023);
$fiat = new Cars('black' , 'fiat' ,2024);

echo get_class_vars(Cars);
echo get_class_methods.Cars();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>