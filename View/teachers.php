<!-- this page contains a general overview of all records of the Student entity in a table -->

<h2>Teachers</h2>

<table>
    <tr>
        <td>Teacher Id</td>
        <td>Teacher name</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
 
    <?php foreach($teachers as $teacher)
    {
       
        echo "<tr>";
        echo "<td> {$teacher->getId()} </td>";
        echo "<td> {$teacher->getName()} </td>";

        // updateStudent.php is where we will update the selected entry. I will create this page later, togeter with createStudent.php
        echo "<td> <form action='updateStudent.php' method='post'> <button type='submit' name='id' value={$teacher->getId()}> Update </button></form> </td>";

        // not sure if I need the deleteStudent.php page at this point. I will leave it here for later to consider
        echo "<td> <form action='deleteStudent.php' method='post'> <button type='submit' name='id' value={$teacher->getId()}> Delete </button></form> </td>";
    }
    ?>
</table>

