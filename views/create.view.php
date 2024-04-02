<?php 
require "components/head.php";
require "components/navbar.php";
?>

<h1>Veido datu vadilāciju</h1>

<form method="POST">
    <label>Title:
        <input name="title" value="<?= $_POST["title"] ?? ""?>"/>
        <?php if (isset($errors["title"])) { ?>
            <p class ="invalid-data"><?php $errors["title"] ?></p>
        <?php } ?>
        </label> 
        <label>Category ID:
            <select name="category-id">
                <option value="1">sport</option>
                <option value="2">music</option>
                <option value="3">food</option>
            </select>
            <?php if (isset($errors["category-id"])) { ?>
            <p class ="invalid-data"><?php $errors["category-id"] ?></p>
        <?php } ?>
        </label>
        <button>save</button>
    </form>

<?php 
require "components/footer.php";
?>