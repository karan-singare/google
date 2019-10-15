<?php
    if(isset($_GET['term']) && $_GET['term'] != ""){
        $term = $_GET['term'];
    }else {
        # stops the execution of every code and displsy this message
        exit("You msut enter the search term");
    }

    $type = isset($_GET['type']) ? $_GET['type'] : "sites";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome to Google</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header_content">
                <div class="logo_container">
                    <a href="index.php">
                        <img src="assets/images/google-logo.svg" alt="logo" class="searh_page_logo">
                    </a>
                </div>
                <div class="search_container">
                    <form class="" action="search.php" method="get">
                        <div class="search_bar_container">
                            <input type="text" name="term" value="" class="search_box">
                            <button type="submit" name="button" class="search_bar_button">
                                <img src="assets/images/search.svg" alt="search logo">
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tabs_container">
                <ul class="tab_list">
                    <li class='<?php echo $type == "sites" ? "active" : ""; ?>'>
                        <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>Sites</a>
                    </li>
                    <li class='<?php echo $type == "images" ? "active" : ""; ?>'>
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
