<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <form>
        <p>id:</p><input name='id' value='<?=($_GET["id"] ?? "") ?>'/>
        <p>category:</p><input name='cat_name' value='<?=($_GET["cat_name"] ?? "")?>'/>
        <br/> <br/>
        <button>Submit</button>
    </form>

    <h1> Posts </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li><?=$post["title"]?></li>
        <?php } ?>

    </ul>
<?php 
require "components/footer.php";
?>