<div class="container profileBox mt-6">
    <div class="row">
        <div class="col-6 sides d-flex flex-column align-items-center">

            <img class="profileImg" src="<?= PUBLIC_URL?>img/profileDefault.png" alt="">

            <span class="d-flex justify-content-center studentName">

                <?php echo$student['f_name'] . " " . $student['l_name']?>

            </span>

        </div>
        <div class="col-6 sides">
            <ul class="moreInfo">
                <li class="profDescript">Mail Address:
                    <span ><?php echo$student['email']?></span>
                </li>
                <li class="profDescript">Age:
                    <span ><?php echo$student['age']?></span>
                </li>
                <li class="profDescript">Gender:
                    <span ><?php echo$student['gender']?></span>
                </li>
                <li class="profDescript">Teacher:
                    <span ><?php echo$student['teacher_id']?></span>
                </li>
            </ul>
        </div>
    </div>


</div>