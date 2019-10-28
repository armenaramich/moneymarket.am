<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add Student</div>
        <div class="card-body">
            <form action="index.php?controller=student&action=add" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="f_name" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                <label for="firstName">First name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="lastName" name="l_name" class="form-control" placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                        <label for="inputEmail">Email address</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputAge" name="age" class="form-control" placeholder="Age" required="required">
                        <label for="inputAge">Age</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputGender" class="form-control" name="gender" placeholder="Gender" required="required">
                        <label for="inputGender">Gender</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputTeacher" class="form-control" name="teacher" placeholder="Teacher" required="required">
                        <label for="inputTeacher">Teacher</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" name="addUser" >AddUser</button>
            </form>

        </div>
    </div>
</div>