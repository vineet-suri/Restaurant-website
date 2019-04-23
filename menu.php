<?php 
    define("TITLE", "Menu of dishes" );
    include('includes/header.php');
?>

<div id="menu-items" class="cf">
    <h1>Our Delicious Menu</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar sem non lectus 
    semper, id imperdiet eros dictum. vel elementum massa. Nunc odio tellus, facilisis vel mi sed, 
    fringilla eleifend neque.<strong>Sed ut ullamco cras luctus magna eu velit mollis porttitor</strong></p>

    <hr>

    <?php
        foreach($dishItems as $dish  => $item) {
    ?>
    
            <ul>
                <li><a href="dish.php?item=<?php echo $dish?>"><?php echo $item["name"]?></a>
                <sup>$</sup><?php echo $item["price"] ?></li>
            </ul>
    <?php }  ?>
        
    <hr>
    
</div> <!--menu-->

<?php 
    include('includes/footer.php');
?>