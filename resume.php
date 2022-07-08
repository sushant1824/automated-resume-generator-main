<?php 
     include './dbconn.php';

     if (isset($_POST['submit']))
     {
        $loginEmail = $_POST['loginEmail'];
        $name = $_POST['name'];
        $title = $_POST['title'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $linkedin = $_POST['linkedin'];
        $github = $_POST['github'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        foreach ($work_start_date as $stardate => $work_1_start_date) {
            # code...
        }
        $work_1_start_date = $_POST['work_1_start_date'];
        $work_1_end_date = $_POST['work_1_end_date'];
        $work_1_company = $_POST['work_1_company'];
        $work_1_role = $_POST['work_1_role'];
        $work_2_start_date = $_POST['work_2_start_date'];
        $work_2_end_date = $_POST['work_2_end_date'];
        $work_2_company = $_POST['work_2_company'];
        $work_2_role = $_POST['work_2_role'];
        $school_start_date = $_POST['school_start_date'];
        $school_end_date = $_POST['school_end_date'];
        $school_name = $_POST['school_name'];
        $college_1_start_date = $_POST['college_1_start_date'];
        $college_1_end_date = $_POST['college_1_end_date'];
        $college_1_name = $_POST['college_1_name'];
        $college_1_course_name = $_POST['college_1_course_name'];
        $college_2_start_date = $_POST['college_2_start_date'];
        $college_2_end_date = $_POST['college_2_end_date'];
        $college_2_name = $_POST['college_2_name'];
        $college_2_course_name = $_POST['college_2_course_name'];
        $college_3_start_date = $_POST['college_3_start_date'];
        $college_3_end_date = $_POST['college_3_end_date'];
        $college_3_name = $_POST['college_3_name'];
        $college_3_course_name = $_POST['college_3_course_name'];
        $skills_1 = $_POST['skills_1'];
        $skills_2 = $_POST['skills_2'];
        $skills_3 = $_POST['skills_3'];
        $skills_4 = $_POST['skills_4'];
        $skills_5 = $_POST['skills_5'];
        $lang_1 = $_POST['lang_1'];
        $lang_2 = $_POST['lang_2'];
        $lang_3 = $_POST['lang_3'];
        $certificate_1_date = $_POST['certificate_1_date'];
        $certificate_1_name = $_POST['certificate_1_name'];
        $certificate_2_date = $_POST['certificate_2_date'];
        $certificate_2_name = $_POST['certificate_2_name'];
        $certificate_3_date = $_POST['certificate_3_date'];
        $certificate_3_name = $_POST['certificate_3_name'];
        $interest_1 = $_POST['interest_1'];
        $interest_2 = $_POST['interest_2'];
        $interest_3 = $_POST['interest_3'];

        $project_1_date = $_POST['project_1_date'];
        $project_1_name = $_POST['project_1_name'];
        $project_1_feature = $_POST['project_1_feature'];
        $project_1_outcome = $_POST['project_1_outcome'];
        $project_1_tools_used = $_POST['project_1_tools_used'];
        $project_2_date = $_POST['project_2_date'];
        $project_2_name = $_POST['project_2_name'];
        $project_2_feature = $_POST['project_2_feature'];
        $project_2_outcome = $_POST['project_2_outcome'];
        $project_2_tools_used = $_POST['project_2_tools_used'];
        $project_3_date = $_POST['project_3_date'];
        $project_3_name = $_POST['project_3_name'];
        $project_3_feature = $_POST['project_3_feature'];
        $project_3_outcome = $_POST['project_3_outcome'];
        $project_3_tools_used = $_POST['project_3_tools_used'];

        
        $file = $_FILES['photo'];

        $photo_name = $_FILES['photo']['name'];
       $photo_size = $_FILES['photo']['size'];
       $photo_path = $_FILES['photo']['tmp_name'];
       $error = $_FILES['photo']['error'];

       if($error == 0){
        $destfile = 'upload/'.$photo_name;

        move_uploaded_file($photo_path,$destfile);
       }else{
        echo  "<script>alert('change your file or try again')</script>";
       }

       $sql = "INSERT INTO `niit`(`loginEmail`, `name`, `title`, `phone`, `dob`, `address`, `linkedin`, `github`, `email`, `bio`, `work_1_start_date`, `work_1_end_date`, `work_1_company`, `work_1_role`, `work_2_start_date`, `work_2_end_date`, `work_2_company`, `work_2_role`, `school_start_date`, `school_end_date`, `school_name`, `college_1_start_date`, `college_1_end_date`, `college_1_name`, `college_1_course_name`, `college_2_start_date`, `college_2_end_date`, `college_2_name`, `college_2_course_name`, `college_3_start_date`, `college_3_end_date`, `college_3_name`, `college_3_course_name`, `skills_1`, `skills_2`, `skills_3`, `skills_4`, `skills_5`, `lang_1`, `lang_2`, `lang_3`, `certificate_1_date`, `certificate_1_name`, `certificate_2_date`, `certificate_2_name`, `certificate_3_date`, `certificate_3_name`, `interest_1`, `interest_2`, `interest_3`, `project_1_date`, `project_1_name`, `project_1_feature`, `project_1_outcome`, `project_1_tools_used`, `project_2_date`, `project_2_name`, `project_2_feature`, `project_2_outcome`, `project_2_tools_used`, `project_3_date`, `project_3_name`, `project_3_feature`, `project_3_outcome`, `project_3_tools_used`, `photo`) VALUES ('$loginEmail','$name','$title','$phone','$dob','$address','$linkedin','$github','$email','$bio','$work_1_start_date','$work_1_end_date','$work_1_company','$work_1_role','$work_2_start_date','$work_2_end_date','$work_2_company','$work_2_role','$school_start_date','$school_end_date','$school_name','$college_1_start_date','$college_1_end_date','$college_1_name','$college_1_course_name','$college_2_start_date','$college_2_end_date','$college_2_name','$college_2_course_name','$college_3_start_date','$college_3_end_date','$college_3_name','$college_3_course_name','$skills_1','$skills_2','$skills_3','$skills_4','$skills_5','$lang_1','$lang_2','$lang_3','$certificate_1_date','$certificate_1_name','$certificate_2_date','$certificate_2_name','$certificate_3_date','$certificate_3_name','$interest_1','$interest_2','$interest_3','$project_1_date','$project_1_name','$project_1_feature','$project_1_outcome','$project_1_tools_used','$project_2_date','$project_2_name','$project_2_feature','$project_2_outcome','$project_2_tools_used','$project_3_date','$project_3_name','$project_3_feature','$project_3_outcome','$project_3_tools_used','$destfile')";
       
       mysqli_query($con,$sql);

       if(mysqli_query($con,$sql)){
           
        echo "<script>alert('Inserted')</script>";
       }else{
            echo "<script>alert('not Inserted')</script>";
        }



     }else{
         echo  "<script>alert('no button has been clicked')</script>";
     }

?>



















<?php
 

 $show = "SELECT  `id`, `loginEmail`,`time`, `name`, `title`, `phone`, `dob`, `address`, `linkedin`, `github`, `email`, `bio`, `work_1_start_date`, `work_1_end_date`, `work_1_company`, `work_1_role`, `work_2_start_date`, `work_2_end_date`, `work_2_company`, `work_2_role`, `school_start_date`, `school_end_date`, `school_name`, `college_1_start_date`, `college_1_end_date`, `college_1_name`, `college_1_course_name`, `college_2_start_date`, `college_2_end_date`, `college_2_name`, `college_2_course_name`, `college_3_start_date`, `college_3_end_date`, `college_3_name`, `college_3_course_name`, `skills_1`, `skills_2`, `skills_3`, `skills_4`, `skills_5`, `lang_1`, `lang_2`, `lang_3`, `certificate_1_date`, `certificate_1_name`, `certificate_2_date`, `certificate_2_name`, `certificate_3_date`, `certificate_3_name`, `interest_1`, `interest_2`, `interest_3`, `project_1_date`, `project_1_name`, `project_1_feature`, `project_1_outcome`, `project_1_tools_used`, `project_2_date`, `project_2_name`, `project_2_feature`, `project_2_outcome`, `project_2_tools_used`, `project_3_date`, `project_3_name`, `project_3_feature`, `project_3_outcome`, `project_3_tools_used`, `photo` FROM `niit` WHERE  loginEmail='$loginEmail'";
 
 $result = $con->query($show);
 
 $row = $result->fetch_assoc();
 
 
 ?>

<!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="./temp1.css"> 
            <title>Document</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css">
            

            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        </head>

        <body style = 'background-color:grey;'>
            <div class="main">
                <div class="upper">
                    <div class="profile-img"><img src="<?php echo "".$row['photo']?>" alt=""></div>
                    <h1><?php echo "".$row['name']?></h1>
                    <h3 class="ft1"> <?php echo "".$row['title']?></h3>

                    <div class="essentials">
                    <ul style="list-style-type: none;">
                        <li> <?php echo "".$row['email']?> &nbsp; <i class="fa fa-envelope-open"></i></li>
                        <li><?php echo "".$row['phone']?>&nbsp;<i class="fa fa-phone-square" aria-hidden="true"></i></li>
                        
                        <li> <?php echo "".$row['address']?>&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i></li>
                        
                        <li> <?php echo "".$row['dob']?>&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i></li>
                    </ul>

                </div>
                </div>
                <!--left-->
                <div class="left">
                    <h2>ABOUT ME</h2>
                    <p class="p2"><?php echo "".$row['bio']?></p>
                    
                    <h2> EDUCATION</h2>
                    <p class="ft123"><b><b>Senior secondary school&nbsp;<br></b><?php echo "".$row['school_name']?>&nbsp;</p>
                    <p class="ft16"><i><?php echo "".$row['school_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['school_end_date']?></i></p>
                    <p><i>Courses</i></p>
                    <ul class="ft12">
                        <li>computer science</li>
                    </ul>
                    
                    <p class="ft124"><b><?php echo "".$row['college_1_name']?><br></b></p>
                    <p class="ft16"><i><?php echo "".$row['college_1_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_1_end_date']?></i></p>
                    <p><i>Courses</i></p>
                    <ul class="ft12">
                        <li> <?php echo "".$row['college_1_course_name']?></li>
                    </ul>
                    
                    <p class="ft124"><b><?php echo "".$row['college_2_name']?><br></b></p>
                    <p class="ft16"><i><?php echo "".$row['college_2_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_2_end_date']?></i></p>
                    <p><i>Courses</i></p>
                    <ul class="ft12">
                        <li> <?php echo "".$row['college_2_course_name']?></li>
                    </ul>
                    
                    <p class="ft124"><b><?php echo "".$row['college_3_name']?><br></b></p>
                    <p class="ft16"><i><?php echo "".$row['college_3_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_3_end_date']?></i></p>
                    <p><i>Courses</i></p>
                    <ul class="ft12">
                        <li> <?php echo "".$row['college_2_course_name']?></li>
                    </ul>
                    
                    <h2> WORK EXPERIENCE</h2>

                    <p class="ft124"><b><?php echo "".$row['work_1_company']?><br></b></p>  
                        <p  class="ft16"><i><?php echo ''.$row['work_1_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['work_1_end_date']?></i></p>
                    <p ><i>JOB ROLE</i></p>
                    <ul class ="ft12"><li> <?php echo "".$row['work_1_role']?></li></ul>
                
                    
                    <p class="ft124"><b><?php echo "".$row['work_2_company']?><br></b></p>  
                        <p  class="ft16"><i><?php echo "".$row['work_2_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['work_2_end_date']?></i></p>
                    <p ><i>JOB ROLE</i></p>
                    <ul class ="ft12"><li> <?php echo "".$row['work_2_role']?></li></ul>
                
                    

                    <h2> CERTIFICATES</h2>
                    
                    <p class="ft124"><b><?php echo "".$row['certificate_1_name']?><br></b></p>  
                        <p  class="ft16"><i><?php echo ''.$row['certificate_1_date']?>&nbsp;</i></p>
                    
                        
                    
                    <p class="ft124"><b><?php echo "".$row['certificate_2_name']?><br></b></p>  
                        <p  class="ft16"><i><?php echo ''.$row['certificate_2_date']?>&nbsp;</i></p>
                        
                        
                        <p class="ft124"><b><?php echo "".$row['certificate_3_name']?><br></b></p>  
                        <p  class="ft16"><i><?php echo ''.$row['certificate_3_date']?>&nbsp;</i></p>


                </div>
                <!--right-->
                <div class="right">
                    <h2> PERSONAL PROJECTS</h2>
                    <p><i><?php echo "".$row['project_1_name']?></i></p>
                    <p  class="ft16"><i><?php echo ''.$row['project_1_date']?>&nbsp;</i></p>
                    <ul class ="ft12">
                    <li> <b>Project Features-</b><?php echo "".$row['project_1_feature']?></li>
                    <li> <b>Project Outcome-</b><?php echo "".$row['project_1_outcome']?></li>
                    <li> <b>Tools used-</b><?php echo "".$row['project_1_tools_used']?></li></ul>
                    <br>
                    <p><i><?php echo "".$row['project_2_name']?></i></p>
                    <p  class="ft16"><i><?php echo ''.$row['project_2_date']?>&nbsp;</i></p>
                    <ul class ="ft12">
                        <li> <b>Project Features-</b><?php echo "".$row['project_2_feature']?></li>
                    <li> <b>Project Outcome-</b><?php echo "".$row['project_2_outcome']?></li>
                    <li> <b>Tools used-</b><?php echo "".$row['project_2_tools_used']?></li></ul>
                    <br>
                    <p ><i><?php echo "".$row['project_3_name']?></i></p>
                    <p  class="ft16"><i><?php echo ''.$row['project_3_date']?>&nbsp;</i></p>
                    <ul class ="ft12">
                        <li> <b>Project Features-</b><?php echo "".$row['project_3_feature']?></li>
                    <li> <b>Project Outcome-</b><?php echo "".$row['project_3_outcome']?></li>
                    <li> <b>Tools used-</b><?php echo "".$row['project_3_tools_used']?></li></ul>
                    <br><br>

                    <h2> SKILLS</h2> <br>
                    <h4 class="ft90"><?php echo "".$row['skills_1']?></h4>
                    <h4 class="ft90"><?php echo "".$row['skills_2']?></h4>
                    <h4 class="ft90"><?php echo "".$row['skills_3']?></h4>
                    <br>
                    <h4 class="ft90"><?php echo "".$row['skills_4']?></h4>
                    <h4 class="ft90"><?php echo "".$row['skills_5']?></h4>
                    <br> <br>
                    <h2> LANGUAGES</h2> <br>
                    <p><b><?php echo "".$row['lang_1']?></b>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    </p>
                    </div>
                    
                    <p><b><?php echo "".$row['lang_2']?></b>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    </p>
                    </div>
                    
                    <p><b><?php echo "".$row['lang_3']?></b>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    </p>
                    </div>
                    <br> 
                    <h2>INTERESTS</h2>
                    <br>
                    <ul class="ft10">
                        <li> <?php echo "".$row['interest_1']?></li>
                        <br>
                        <li><?php echo "".$row['interest_2']?></li>
                        <br>
                        <li> <?php echo "".$row['interest_3']?></li>
                    </ul>
                </div>


            </div>


        </body>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </html>





