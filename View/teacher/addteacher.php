<?php require 'View/includes/header.php' ?>
<section>
<form action="" method="post">

    <label>Name</label>
    <input type="text" name="name">
    <label>Email</label>
    <input type="text" name="email">
    <label>Class Name</label>
    <select name="classId">
                    <?php foreach ($schoolClasses as $schoolClass) : ?>
                        <option value="<?php echo $schoolClass->getId(); ?>"><?php echo $schoolClass->getName(); ?></option>
                    <?php endforeach ?>
                </select>

    <button type="submit" name="insert">Save teacher</button>
</form>

</section>