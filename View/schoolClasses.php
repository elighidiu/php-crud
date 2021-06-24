<!-- this page contains a general overview of all records of the Student entity in a table -->

<h2>School Classes</h2>

<form action="" method="post">
  
    <label>Name</label>
    <input type="text" name="name">
    <label>Location</label>
    <input type="text" name="location">
    <label>Class ID</label>
    <input type="text" name="teacherId">
    <button type="submit" name="save">Save Class</button>
</form>

<table>
    <tr>
        <td>Class Id</td>
        <td>Class Location</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
 
    <?php foreach($schoolClasses as $schoolClass)
    {
       
        echo "<tr>";
        echo "<td> {$schoolClass->getId()} </td>";
        echo "<td> {$schoolClass->getLocation()} </td>";

        // updateStudent.php is where we will update the selected entry. I will create this page later, togeter with createStudent.php
        echo "<td> <form action='updateStudent.php' method='post'> <button type='submit' name='id' value={$schoolClass->getId()}> Update </button></form> </td>";

        // not sure if I need the deleteStudent.php page at this point. I will leave it here for later to consider
        echo "<td> <form action='deleteStudent.php' method='post'> <button type='submit' name='id' value={$schoolClass->getId()}> Delete </button></form> </td>";
    }
    ?>
</table>

