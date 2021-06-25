<?php require 'View/includes/header.php'?>
<section>
<a href="?page=students">Students</a>
<a href="?page=teachers">Teachers</a>
<a href="?page=schoolClasses">Classes</a>

<form action="" method="post">
  
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $selectedSchoolClass->getName() ?>">
    <label>Email</label>
    <input type="text" name="location" value="<?php echo $selectedSchoolClass->getLocation() ?>">
    <label>Class ID</label>
    <input type="text" name="teacherId" value="<?php echo $selectedSchoolClass->getTeacherId() ?>">
    <input type="number" name="id" hidden value="<?php echo $id ?>">
    <button type="submit" name="submitupdate" >Update Class</button>
</form>

</section>
