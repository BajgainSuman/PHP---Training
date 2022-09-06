<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String User</title>
</head>
<body>
<form action="string.php" method="post">
        <textarea name="text"></textarea><br>
        <input placeholder="Find" type="text" name="find"><br>
        <input placeholder="Replace" type="text" name="replace"><br>
        <button>Find & Replace</button>
    </form>
    
     <pre>
        <?php var_dump($_POST); ?>
     </pre>
        <?php

            if(!empty($_POST)){
    
                $text=$_POST['text'];
                $find=$_POST['find'];
                $replace=$_POST['replace'];

                $replaced=str_replace($find,$replace,$text);
                echo $replaced;
            }
        ?>
    
</body>
</html>
</body>
</html>