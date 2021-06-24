<!-- this page contains a general overview of all records of the Student entity in a table -->

<h2>Students</h2>

<!-- Form for addig a new student in DB -->
<!-- !!!!! Must  look into this later ->on page refresh duplicate entries -->

<form action="" method="post">
  
    <label>Name</label>
    <input type="text" name="name">
    <label>Email</label>
    <input type="text" name="email">
    <label>Class ID</label>
    <input type="text" name="classId">
    <button type="submit" name="save">Save student</button>
</form>

<table>
    <tr>
        <td>Student Id</td>
        <td>Student name</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
 
    <?php foreach($students as $student)
    {
       
        echo "<tr>";
        echo "<td> {$student->getId()} </td>";
        echo "<td> {$student->getName()} </td>";

        
        echo "<td> <form action='?page=updateStudent.php' method='post'> <button type='submit' name='update' value={$student->getId()}> Update </button></form> </td>";

        // not sure if I need the deleteStudent.php page at this point. I will leave it here for later to consider
        echo "<td> <form action='deleteStudent.php' method='post'> <button type='submit' name='id' value={$student->getId()}> Delete </button></form> </td>";
    }
    ?>
</table>

