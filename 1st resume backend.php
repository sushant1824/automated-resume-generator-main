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
<HTML>

<HEAD>
    <TITLE>Resume</TITLE>
    <link id="theme-style" rel="stylesheet" href="style1.css">

</HEAD>

<BODY BGCOLOR="#FFFFFF">
    <img class="center" src="<?php echo $destfile?>"  alt="" />
    <H1 style="text-align: center; color: #3873b3;"><?php echo $name?></H1>
    <h4 style="text-align: center; color: #737373;"><?php echo $address?></h4>
    <h4 style="text-align: center; color: #737373;"><?php echo $email?></h4>
    <h4 style="text-align: center; color: #737373;"><?php echo $phone?></h4>
    <div class="main-wrapper" style="padding-left: 10%; padding-right: 10%;">

        <section class="section summary-section">
            <h2 class="section-title" style="color: #3873b3;"><span class="icon-holder"></span>Career Profile</h2>
            <hr color="#3873b3">
            <div class="summary">
                <p><?php echo $bio?></p>
            </div>
            <!--//summary-->
        </section>
        <!--//section-->
        <section class="education-section section ">
            <h2 class="section-title " style="color: #3873b3; "><span class="icon-holder "></span>Education</h2>
            <hr color="#3873b3 ">
            <div class="skillset ">
                <div class="item">
                    <div class="meta">
                    <div class="upper-row" style="display: flex;">
                            <h3 class="job-title " style="width: 70%;">Secondary Education</h3>
                            <div class="row">
                                <!-- <div class="company " style="flex-grow: 1;float: right; color: rgb(87, 218, 75);">Startup Hubs, San Francisco</div> -->
                                <div class="time " style="flex-grow: 1; float: right; color: rgb(87, 218, 75);"><?php echo date('d-m-Y',strtotime($class10_end_date))?></div>
                            </div>
                        </div>
                    </div>
                    <!--//meta-->
                     <div class="details ">
                        <p><?php echo $class10_school_name?></p>
                    </div> 
                    <!--//details-->
                </div>
                <!--//item-->
                <div class="item">
                    <div class="meta">
                    <div class="upper-row" style="display: flex;">
                            <h3 class="job-title " style="width: 70%;">Higher Education</h3>
                            <div class="row">
                                <!-- <div class="company " style="flex-grow: 1;float: right; color: rgb(87, 218, 75);">Startup Hubs, San Francisco</div> -->
                                <div class="time " style="flex-grow: 1; float: right; color: rgb(87, 218, 75);"><?php echo date('d-m-Y',strtotime($class12_end_date))?></div>
                            </div>
                        </div>
                    </div>
                    <!--//meta-->
                     <div class="details ">
                        <p><?php echo $class12_school_name?></p>
                    </div> 
                    <!--//details-->
                </div>
                <!--//item-->
                <div class="item">
                    <div class="meta">
                    <div class="upper-row" style="display: flex;">
                            <h3 class="job-title " style="width: 70%;">College</h3>
                            <div class="row">
                                <!-- <div class="company " style="flex-grow: 1;float: right; color: rgb(87, 218, 75);">Startup Hubs, San Francisco</div> -->
                                <div class="time " style="flex-grow: 1; float: right;color: rgb(87, 218, 75);"><?php echo date('d-m-Y',strtotime($college_1_start_date))?></div>
                            </div>
                        
                        </div>
                    </div>
                    <!--//meta-->
                    <div class="details ">
                        <p><?php echo $college_1_name?></p>
                    </div> 
                 <div class="details ">
                 <p><i>Course Duration</i></p>
                    <ul style="margin-left:-2%;">
                        <li> <?php echo $college_course_year?></li>
                    </ul>
                    </div> 
                    <!--//details-->
                </div>
                <!--//item-->
            </div>
        </section>
        <!--//Education-section-->
        <section class="section experiences-section">
            <h2 class="section-title" style="color: #3873b3;"><span class="icon-holder"></span>Experiences</h2>
            <hr color="#3873b3">
            <?php 
                      foreach ($work_1_start_date as $windex => $work) {
                        $work_start_date = $work;
                        $work_end_date = $work_1_end_date[$windex];
                        $work_company = $work_1_company[$windex];
                        $work_role = $work_1_role[$windex];
            
                        ?>
            <div class="item">
                <div class="meta">
                <div class="upper-row" style="display: flex;">
                        <h3 class="job-title " style="width: 70%;"><?php echo $work_role?></h3>
                        <div class="row">
                            <!-- <div class="company " style="flex-grow: 1;float: right; color: rgb(87, 218, 75);">Startup Hubs, San Francisco</div> -->
                            <div class="time " style="flex-grow: 1; float: right; color: rgb(87, 218, 75);"><?php echo date('d-m-Y',strtotime($work_start_date))?>&nbsp;-&nbsp;<?php echo date('d-m-Y',strtotime($work_end_date))?></div>
                        </div>
                    </div>
                </div>
                <!--//meta-->
                <div class="details ">
                        <p><?php echo $work_company?></p>
                    </div> 
                <!--//details-->
            </div>
            <!--//item-->
            <?php
             }
             ?>

            
        </section>
        <!--//section-->

        <section class="section projects-section ">
            <h2 class="section-title " style="color: #3873b3; "><span class="icon-holder "></span>Projects</h2>
            <hr color="#3873b3 ">
            <!-- <div class="intro ">
                <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
            </div> -->
            <!--//intro-->
            <?php
                        foreach ($project_1_date as $pindex => $project) {
                            $project_date = $project;
                            $project_name = $project_1_name[$pindex];
                            $project_outcome = $project_1_outcome[$pindex];
                            $project_tools_used = $project_1_tools_used[$pindex];

         
                    ?>
            <div class="item ">
                <span class="project-title " style="width: 70%;"><a href=" " target="_blank "><?php echo $project_name?></a></span> - 
                <div class="row">
                            <!-- <div class="company " style="flex-grow: 1;float: right; color: rgb(87, 218, 75);">Startup Hubs, San Francisco</div> -->
                            <div class="time " style="flex-grow: 1; float: right; color: rgb(87, 218, 75);"><?php echo date('d-m-Y',strtotime($project_date))?></div>
                        </div>
                
                <ul >
                     <li> <b>Project Outcome-</b>&nbsp;<?php echo $project_outcome?></li>
                    <li> <b>Tools used-</b>&nbsp;<?php echo $project_tools_used?></li></ul>
            </div>
            <!--//item-->
            <?php
             }
             ?>
            
        </section>
        <!--//section-->

        <section class="skills-section section ">
            <h2 class="section-title " style="color: #3873b3; "><span class="icon-holder "></span>Skills &amp; Proficiency</h2>
            <hr color="#3873b3 ">
            <?php
                        
                    foreach ($skills_1 as $sindex => $skills) {
                        
                        $skill = $skills;
                        ?>
            <div class="skillset ">
                <div class="item ">
                    <p class="level-title "><?php echo $skill?>&nbsp;</p>
                    <!-- <p class="level-title ">Javascript</p>
                    <p class="level-title ">React &amp; Angular</p> -->
                </div>
                <!--//item-->
            </div>
            <?php
                    }
                    ?>
        </section>
        <!--//skills-section-->

        <section class="certificate-section section ">
            <h2 class="section-title " style="color: #3873b3; "><span class="icon-holder "></span>Certificate</h2>
            <hr color="#3873b3 ">
            <?php
                                            
          foreach ($certificate_1_date as $cindex => $certificate) {                                     
           $certificate_date = $certificate;
           $certificate_name = $certificate_1_name[$cindex];
            ?>
            <div class="skillset ">
                <div class="item ">
                <ul class ="ft12"><li>
                    <b><?php echo $certificate_name?><br></b>
                    <i style="color: rgb(87, 218, 75);"><?php echo date('d-m-Y',strtotime($certificate_date))?>&nbsp;</i>  
                    </li></ul>
                    <!-- <p class="level-title ">Javascript</p>
                    <p class="level-title ">React &amp; Angular</p> -->
                </div>
                <!--//item-->
            </div>
            <?php
                        }
                    ?>
        </section>
        <!--//Certificate-section-->
        <section class="languages-section section ">
            <h2 class="section-title " style="color: #3873b3; "><span class="icon-holder "></span>Languages</h2>
            <hr color="#3873b3 ">
            <?php
                    foreach ($lang_1 as $lindex => $langs) {
                        $lang = $langs;
                        $lang_type = $language[$lindex];
                    ?>
            <div class="skillset ">
                <div class="item ">
                <p><b><?php echo $lang?></b><ul style="margin-left:-2%"><li><?php echo $lang_type ?></li></ul></p>
                    <!-- <p class="level-title ">Javascript</p>
                    <p class="level-title ">React &amp; Angular</p> -->
                </div>
                <!--//item-->
            </div>
            <?php
                    }
                    ?>
        </section>
        <!--//Languages-section-->

        <section class="links-section section ">
            <h2 class="section-title " style="color: #3873b3; "><span class="icon-holder "></span>Social Links</h2>
            <hr color="#3873b3 ">
            <div class="skillset ">
                <!-- <div class="item ">
                    <span class="project-title "><a href=" " target="_blank ">Facebook</a></span> - <span class="project-tagline ">A responsive website template designed to help startups promote their products or services.</span>
                </div> -->
                <div class="item ">
                    <span class="project-title "><a href="<?php echo $github?>" target="_blank ">Profile Link</a></span> - <span class="project-tagline ">Github</span>
                </div>
                <!--//item-->
                <div class="item ">
                    <span class="project-title "><a href="<?php echo $linkedin?>" target="_blank ">Profile Link</a></span> - <span class="project-tagline ">LinkedIn</span>
                </div>
                <!--//item-->
            </div>
        </section>
        <!--//skills-section-->

    </div>
    <input type="button" class="button" value="Print" onClick="myFun(this)">
    <!-- <button class="button" >Submit</button> -->
    <script>
        function myFun(x) {
            window.print();
            //x.style.display = 'none';
        }
    </script>
</BODY>

</HTML>