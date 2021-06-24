<?php require 'View/includes/header.php'?>
<section>

<form action="" method="post">
  
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $selectedTeacher->getName() ?>">
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $selectedTeacher->getEmail() ?>">
    <label>Class ID</label>
    <input type="text" name="classId" value="<?php echo $selectedTeacher->getClassId() ?>">
    <input type="number" name="Id" hidden value="<?php echo $id ?>">
    <button type="submit" name="save" >Update teacher</button>
</form>

</section>
