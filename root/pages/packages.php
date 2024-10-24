<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://localhost/Milana-tech-Circle-Solutions-Group-IT1B/root/scripts/header.js"></script>
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
                <input type="search" placeholder=" Search An Item">
            </div>
            <p>Below you can find all products we have</p>
        </div>
        <?php
        //packages are rendered dynamically using this template
        //
        // <div class="item-packages">
        // <a href="../pages/product-workspace-large.php">
        //     <img src="../images/first.jpg" alt="workspace">
        // </a>
        // <p>Circle Workspace</p>
        // </div>

        $hrefArray = ["first.jpg","","","","",""];
        $imgNameArray = ["first.jpg","","","","",""];
        $altNameArray = ["workspace","","","","",""];
        $titleArray = ["Circle Workspace for Small Companies","","","","",""];
        $priceArray = ["","","","","",""];

        function createPackageItem($href, $imgName, $altName, $title, $price)
        {
            $packageString = "";
            $packageString .= "<div class='pick-packages'><a href='../pages/images/";
            //add package name for image
            $packageString .= $imgName;
            $packageString .= "' alt='";
            //add package name for alt text
            $packageString .= $altName;
            $packageString .= "'> </a><p>";
            //add package title
            $packageString .= $title;
            $packageString .= "</p></div>";

            return $packageString;
        }
        ?>
        <div class="items-section-packages">

            <div class="first-packages item -packages">
                <a href="../pages/product-workspace-large.php">
                    <img src="../images/first.jpg" alt="workspace">
                </a>
                <p>Circle Workspace</p>
            </div>
            <div class="first-packages item -packages">
                <a href="../pages/product-workspace-large.php">
                    <img src="../images/first.jpg" alt="workspace">
                </a>
                <p>Circle Workspace</p>
            </div>
            <div class="first-packages item -packages">
                <a href="../pages/product-workspace-large.php">
                    <img src="../images/first.jpg" alt="workspace">
                </a>
                <p>Circle Workspace</p>
            </div>
            <div class="first-packages item -packages">
                <a href="../pages/product-workspace-large.php">
                    <img src="../images/first.jpg" alt="workspace">
                </a>
                <p>Circle Workspace</p>
            </div>
            <div class="first-packages item -packages">
                <a href="../pages/product-workspace-large.php">
                    <img src="../images/first.jpg" alt="workspace">
                </a>
                <p>Circle Workspace</p>
            </div>
        </div>
        <!-- 
        <div class="second-packages pic-packages">
            <a href="../pages/product-dots-large.php">
                <img src="../images/second.jpg" alt="circledots">
            </a>
            <p>Circle D.O.T.S</p>
        </div>
        <div class="third-packages pic-packages">
            <a href="../pages/products_healthcare.php">
                <img src="../images/third.jpg" alt="healthcare">
            </a>
            <p>Health Care</p>
        </div>
        <div class="forth-packages pic-packages">
            <a href="../pages/products_education.php">
                <img src="../images/image.jpg" alt="Education">
            </a>
            <p>Education</p>
        </div> -->
    </div>
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>