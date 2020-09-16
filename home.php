
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
        session_start();

        if (empty($_SESSION['userdata'])) {
            header("LOCATION:index.html");
        }else{
            echo "<h1 class='title-in'>welcome</h1>"."<br>";
        }
?>
<?php
  $posts =[
    ['title' =>'poste one', 'artical'=>'I LOVE WATERMEALON'],
    
    ['titel'=>'poste two','artical'=>'I LOVE APPLE'],
            
    ['titel'=>'poste three','artical'=>'I LOVE PEER'],
    
    ['titel'=>'poste four','artical'=>'I LOVE MANGO']

  ];
?>

<div class="container">
    <?php
        foreach($posts as $key => $value){
            foreach($value as $k => $v){
                print "<h1>" .$v. "</h1>" ."<hr>"."<br>";
            }
        }
    ?>
           
    <button class="but"><a  href='logout.php'>logout</a></button>      
</div>
</body>
</html>