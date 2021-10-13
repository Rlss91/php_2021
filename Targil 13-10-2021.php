<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targil 13-10-2021</title>
    <style>
        html, body{
            font-size: 2rem;
            padding: 0.5rem;
        }
    </style>
    <script>
        const handleClick = () => {
            let animal1 = document.getElementById('animal1');
            let animal2 = document.getElementById('animal2');
            let animal3 = document.getElementById('animal3');
            if(animal1.checked)
                console.log(animal1.nextSibling.textContent)
            if(animal2.checked)
                console.log(animal2.nextSibling.textContent)
            if(animal3.checked)
                console.log(animal3.nextSibling.textContent)
        }
    </script>
</head>
<body>
    <?php 
    
        echo "<ul>";
        echo "<li>";
        echo "<input type=\"radio\" name=\"animal\" id=\"animal1\" />";
        echo "dog " . rand(1,100);
        echo "</li>";
        echo "<li>";
        echo "<input type=\"radio\" name=\"animal\" id=\"animal2\" />";
        echo "cat " . rand(1,100);
        echo "</li>";
        echo "<li>";
        echo "<input type=\"radio\" name=\"animal\" id=\"animal3\" />";
        echo "parrot " . rand(1,100);
        echo "</li>";
        echo "</ul>";
        echo "<button onclick = \"handleClick()\">submit</button>";
    
    ?>
</body>
</html>