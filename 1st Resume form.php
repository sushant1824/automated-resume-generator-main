<?php 
    session_start();
    include './dbconn.php';
    
    if(isset($_SESSION['login_email'])){
    $mail =  $_SESSION['login_email'];

    $email_search = "select * from signup where email='$mail' and status='active' ";
    $que = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($que);
    
    if(!($email_count>0)){
        
    echo "<script>alert('first login/signup')</script>";
     
    include './home.php';
    }else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Resume</title>
</head>

<body>


    <form class="form" action="./1st resume backend.php" method="post" enctype="multipart/form-data">
        <h1 class="text-center" style="margin-top: -10px;">Complete Your Resume Details!</h1>
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Intro"></div>

            <div class="progress-step" data-title="Qualification"></div>
            <div class="progress-step" data-title="Work Experience"></div>
            <div class="progress-step" data-title="Links"></div>
            <div class="progress-step" data-title="Projects"></div>
            <div class="progress-step" data-title="Skills/Certificate"></div>

        </div>

        <!--Step1 start-->

        <div class="form-step form-step-active" id="p1">
            <div class="input-group">
                <label for="email">Enter Your Email</label>
                <input type="email" name="email" placeholder="enter your  email" value="" required>
            </div>

            <div class="input-group">
                <label for="Name">Your Name</label>
                <input type="text" name="name" placeholder="enter your name" value="" required>
            </div>

            <div class="input-group" style="float: left;width: 45%;">
                <label for="phone No.">Your Contact Number</label>
                <input type="text" name='phone' placeholder="enter your phone number" value="" required>
            </div>

            <div class="input-group" style="float: left; margin-left: 10%;width: 45%;">
                <label for="dob">Your Date Of Birth</label>
                <input type="date" name='dob' placeholder="enter your date of birth" value="" required>
            </div>
            <div style="clear:both;"></div>
            <div class="input-group">
                <label for="Address">Your Address</label>
                <input type="text" name="address" placeholder="enter your Address" value="" required>
            </div>



            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto" onclick="formcheck1(); return false">Next</a>
            </div>
        </div>
        <!--Step1 end-->
        <!--Step2 start-->

        <div class="form-step" id="p2">

            <!--school starting -->

            <div class="input-group" >
                <label for="school">Enter 10th School Name</label>
                <input type="text" name="class10_school_name" placeholder="Enter 10th School Name" value="" required>
            </div>
            <div class="input-group" style="width: 40%;">
                <label for="school">Enter 10th Qualification Passing Year</label>
                <input type="date" name="class10_end_date" placeholder="Enter 10th Qualification Passing Year" value="" required>
            </div>
            <div class="input-group" >
                <label for="school">Enter 12th School Name</label>
                <input type="text" name="class12_school_name" placeholder="Enter 12th School Name" value="" required>
            </div>
            <div class="input-group" style="width: 40%;">
                <label for="school">Enter 12th Qualification Passing Year</label>
                <input type="date" name="class12_end_date" placeholder="Enter 12th Qualification Starting Year" value="" required>
            </div>
            <!--school ending-->

            <!--1st college starting -->
            <div class="field_wrapper">
                <div class="input-group" >
                    <label for="college">Your college Name</label>
                    <input type="text" name="college_1_name" placeholder="enter Your college Name" value="" required></input>
                </div>
                <div class="input-group" style="width: 45%;float: left;">
                    <label for="college">Your  College  Starting Year</label>
                    <input type="date" name="college_1_start_date" placeholder="enter Your First College  Starting Year" value="" required size="10">
                    <!-- <a href="javascript:void(0);" class="add_button" title="Add field"><img src="img/add-icon.png" height="20px" width="20px"></a> -->
                </div>
            </div>
            <div class="input-group" style="float: left;margin-left: 10%;">
                <label for="college">Your Selected Course Duration</label>
                <select id="years" name="years" style="width:250px;height: 40px;border-radius: 5px;">
                    <option name="years" value="1 Year">1 Year</option>
                    <option name="years" value="2 Year">2 Year</option>
                    <option name="years" value="3 Year">3 Year</option>
                    <option name="years" value="4 Year">4 Year</option>
                    <option name="years" value="5 Year">5 Year</option>
                  </select>
            </div>
            <div style="clear:both;"></div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next" onclick="formcheck2(); return false">Next</a>
            </div>

        </div>
        <!--Step2 end-->

        <!--step3 start-->
        <div class="form-step" id="p3">
            <!--work experience  start part-->
            <div class="input-group">
                <label for="work">Company Name</label>
                <input type="text" name="work_1_company[]" placeholder=" Company Name" value="">
            </div>

            <div class="input-group">
                <label for="work">Job role</label>
                <input type="text" name="work_1_role[]" placeholder=" Job role" value="">
            </div>
            <div class="input-group" style="width: 40%;float: left;">
                <label for="work">Starting date</label>
                <input type="date" name="work_1_start_date[]" placeholder=" starting date" value="">
            </div>

            <div class="input-group" style="width: 40%;float: left;margin-left:10%;">
                <label for="work">Ending date</label>
                <input type="date" name="work_1_end_date[]" placeholder=" work experience" value="">
            </div>
            <div style="clear:both;">&nbsp;</div>
            <!-- <input type="checkbox" id="working" name="working" value="here">
            <label for="working"> Currently Working here </label><br> -->
            <div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info">Add Other Work Experience</button>
            <br>
            <!--work experience  end part-->


            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next" onclick="formcheck3(); return false">Next</a>
            </div>
        </div>
        <!--step6 end-->
        <div class="form-step" id="p4">

            <div class="input-group">
                <label for="Linkedin">LinkedIn Link</label>
                <input type="link" name="linkedin" placeholder="enter your LinkedIn Link" value="" required>
            </div>

            <div class="input-group">
                <label for="github">Github Link</label>
                <input type="link" name="github" placeholder="enter your Github link" value="" required>
            </div>

            <div class="input-group">
                <label for="bio">Introduction</label>
                <input type="text" name="bio" placeholder="Write About Yourself" value="" required><br>
                <label for="bio">Profile Photo</label>
                <input type="file" name="photo" id="photo" class="photo" value="photo" accept="image/png, image/gif, image/jpeg">
            </div>


            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next" onclick="formcheck4(); return false">Next</a>
            </div>

        </div>
        <!--Step6 end-->
        <!--step4 start-->
        <div class="form-step" id="p5">



            <!-- Project starting -->

            <div class="input-group">
                <label for="Project">Your Project Name</label>
                <input type="text" name="project_1_name[]" placeholder="Your Project Name" value="" required></input>
            </div>
            <!--<div class="input-group">
                <label for="Project">Your Project Starting Date</label>
                <input type="date" name="project_1_date" placeholder="" value="" required></input>
            </div>-->
            <div class="input-group" style="width: 40%;">
                <label for="Project">Your Project Completion Date</label>
                <input type="date" name="project_1_date[]" placeholder="" value="" required></input>
            </div>

            <div class="input-group">
                <label for="Project">Your Project Description / OutCome</label>
                <input type="text" name="project_1_outcome[]" placeholder=" Your  Project Description / Outcome" rows="5" value="" required></input>
            </div>

            <div class="input-group">
                <label for="Project"> Tools Used in Project</label>
                <input type="text" name="project_1_tools_used[]" placeholder="Tools Used in Project" value="" rows="5" required></input>
            </div>
            <div id="newRow1"></div>
            <button id="addRow1" type="button" class="btn btn-info">Add Other Project</button>
            <br>


            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next" onclick="formcheck5(); return false">Next</a>
            </div>

        </div>

        <!--step4 end-->


        <!--step5 start-->
        <div class="form-step" id="p6">



            <!--Skills starting -->


            <div class="input-group">
                <label for="Skills">Your Skills</label>
                <input type="text" name="skills_1[]" placeholder="Skills You Know" value="" required style="width:70%;">
            </div>
            <div id="newRow3"></div>
            <button id="addRow3" type="button" class="btn btn-info">Add Other Skills</button>



            <!--Skills ending-->
            <!--Language starting -->

            <div class="input-group" style="width: 70%;">
                <label for="Language">Language You Know</label>
                <input type="text" name="lang_1[]" placeholder="Languages Your Know/Aware of ..  " value="" required><br>
                <select id="language-type" name="lang_type[]" style="width:200px;height: 40px;border-radius: 5px;">
                        <option name="lang_type[]"  value="Beginner">Beginner</option>
                        <option name="lang_type[]" value="Fluent">Fluent</option>
                        <option name="lang_type[]" value="Native">Native</option>
                </select>
            </div>
            <div id="newRow2"></div>
            <button id="addRow2" type="button" class="btn btn-info">Add Other Languages</button>

            <div class="input-group" style="width:40%;float: left;">
                <label for="certificate">Your certificate  Name</label>
                <input type="text" name="certificate_1_name[]" placeholder="enter Your certificate  Name" value="" required>
            </div>
            <div class="input-group" style="width: 40%;float: left;margin-left: 10%;">
                <label for="certificate">Your certificate  Completeion Date</label>
                <input type="date" name="certificate_1_date[]" placeholder="" value="" required></input>
            </div>
            <div style="clear:both;"></div>
            <div id="newRow5"></div>
            <button id="addRow5" type="button" class="btn btn-info">Add Other Certificates</button>
            <br>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <input type="submit" class="btn" name="submit" value="submit" id="submit">

            </div>

        </div>

        <!--step5 end-->




    </form>

    <script defer>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                } else {
                    progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
        // add row
        $("#addRow").click(function() {
            var html = '';

            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="work_1_company[]" class="form-control m-input" placeholder="Enter Company Name" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';


            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="work_1_role[]" class="form-control m-input" placeholder="Enter Job Role" autocomplete="off">';
            html += '<div class="input-group-append">';

            html += '</div>';
            html += '</div>';


            html += '<div id="inputFormRow">';

            html += '<div class="input-group mb-3">';
            html += '<input type="date" name="work_1_start_date[]" class="form-control m-input" placeholder="Enter title" autocomplete="off" style="float:left;width:40%;">';
            html += '<div class="input-group-append">';

            html += '</div>';
            html += '</div>';


            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="date" name="work_1_end_date[]" class="form-control m-input" placeholder="Enter title" autocomplete="off" style="float:left;width:40%;margin-left:10%;">';
            html += '<div class="input-group-append">';

            html += '</div>';
            html += '</div>';
            html += '<div style="clear:both;">&nbsp;</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });


        // add row1
        $("#addRow1").click(function() {
            var html = '';

            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="project_1_name[]" class="form-control m-input" placeholder="Your Project Name" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow1" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';


            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="date" name="project_1_date[]" class="form-control m-input" placeholder="" autocomplete="off" style="width: 40%;">';
            html += '<div class="input-group-append">';
            html += '</div>';
            html += '</div>';


            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="project_1_outcome[]" class="form-control m-input" placeholder="Your Project Description/ OutCome" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '</div>';
            html += '</div>';

            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="project_1_tools_used[]" class="form-control m-input" placeholder="Tools Used in Project" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '</div>';
            html += '</div>';

            $('#newRow1').append(html);
        });

        // remove row1
        $(document).on('click', '#removeRow1', function() {
            $(this).closest('#inputFormRow').remove();
        });



        // add row2
        $("#addRow2").click(function() {
            var html = '';

            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="lang_1[]" class="form-control m-input" placeholder="Enter Language You Know" autocomplete="off" style="width:70%;float:left;">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow2" type="button" class="btn btn-danger" style="float:left;margin-left:5%">Remove</button>';
            html += '</div>';
            html += '<div style="clear:both;">&nbsp;</div>';
            html += ' <select id="language-type" name="lang_type[]" style="width:200px;height: 40px;border-radius: 5px;">'
            html += '<option name="lang_type[]" value="Beginner">Beginner</option>'
            html += '<option name="lang_type[]" value="Fluent">Fluent</option>'
            html += '<option name="lang_type[]" value="Native">Native</option>'
            html += '</select>'
            html += '</div>';
            html += '</div>';
           


            $('#newRow2').append(html);
        });

        // remove row2
        $(document).on('click', '#removeRow2', function() {
            $(this).closest('#inputFormRow').remove();
        });



        // add row3
        $("#addRow3").click(function() {
            var html = '';

            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="skills_1[]" class="form-control m-input" placeholder="Enter Your Other Skills" autocomplete="off" style="width:70%;float:left;">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow3" type="button" class="btn btn-danger" style="float:left;margin-left:5%;">Remove</button>';
            html += '</div>';
            html += '</div>';
            html += '<div style="clear:both;">&nbsp;</div>';


            $('#newRow3').append(html);
        });

        // remove row3
        $(document).on('click', '#removeRow3', function() {
            $(this).closest('#inputFormRow').remove();
        });



        // add row4

        // remove row4
        $(document).on('click', '#removeRow4', function() {
            $(this).closest('#inputFormRow').remove();
        });



        // add row5
        $("#addRow5").click(function() {
            var html = '';

            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="certificate_1_name[]" class="form-control m-input" placeholder="Enter Your Certificate Name" autocomplete="off" style="width:40%;float:left;">';
            html += '<input type="date" name="certificate_1_date[]" class="form-control m-input" placeholder="" autocomplete="off" style="width:40%;float:left;margin-left:10%;" >';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow5" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
             html += '</div>';
            html += '<div style="clear:both;">&nbsp;</div>';


            $('#newRow5').append(html);
        });

        // remove row5
        $(document).on('click', '#removeRow5', function() {
            $(this).closest('#inputFormRow').remove();
        });

        function formcheck1() {
            var fields = $('#p1').find('select, textarea, input').serializeArray();

            $.each(fields, function(i, field) {
                if (!field.value) alert(field.name + ' is required');
            });
            console.log(fields);
        }

        function formcheck2() {
            var fields = $('#p2').find('select, textarea, input').serializeArray();

            $.each(fields, function(i, field) {
                if (!field.value) alert(field.name + ' is required');
            });
            console.log(fields);
        }

        function formcheck3() {
            var fields = $('#p3').find('select, textarea, input').serializeArray();

            $.each(fields, function(i, field) {
                if (!field.value) alert(field.name + ' is required');
            });
            console.log(fields);
        }

        function formcheck4() {
            var fields = $('#p4').find('select, textarea, input').serializeArray();

            $.each(fields, function(i, field) {
                if (!field.value) alert(field.name + ' is required');
            });
            console.log(fields);
        }

        function formcheck5() {
            var fields = $('#p5').find('select, textarea, input').serializeArray();

            $.each(fields, function(i, field) {
                if (!field.value) alert(field.name + ' is required');
            });
            console.log(fields);
        }
    </script>

</body>

</html>

<?php
    }
}else{
    echo "<script type='text/javascript'>alert('first login/signup');
   window.location = 'home.php';
   </script>";
   exit();
}
?>