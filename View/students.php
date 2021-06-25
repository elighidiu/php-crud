<!-- this page contains a general overview of all records of the Student entity in a table -->
<?php require 'View/includes/header.php' ?>
<h2>Students</h2>

<!-- Form for addig a new student in DB -->
<!-- !!!!! Must  look into this later ->on page refresh duplicate entries -->

<form action="" method="post">
    <button type="submit" name="save">Add new student</button>
</form>

<table>
    <tr>
        <td>Student Id</td>
        <td>Student name</td>
        <td>Class Name</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>

    <?php foreach ($students as $student) : ?>


        <tr>
            <td><?php echo $student->getId(); ?></td>
            <td><?php echo $student->getName(); ?></td>
            <td>         
            <a href="?class=<?php echo $student->getClassId(); ?>"><?php echo $student->getClassId(); ?></a>
            
            </td>
            <td>
                <form method='post'> <button type='submit' name='update' value="<?php echo $student->getId(); ?>"> Update </button></form>
            </td>

            <td>
                <form method='post'> <button type='submit' name='delete' value="<?php echo $student->getId(); ?>"> Delete </button>
                </form>
            </td>
            

        </tr>

    <?php endforeach ?>

</table>