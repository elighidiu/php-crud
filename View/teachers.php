<!-- this page contains a general overview of all records of the Student entity in a table -->

<h2>Teachers</h2>


<form action="" method="post">
    <button type="submit" name="save">Add new teacher</button>
</form>

<table>
    <tr>
        <td>Teacher Id</td>
        <td>Teacher name</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
 
    <?php foreach ($teachers as $teacher) : ?>


<tr>
    <td><?php echo $teacher->getId(); ?></td>
    <td><?php echo $teacher->getName(); ?></td>
    

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

