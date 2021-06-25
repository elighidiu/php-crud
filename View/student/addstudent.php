
<?php require 'View/includes/header.php' ?>

<section>

    <form action="" method="post">

        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="text" name="email">
        <label>Class</label>
        <select name="classId">
                    <?php foreach ($schoolClasses as $schoolClass) : ?>
                        <option value="<?php echo $schoolClass->getId(); ?>"><?php echo $schoolClass->getName(); ?></option>
                    <?php endforeach ?>
                </select>
        <button type="submit" name="insert">Save student</button>
    </form>

</section>