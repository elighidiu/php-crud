<!-- this page contains a general overview of all records of the Student entity in a table -->
<?php 
require_once '../Model/dbConnection.php';
require_once '../Model/studentLoader.php';

require_once '../Controller/StudentController.php';
//require_once '../Controller/TeacherController.php';

$controller = new StudentController();
$controller->render($_GET, $_POST);

?>
<h2>Students</h2>

<!-- createStudent.php is where we will add a new entry in db -->
<a href="createStudent.php">Add New Student</a> 

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

        // updateStudent.php is where we will update the selected entry. I will create this page later, togeter with createStudent.php
        echo "<td> <form action='updateStudent.php' method='post'> <button type='submit' name='id' value={$student->getId()}> Update </button></form> </td>";

        // not sure if I need the deleteStudent.php page at this point. I will leave it here for later to consider
        echo "<td> <form action='deleteStudent.php' method='post'> <button type='submit' name='id' value={$student->getId()}> Delete </button></form> </td>";
    }
    ?>
</table>

