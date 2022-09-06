<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="append.php" method="post">
        <textarea name="text"></textarea><br>
        Prepend:<input type="text" name="prepend"><br>
        Append:<input type="text" name="append"><br>
               <button>Summit</button>
    </form>
    
     <pre>
        <?php var_dump($_POST); ?>
     </pre>
        <?php

            if(!empty($_POST)){
    
                $text=$_POST['text'];
                $prepend=$_POST['prepend'];
                $append=$_POST['append'];

                
                echo $prepend . $append;
            }
        ?>
    
</body>
</html>
</body>
</html>