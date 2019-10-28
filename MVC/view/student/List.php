<table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Teacher</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                    </thead>
                <tbody>
                <?php
                foreach($studentList as $student){
                ?>
                <tr>
                    <td scope="row"><?php echo $student['Id']?></td>
                    <td scope="row"><?php echo $student['f_name']?></td>
                    <td scope="row"><?php echo $student['l_name']?></td>
                    <td scope="row"><?php echo $student['email']?></td>
                    <td scope="row"><?php echo $student['age']?></td>
                    <td scope="row"><?php echo $student['gender']?></td>
                    <td scope="row"><?php echo $student['teacher_id']?></td>
                    <td scope="row"><?php echo $student['created_at']?></td>
                    <td scope="row"><?php echo $student['updated_at']?></td>
                    <td scope="row">
                        <a href="index.php?controller=student&action=edit&param=<?=$student['Id']?>" >Edit</a>
                        <a href="index.php?controller=student&action=delete&param=<?=$student['Id']?>" >Delete</a>
                        <a href="index.php?controller=student&action=view&param=<?=$student['Id']?>">View</a>
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
                    <td scope="col">-</td>
                    <td scope="col">-</td>
                    <td scope="row">
                        <a href="index.php?controller=student&action=add">Add Student</a>
                    </td>
                </tr>
                </tbody>
            </table>