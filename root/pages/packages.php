<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>
<body>
    <?php
        include "../sections/header.html";
    ?>
    <div class="container-packages">
        <div class="categori-packages">
            <h1>Categori</h1>
            <div class="flexholder-packages">
            <div><input type="checkbox"> <label for="a">Circle products</label></div>
            <div><input type="checkbox"> <label for="">Health care</label></div>
            <div><input type="checkbox"> <label for="">Education</label></div>
            </div>
        </div>
        <div class="rightsection-packages">
            <h1>Our Collection Of Packages</h1>
            <div class="searchbar-packages">
            <input type="search" placeholder=" Search An Item" >
            </div>
            <p>Below you can find all products we have</p>
        </div>
        <div class="first-packages pic-packages"> <a href="../pages/product-workspace-large.php"><img src="../images/first.jpg" alt="workspace"></a><p>Circle Workspace</p> </div>
        <div class="second-packages pic-packages"> <a href="../pages/product-dots-large.php"><img src="../images/second.jpg" alt="circledots"></a><p>Circle D.O.T.S</p> </div>
        <div class="third-packages pic-packages"> <a href="../pages/products_healthcare.php"><img src="../images/third.jpg" alt="healthcare"></a><p>Health Care</p> </div>
        <div class="forth-packages pic-packages"> <a href="../pages/products_education.php"><img src="../images/image.jpg" alt="Education"></a><p>Education</p> </div>
    </div>
    <?php
        include "../sections/footer.html";
    ?>
</body>
</html>