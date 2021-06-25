<!-- this page contains a general overview of all records of the Student entity in a table -->
<h2>School Classes</h2>

<form action="" method="post">
    <button type="submit" name="save">Add new class</button>
</form>

<table>
    <tr>
        <td>Class Id</td>
        <td>Class Location</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>
 
    <?php foreach ($schoolClasses as $schoolClass) : ?>


<tr>
    <td><?php echo $schoolClass->getId(); ?></td>
    <td><?php echo $schoolClass->getName(); ?></td>
    

    <td>
        <form method='post'> <button type='submit' name='update' value="<?php echo $schoolClass->getId(); ?>"> Update </button></form>
    </td>

    <td>
        <form action='' method='post'>
            <button type='submit' name='delete' value="<?php echo $schoolClass->getId(); ?>"> Delete </button>
        </form>
    </td>
</tr>

<?php endforeach ?>
</table>

