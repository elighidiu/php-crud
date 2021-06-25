<!-- this page contains a general overview of all records of the Student entity in a table -->
<?php require 'View/includes/header.php' ?>
<h2>Teachers</h2>


<form action="" method="post">
    <button type="submit" name="save">Add new teacher</button>
</form>

<table>
    <tr>
        <td>Teacher Id</td>
        <td>Teacher name</td>
        <td>Class Id</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>

    <?php foreach ($teachers as $teacher) : ?>


        <tr>
            <td><?php echo $teacher->getId(); ?></td>
            <td><?php echo $teacher->getName(); ?></td>

            
            <td>         
            <a href="?class=<?php echo $teacher->getClassId(); ?>"><?php echo $teacher->getClassId(); ?></a>
            
            </td>


            <td>
                <form method='post'> <button type='submit' name='update' value="<?php echo $teacher->getId(); ?>"> Update </button></form>
            </td>

            <td>
                <form action='' method='post'>
                    <button type='submit' name='delete' value="<?php echo $teacher->getId(); ?>"> Delete </button>
                </form>
            </td>
        </tr>

    <?php endforeach ?>
</table>