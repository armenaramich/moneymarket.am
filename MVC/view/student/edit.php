<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Teacher</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <form action='index.php?controller=student&action=edit&param=<?= $student['Id'] ?>' method='post'>
        <td scope="col">
            <input type='text' name='f_name' placeholder="Name" value="<?php echo $student['f_name']?>">
        </td>
        <td scope="col">
            <input type='text' name='l_name' placeholder="Surname" value="<?php echo $student['l_name']?>">
        </td>
        <td scope="col">
            <input type='email' name='email' placeholder="Email" value="<?php echo $student['email']?>">
        </td>
        <td scope="col">
            <input type='age' name='age' placeholder="Age" value="<?php echo $student['age']?>">
        </td>
        <td scope="col">
            <select name="gender">
                <option value='male'>Male</option>
                <option value='female'>Female</option>
            </select>
        </td>
        <td scope="col">
            <input type='teacher' name='teacher' placeholder="Teacher" value="">
        </td>
        <td scope="col">
            <select name="status">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </td>
        <td scope="col">
            <input type='submit' name='edit'>
        </td>
    </form>

    </tbody>
</table>


