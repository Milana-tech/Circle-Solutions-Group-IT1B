<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <script src="http://localhost/Milana-tech-Circle-Solutions-Group-IT1B/root/scripts/header.js"></script>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>

<body>
    <?php
    include "../sections/header.html";
    ?>
    <div class="container-packages">
        <div class="category-packages">
            <h1>Category</h1>
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
        <div class="items-section-packages">
            <?php
            //packages are rendered dynamically using this template
            //
            // <div class="item-packages">
            // <a href="../pages/product-workspace-large.php">
            //     <img src="../images/first.jpg" alt="workspace">
            // </a>
            // <p>Circle Workspace</p>
            // </div>

            $pageNameArray = ["product-workspace-small.php", "product-workspace-large.php", "product-dots-small.php", "product-dots-large.php", "products-healthcare.php", "products-education.php"];
            $imgNameArray = ["first.jpg", "first.jpg", "second.jpg", "second.jpg", "third.jpg", "image.jpg"];
            $titleArray = ["Circle Workspace for small companies", "Circle Workspace for large companies", "Circle D.O.T.S for small companies", "Circle D.O.T.S. for large companies", "Healthcare", "Education"];
            
            $priceArray = ["", "", "", "", "", ""];
            //prices can be displayed in under the title of the package by giving them a value
            // $priceArray = ["140,00&#8364/month", "760,00&#8364/month", "180,00&#8364/month", "799,00&#8364/month", "", ""];



            function createProductHref($pageName)
            {
                return "./$pageName";
            }

            function createImagePath($imageName)
            {
                return "../images/$imageName";
            }

            function createAltText($text)
            {
                return "image for $text";
            }

            function createPriceParagraph($price)
            {
                if (!$price == null) {
                    if (strlen($price) > 0) {
                        return "<p>$price</p>";
                    }
                }
                return "";
            }


            function createPackageItem($href, $imageSrc, $altText, $title, $price)
            {
                $priceParagraph = createPriceParagraph($price);
                $packageString = "
                <div class='item-packages'>
                    <a href='$href'>
                        <img src='$imageSrc' alt='$altText'>
                        <div>
                            <p>$title</p>
                            $priceParagraph
                        </div>
                    </a>
                </div>
            ";
                return $packageString;
            }

            for ($index = 0; $index < count($titleArray); $index++) {
                $href = createProductHref($pageNameArray[$index]);
                $imageSrc = createImagePath($imgNameArray[$index]);
                $altText = createAltText($titleArray[$index]);
                $title = $titleArray[$index];
                $price = $priceArray[$index];
                echo createPackageItem($href, $imageSrc, $altText, $title, $price);
            }
            ?>
        </div>
    </div>
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>