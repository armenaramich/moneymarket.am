<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Gender</th>
        <th scope="col">Age</th>
        <th scope="col">Salary</th>
        <th scope="col">Experience</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($teacherList as $teacher){
        ?>
        <tr>
            <td scope="row"><?php echo $teacher['Id']?></td>
            <td scope="row"><?php echo $teacher['f_name']?></td>
            <td scope="row"><?php echo $teacher['l_name']?></td>
            <td scope="row"><?php echo $teacher['gender']?></td>
            <td scope="row"><?php echo $teacher['age']?></td>
            <td scope="row"><?php echo $teacher['salary']?></td>
            <td scope="row"><?php echo $teacher['experience']?></td>
            <td scope="row">
                <a href="index.php?controller=teacher&action=edit&param=<?=$teacher['Id']?>" >Edit</a>
                <a href="index.php?controller=teacher&action=delete&param=<?=$teacher['Id']?>" >Delete</a>
                <a href="index.php?controller=teacher&action=view&param=<?=$teacher['Id']?>">View</a>
            </td>
        </tr>
    <?php }?>
    <tr>
        <td scope="col"></td>
        <td scope="col">-</td>
        <td scope="col">-</td>
        <td scope="col">-</td>
        <td scope="col">-</td>
        <td scope="col">-</td>
        <td scope="col">-</td>
        <td scope="row">
            <a href="index.php?controller=teacher&action=add">Add teacher</a>
        </td>
    </tr>
    </tbody>
</table>