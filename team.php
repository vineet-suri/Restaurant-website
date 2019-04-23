<?php 
    define("TITLE", "Resturant team" );
    include('includes/header.php');
?>
    <div id="team-members" class="cf">
    <h1>Our Resturant team</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar sem non lectus 
    semper, id imperdiet eros dictum. Morbi mattis augue ut sodales ultrices. Nam id metus 
    mattis magna commodo pharetra vel elementum massa. Nunc odio tellus, facilisis vel mi sed, 
    fringilla eleifend neque.<strong>Sed ut ullamco cras luctus magna eu velit mollis porttitor</strong></p>

    <hr>

    <?php
        foreach($teamMembers as $member) {
    ?>
    
    <div class="member">
                <img src="img/<?php echo $member['img'];?>.png" alt="<?php echo $member['name'];?>">
                <h2><?php echo $member['name'];?></h2>
                <p><?php echo $member['bio'];?></p>
        </div>    

    <?php }  ?>

    </div> <!--team-members-->
    
<?php 
    include('includes/footer.php');
?>