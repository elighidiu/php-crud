<?php require 'View/includes/header.php'?>
<section>
<a href="?page=students">Students</a>
<a href="?page=teachers">Teachers</a>
<a href="?page=schoolClasses">Classes</a>
<form action="" method="post">

    <label>Name</label>
    <input type="text" name="name">
    <label>Location</label>
    <input type="text" name="location">
    <label>Teacher ID</label>
    <input type="text" name="teacherId">
    <button type="submit" name="insert">Save class</button>
</form>

</section>