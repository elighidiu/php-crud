<?php require 'View/includes/header.php' ?>


<section>
    <a href="?page=students">Students</a>
    <a href="?page=teachers">Teachers</a>
    <a href="?page=schoolClasses">Classes</a>
    <form action="" method="post">

        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="text" name="email">
        <label>Class ID</label>
        <input type="text" name="classId">
        <button type="submit" name="insert">Save student</button>
    </form>

</section>