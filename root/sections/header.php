<div class="header" id="navbar">
    <div>
        <a href="./index.php">
            <img src="../images/animation.gif"
                alt="Circle Solutions logo" class="logo">
        </a>
        <form action="GET" class="searchbar large">
            <input type="search" placeholder="search">
            <a href="./faq.php">
                <img src="../images/searchIcon.png"
                    alt="Search icon" class="icon">
            </a>
        </form>
        <button class="navMenuBtn" onclick="expandedMenuStateChange()">
            <img src="../images/menuBtnIcon.png"
                alt="Expand navigation menu">
        </button>
        <ul>
            <?php
            if ($_SESSION['loggedIn'] == true) {
            } else {
                echo "
                    <li>
                        <a href='./login.php'>login</a>
                    </li>
                    ";
            }
            ?>
            <li>
                <a href="./contact-us.php">contact
                    us</a>
            </li>
            <li>
                <a class="noBorder"
                    href="./about-us.php">about us</a>
            </li>
        </ul>
        <?php
        if ($_SESSION['loggedIn'] == true) {
            echo '
                    <button class="userMenuDropdownBtn" onclick="expandedUserStateChange()" id="userMenuDropdownBtn">
                        <img src="../images/userIcon.png" alt="User icon" class="icon">
                    </button>';
        } else {
            echo '
                    <button>
                    <a href="login.php" class="userMenuDropdownBtn">
                        <img src="../images/userIcon.png" alt="User icon" class="icon">
                    </a></button>
                    ';
        }

        ?>

        <div class="userInfo">
            <div class="profile">
                <img src="../images/userProfile.png"
                    alt="Settings" class="icon">
                <div>
                    <p><b>user</b></p>
                    <p>user@mail.com</p>
                </div>
            </div>
            <div>
                <a href="./account-info.php">
                    <img src="../images/settingsIcon.png"
                        alt="Settings" class="icon">
                    profile settings
                </a>
            </div>
            <div>
                <a href="./faq.php">
                    <img src="../images/helpIcon.png"
                        alt="Help" class="icon">
                    help center
                </a>
            </div>
            <div>
                <a href="./sign-out.php">
                    <img src="../images/signOutIcon.png"
                        alt="Sign out" class="icon">
                    sign out
                </a>
            </div>
        </div>
    </div>
    <div class="expandedMenu">
        <ul>
            <li>
                <a class="noBorder"
                    href="./login.php">login</a>
            </li>
            <li>
                <a class="noBorder"
                    href="./contact-us.php">contact
                    us</a>
            </li>
            <li>
                <a class="noBorder"
                    href="./about-us.php">about us</a>
            </li>
        </ul>
    </div>
    <div>
        <form action="GET" class="searchbar" id="compactSearchbar">
            <input type="search" placeholder="search">
            <a href="./faq.php">
                <img src="../images/searchIcon.png"
                    alt="Search icon" class="icon">
            </a>
        </form>
    </div>
</div>