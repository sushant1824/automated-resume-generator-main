<?php 
    session_start();
    include './dbconn.php';
    
    if(isset($_SESSION['login_email'])){
    $mail =  $_SESSION['login_email'];

    $email_search = "select * from signup where email='$mail' and status='active' ";
    $que = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($que);
    
    if($email_count){
        $email_pass = mysqli_fetch_assoc($que);
        $login_id = $email_pass['id'];
        $login_email = $email_pass['email'];
        $login_user = $email_pass['username'];


    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        //$title = $_POST['title'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $linkedin = $_POST['linkedin'];
        $github = $_POST['github'];
        $bio = $_POST['bio']; 

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
    
        /*school and college details*/
        $class10_school_name = $_POST['class10_school_name'];
        $class10_end_date = $_POST['class10_end_date'];
        $class12_school_name = $_POST['class12_school_name'];
        $class12_end_date = $_POST['class12_end_date'];
        $college_1_start_date = $_POST['college_1_start_date'];
        //$college_1_end_date = $_POST['college_1_end_date'];
        $college_1_name = $_POST['college_1_name'];
        $college_course_year = $_POST['years'];
        $work_1_start_date = $_POST['work_1_start_date'];
        $work_1_end_date = $_POST['work_1_end_date'];
        $work_1_company = $_POST['work_1_company'];
        $work_1_role = $_POST['work_1_role'];
       
    
        $project_1_date = $_POST['project_1_date'];
        $project_1_name = $_POST['project_1_name'];
        
        $project_1_outcome = $_POST['project_1_outcome'];
        $project_1_tools_used = $_POST['project_1_tools_used'];
    
        $skills_1 = $_POST['skills_1'];
    
    
        $lang_1 = $_POST['lang_1'];
        $language = $_POST['lang_type'];
        
        $certificate_1_date = $_POST['certificate_1_date'];
        $certificate_1_name = $_POST['certificate_1_name'];

        
        foreach ($work_1_start_date as $windex => $work) {
            $work_start_date = $work;
            $work_end_date = $work_1_end_date[$windex];
            $work_company = $work_1_company[$windex];
            $work_role = $work_1_role[$windex];

            
            $sql = "INSERT INTO `resume`(`login_id`, `login_email`, `login_user`, `email`, `name`, `phone`, `dob`, `address`, `linkedin`, `github`, `bio`, `class10_school_name`, `class10_end_date`, `class12_school_name`, `class12_end_date`, `college_1_start_date`, `college_1_name`, `college_course_year`, `work_start_date`, `work_end_date`, `work_company`, `work_role`, `photo`) VALUES ('$login_id','$login_email','$login_user','$email','$name','$phone','$dob','$address','$linkedin','$github','$bio','$class10_school_name','$class10_end_date','$class12_school_name','$class12_end_date','$college_1_start_date','$college_1_name','$college_course_year','$work_start_date','$work_end_date','$work_company','$work_role','$destfile')";
            
            mysqli_query($con,$sql);
        }
            foreach ($project_1_date as $pindex => $project) {
                $project_date = $project;
                $project_name = $project_1_name[$pindex];
                $project_outcome = $project_1_outcome[$pindex];
                $project_tools_used = $project_1_tools_used[$pindex];

                
                $sql = "INSERT INTO `resume`(`login_id`, `login_email`, `login_user`, `email`, `name`, `phone`, `dob`, `address`, `linkedin`, `github`, `bio`, `class10_school_name`, `class10_end_date`, `class12_school_name`, `class12_end_date`, `college_1_start_date`, `college_1_name`, `college_course_year`, `project_date`, `project_name`, `project_outcome`, `project_tools_used`, `photo`) VALUES ('$login_id','$login_email','$login_user','$email','$name','$phone','$dob','$address','$linkedin','$github','$bio','$class10_school_name','$class10_end_date','$class12_school_name','$class12_end_date','$college_1_start_date','$college_1_name','$college_course_year','$project_date','$project_name','$project_outcome','$project_tools_used','$destfile')";
                
                mysqli_query($con,$sql);
            }
                foreach ($skills_1 as $sindex => $skills) {
                    
                    $skill = $skills;
                    
                    $sql = "INSERT INTO `resume`(`login_id`, `login_email`, `login_user`, `email`, `name`, `phone`, `dob`, `address`, `linkedin`, `github`, `bio`, `class10_school_name`, `class10_end_date`, `class12_school_name`, `class12_end_date`, `college_1_start_date`, `college_1_name`,`college_course_year`, `skill`, `photo`) VALUES ('$login_id','$login_email','$login_user', '$email','$name','$phone','$dob','$address','$linkedin','$github','$bio','$class10_school_name','$class10_end_date','$class12_school_name','$class12_end_date','$college_1_start_date','$college_1_name','$college_course_year','$skill','$destfile')";
                    
                    mysqli_query($con,$sql);
                }
                    foreach ($lang_1 as $lindex => $langs) {
                        $lang = $langs;
                        $lang_type = $language[$lindex];
                        
                        $sql = "INSERT INTO `resume`(`login_id`, `login_email`, `login_user`, `email`, `name`, `phone`, `dob`, `address`, `linkedin`, `github`, `bio`, `class10_school_name`, `class10_end_date`, `class12_school_name`, `class12_end_date`, `college_1_start_date`, `college_1_name`,`college_course_year`, `lang`, `lang_type`, `photo`) VALUES ('$login_id', '$login_email','$login_user','$email','$name','$phone','$dob','$address','$linkedin','$github','$bio','$class10_school_name','$class10_end_date','$class12_school_name','$class12_end_date','$college_1_start_date','$college_1_name','$college_course_year','$lang','$lang_type','$destfile')";

                        
                        mysqli_query($con,$sql);
                    }
                        
                        foreach ($certificate_1_date as $cindex => $certificate) {                                     
                            $certificate_date = $certificate;
                            $certificate_name = $certificate_1_name[$cindex];

                            
                            $sql = "INSERT INTO `resume`(`login_id`, `login_email`, `login_user`, `email`, `name`, `phone`, `dob`, `address`, `linkedin`, `github`, `bio`, `class10_school_name`, `class10_end_date`, `class12_school_name`, `class12_end_date`, `college_1_start_date`, `college_1_name`,`college_course_year`, `certificate_date`, `certificate_name`, `photo`) VALUES ('$login_id','$login_email','$login_user','$email','$name','$phone','$dob','$address','$linkedin','$github','$bio','$class10_school_name','$class10_end_date','$class12_school_name','$class12_end_date','$college_1_start_date','$college_1_name','$college_course_year','$certificate_date','$certificate_name','$destfile')";
                            
                            mysqli_query($con,$sql);

                        }
        }
        else{
        echo "<script>alert('no button has been clicked')</script>";

    }
}
}else{
    echo "<script>alert('first login')</script>";
    
    include './home.php';
}
?>


   <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
           <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
            <link rel="stylesheet" type="text/css" href="./temp1.css"> 
            <title>Resume</title>
            <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css">
            
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        </head>

        <body >
            <div class="main">
                <div class="upper">
                    <div class="profile-img"><img src="<?php echo $destfile?>" height="145" alt=""></div>
                    <h1><?php echo $name?></h1>
                   
                    <div class="essentials">
                    <ul style="list-style-type: none;">
                        <li><i class="fa fa-envelope-open" style="font-size:1.2rem"></i>&nbsp;&nbsp; <?php echo $email?>  </li>
                        <br>
                        <li><i class="fa fa-phone-square" aria-hidden="true" style="font-size:1.2rem"></i>&nbsp;&nbsp;<?php echo $phone?></li>
                        <br>
                        <li><i class="fa fa-map-marker" aria-hidden="true" style="font-size:1.2rem;"></i>&nbsp;&nbsp; <?php echo $address?></li>
                        <br>
                        <li><i class="fa fa-calendar" aria-hidden="true" style="font-size:1.2rem"></i>&nbsp;&nbsp; <?php echo date('d-m-Y',strtotime($dob))?></li>
                    </ul>

                </div>
                
                </div>
                <hr style="border:2px solid #7585bd">
                <!--left-->
                
                <div class="left">
                    <h3 >ABOUT ME</h3> 
                    <p class="p2"><?php echo $bio?></p>
                    
                    
                    <h3> EDUCATION</h3>
                    <p class="ft124"><b>High school&nbsp;<br></b><i class="ft16"><?php echo date('d-m-Y',strtotime($class10_end_date))?></i></p>
                    <p class="ft124"><?php echo $class10_school_name?>&nbsp;</p>
                    <!--<p><i>Courses</i></p>
                    <ul-- class="ft12">
                        <li>computer science</li>
                    </ul-->
                    
                    <p class="ft124"><b>Secondary school&nbsp;<br></b><i class="ft16"><?php echo date('d-m-Y',strtotime($class12_end_date))?></i></p>
                    <p class="ft124"><?php echo $class12_school_name?></p>
                    <!--p><i>Courses</i></p>
                    <ul-- class="ft12">
                        <li> <?php /* echo "".$row['college_1_course_name']*/?></li>
                    </ul-->
                    
                    
                    <p class="ft124"><b>College&nbsp;<br></b><i class="ft16"><?php echo date('d-m-Y',strtotime($college_1_start_date))?></i></p>
                    <p class="ft124"><?php echo $college_1_name?><?php /*echo "".$row['college_2_end_date']*/?></b></p>
                    
                    
                    <p><i>Course Duration</i></p>
                    <ul class="ft12">
                        <li> <?php echo $college_course_year?></li>
                    </ul>
                    
                   
                    
                     <h3>WORK EXPERIENCE</h3>

                    <?php 
                      foreach ($work_1_start_date as $windex => $work) {
                        $work_start_date = $work;
                        $work_end_date = $work_1_end_date[$windex];
                        $work_company = $work_1_company[$windex];
                        $work_role = $work_1_role[$windex];
            
                        ?>
                    <p class="ft124"><b><?php echo $work_company?><br></b><i class="ft16"><?php echo date('d-m-Y',strtotime($work_start_date))?>&nbsp;&nbsp;to&nbsp;&nbsp;<?php echo date('d-m-Y',strtotime($work_end_date))?></i></p>  
                        
                    <p><i style=" font-weight:700;font-size:1rem">Achievements/Tasks</i>
                    
                    <ul class ="ft12"><li> <?php echo $work_role?></li></ul>
                </p>
                    
                    <?php
                    }
                   ?>
                
                    

                    <h3> CERTIFICATES</h3>
                    <?php
                                            
                        foreach ($certificate_1_date as $cindex => $certificate) {                                     
                            $certificate_date = $certificate;
                            $certificate_name = $certificate_1_name[$cindex];
                        ?>
                    <ul class ="ft12"><li>
                    <b class="ft124"><?php echo $certificate_name?><br></b>
                    <i class="ft16"><?php echo date('d-m-Y',strtotime($certificate_date))?>&nbsp;</i>  
                    </li></ul>
                    <?php
                        }
                    ?>
                        
                    </div>
                    
                <!--right-->
                <div class="right">
                    
                    <h3> PERSONAL PROJECTS</h3>
                    <?php
                        foreach ($project_1_date as $pindex => $project) {
                            $project_date = $project;
                            $project_name = $project_1_name[$pindex];
                            $project_outcome = $project_1_outcome[$pindex];
                            $project_tools_used = $project_1_tools_used[$pindex];

         
                    ?>
                    <p style="font-size:1.2rem"><b><i><?php echo $project_name?></i><br></b><i class="ft16"><?php echo date('d-m-Y',strtotime($project_date))?></i></p>
                    
                    <ul class ="ft12" >
                    
                    <li> <b>Project Outcome-</b>&nbsp;<?php echo $project_outcome?></li>
                    <li> <b>Tools used-</b>&nbsp;<?php echo $project_tools_used?></li></ul>
                    <?php
                        }
                    ?>
                    
                    <h3>Links</h3>
                    <p class="ft124"><a href="<?php echo $github?>" target="_blank"><i class="fa fa-github" id="icons"> GITHUB</i></a></p>
                    <p  class="ft124"><a href="<?php echo $linkedin?>" target="_blank" ><i class="fa fa-linkedin" id="icons"> LinkedIn</i></a></p>
                    
                    
                    <h3> SKILLS</h3> 
                    <?php
                        
                    foreach ($skills_1 as $sindex => $skills) {
                        
                        $skill = $skills;
                        ?>
                    <h4 class="ft90"><?php echo $skill?></h4>
                    <?php
                    }
                    ?>
                   
                     
                    <h3> LANGUAGES</h3> 
                    <?php
                    foreach ($lang_1 as $lindex => $langs) {
                        $lang = $langs;
                        $lang_type = $language[$lindex];
                    ?>
                    <p><b><?php echo $lang?></b><ul class="ft12"><li><?php echo $lang_type ?></li></ul></p>
                    <?php
                    }
                    ?>
                  </div>                                                       
                 </div>
                  <div id="printme">
                    <button style ="width:25%;height:15%;border-radius:15px;background-color:#3fb180" onclick="window.print()">Print Your Resume</button></div>
               
                  
                </div>
                
                
           
        </body>
        

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </html>
    