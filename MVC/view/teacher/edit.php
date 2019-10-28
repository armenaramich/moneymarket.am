<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Gender</th>
        <th scope="col">Age</th>
        <th scope="col">Salary</th>
        <th scope="col">Experience</th>
    </tr>
    </thead>
    <tbody>
    <form action='index.php?controller=teacher&action=edit&param=<?= $teacher['Id'] ?>' method='post'>
        <td scope="col">
            <input type='text' name='f_name' placeholder="Name" value="<?php echo $teacher['f_name']?>">
        </td>
        <td scope="col">
            <input type='text' name='l_name' placeholder="Surname" value="<?php echo $teacher['l_name']?>">
        </td>
        <td scope="col">
            <input type='gender' name='gender' placeholder="Gender" value="<?php echo $teacher['gender']?>">
        </td>
        <td scope="col">
            <input type='age' name='age' placeholder="Age" value="<?php echo $teacher['age']?>">
        </td>
        <td scope="col">
            <input type='salary' name='salary' placeholder="Salary" value="<?php echo $teacher['salary']?>">
        </td>
        <td scope="col">
            <input type='experience' name='experience' placeholder="Exp" value="<?php echo $teacher['experience']?>">
        </td>

        <td scope="col">
            <input type='submit' name='edit'>
        </td>
    </form>

    </tbody>
</table>
