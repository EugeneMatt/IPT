<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $products = file_get_contents("http://localhost/product/products.php");
    $products = json_decode($products);

    ?>

    <table border = 1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
            </tr>
        </thead>
    <?php
        foreach($products as $products){
            echo '<tr>';
            echo '<td>'.$products->id.'</td>';
            echo '<td>'.$products->name.'</td>';
            echo '<td>'.$products->brand.'</td>';
            echo '</tr>';
        }
    ?>
    </table>    
</body>
</html>