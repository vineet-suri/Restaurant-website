<?php 
    define("TITLE", "Details of dish" );
    include('includes/header.php');

    function strip_bad_chars($input){
        $output = preg_replace("/[^a-zA-Z0-9-]/","", $input);
        return $output;
    }

    if(isset($_GET['item'])){

        $menuItem = strip_bad_chars( $_GET['item'] );
        $dish = $dishItems[$menuItem];
    }
?>
<hr>

    <div id="dish">
        <h1><?php echo $dish["name"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
        <p><?php echo $dish["desc"] ?></p>
        <hr>

        <strong><p>Suggested Beverage: <?php echo $dish["drink"] ?></p></strong>
        <p>Suggested Tip: <sup>$</sup>2.20</p>
        <hr>




    </div> <!--dish-->

    <a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php 
    include('includes/footer.php');
?>