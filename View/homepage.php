<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
<h2>Choose a category</h2>
<!-- <form action="index.php" method="post">
    <input type="submit" name="student" value="Students">
    <input type="submit" name="teacher" value="Teachers">
    <input type="submit" name="schoolClass" value="Classes">
</form> -->
<a href="?page=students">Students</a>
<a href="?page=teachers">Teachers</a>
<a href="?page=schoolClasses">Classes</a>

</section>
<?php require 'includes/footer.php'?>