<?php require 'View/includes/header.php'?>
<section>
<a href="?page=students">Students</a>
<a href="?page=teachers">Teachers</a>
<a href="?page=schoolClasses">Classes</a>

<form action="" method="post">
  
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $selectedStudent->getName() ?>">
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $selectedStudent->getEmail() ?>">
    <label>Class ID</label>
    <input type="text" name="classId" value="<?php echo $selectedStudent->getClassId() ?>">
    <input type="number" name="id" hidden value="<?php echo $id ?>">
    <button type="submit" name="submitupdate" >Update student</button>
</form>

</section>
