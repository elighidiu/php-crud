<?php require 'View/includes/header.php' ?>
<section>

<form action="" method="post">

    <label>Name</label>
    <input type="text" name="name">
    <label>Location</label>
    <input type="text" name="location">
    <label>Teacher Name</label>
    <select name="teacherId">
                    <?php foreach ($teachers as $teacher) : ?>
                        <option value="<?php echo $teacher->getId(); ?>"><?php echo $teacher->getName(); ?></option>
                    <?php endforeach ?>
                </select>
    <button type="submit" name="insert">Save class</button>
</form>

</section>