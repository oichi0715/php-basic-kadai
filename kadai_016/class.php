<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎　kadai_016</title>
</head>
<body>
    <p>
        <?php
        class Food {

            private $name;
            private $price;

            private function show_price(){
                echo $this->name .'<br>';
                echo $this->price .'<br>';
            }
        }

        class Animal{

            private $name;
            private $height;
            private $weight;
            
            
            private function show_price(){
                echo $this->name .'<br>';
                echo $this->height .'<br>';
                echo $this->weight .'<br>';
            }    
        }

        
        ?>
    </p>
    
</body>
</html>