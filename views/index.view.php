<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <!-- <form>
        <p>id:</p><input name='id' value='<?=($_GET["id"] ?? "") ?>'/>
        <p>category:</p><input name='cat_name' value='<?=($_GET["cat_name"] ?? "")?>'/>
        <br/> <br/>
        <button>Submit</button>
    </form>

    <h1> Posts </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <?=$post["title"]?>
        <?php } ?>

    </ul> -->

    <h1>Pasākumi Cēsīs</h1>

    <li>31.03.2024 13:00 / Lieldienas Cēsīs / Rožu laukums</li>
    <li>04.04.2024. 18:00 / Leļļu teātra izrāde "Gangsteromīte" / Koncertzāle "Cēsis"</li>
    <li>19.07.2024. 08:00 / Cēsu pilsētas svētki 818 / Cēsis</li>



<?php 
require "components/footer.php";
?>