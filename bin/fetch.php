
 <?php
 
 include './dbconn.php';

 $show = "SELECT `id`, `loginEmail`, `time`, `name`, `title`, `phone`, `dob`, `address`, `linkedin`, `github`, `email`, `bio`, `work_1_start_date`, `work_1_end_date`, `work_1_company`, `work_1_role`, `work_2_start_date`, `work_2_end_date`, `work_2_company`, `work_2_role`, `school_start_date`, `school_end_date`, `school_name`, `college_1_start_date`, `college_1_end_date`, `college_1_name`, `college_1_course_name`, `college_2_start_date`, `college_2_end_date`, `college_2_name`, `college_2_course_name`, `college_3_start_date`, `college_3_end_date`, `college_3_name`, `college_3_course_name`, `skills_1`, `skills_2`, `skills_3`, `skills_4`, `skills_5`, `lang_1`, `lang_2`, `lang_3`, `certificate_1_date`, `certificate_1_name`, `certificate_2_date`, `certificate_2_name`, `certificate_3_date`, `certificate_3_name`, `interest_1`, `interest_2`, `interest_3`, `project_1_date`, `project_1_name`, `project_1_feature`, `project_1_outcome`, `project_1_tools_used`, `project_2_date`, `project_2_name`, `project_2_feature`, `project_2_outcome`, `project_2_tools_used`, `project_3_date`, `project_3_name`, `project_3_feature`, `project_3_outcome`, `project_3_tools_used`, `photo` FROM `niit` WHERE time";
 
 $result = $con->query($show);
 
 while($row = $result->fetch_assoc()){
     print_r($row); 
}
?> 
 /*
 ?>
 <?php
 /*
 <div>
 
     <!DOCTYPE html><html lang="en"><head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="./temp1.css" />
     <title>Document</title>
     
     
     <!-- Add icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
     <!-- jQuery library --> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
     <body style="background-color: grey;">
         <div class="main">
             <div class="profile-img"><img src="<?php echo "".$row['photo']?>" alt=""></div>
             <h1><?php echo "".$row['name']?></h1>
             <h3 class="ft1"><?php echo "".$row['title']?></h3>
              
           <div class="essentials"> 
               <ul style="list-style-type: none;">
                  <li> <?php echo "".$row['email']?> &nbsp;  <i class="fa fa-envelope-open"></i></li>
                  <br>
                  <li><?php echo "".$row['phone']?>&nbsp;<i class="fa fa-phone-square" aria-hidden="true"></i></li>
                  <br>
                  <li><?php echo "".$row['address']?> &nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i></li>
                  <br>
                  <li><?php echo "".$row['dob']?> &nbsp;<i class="fa fa-calendar" aria-hidden="true"></i></li>
               </ul>
               
           </div>
           <hr class="new1">
           <!--left-->
            <div class="left">
              <h2>ABOUT ME</h2>
              <p class="p2"><?php echo "".$row['bio']?></p>
             
              <h2 > EDUCATION</h2>
              <p class="ft123"><b>Senior secondary school&nbsp;<br></b><?php echo "".$row['school_name']?>&nbsp;</p>
              <p  class="ft16"><i><?php echo "".$row['school_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['school_end_date']?></i></p>
              <!--<p ><i>Courses</i></p>
              <ul class ="ft12"><li>computer science</li></ul>
                 <br>-->
                 <p class="ft124"><b><?php echo "".$row['college_1_name']?><br></b>&nbsp;</p>  
                 <p  class="ft16"><i><?php echo "".$row['college_1_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_1_end_date']?></i></p>
              <p ><i>Courses</i></p>
              <ul class ="ft12"><li><?php echo "".$row['college_1_course_name']?></li></ul>
              
                 <p class="ft124"><b><?php echo "".$row['college_2_name']?><br></b>&nbsp;</p>  
                 <p  class="ft16"><i><?php echo "".$row['college_2_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_2_end_date']?></i></p>
              <p ><i>Courses</i></p>
              <ul class ="ft12"><li> <?php echo "".$row['college_2_course_name']?></li></ul>
              
                 <p class="ft124"><b><?php echo "".$row['college_3_name']?><br></b>&nbsp;</p>  
                 <p  class="ft16"><i><?php echo "".$row['college_3_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['college_3_end_date']?></i></p>
              <p ><i>Courses</i></p>
              <ul class ="ft12"><li> <?php echo "".$row['college_3_course_name']?></li></ul>
              
              <h2 > WORK EXPERIENCE</h2>
             
              <p class="ft124"><b><?php echo "".$row['work_1_company']?><br></b></p>  
                 <p  class="ft16"><i><?php echo ''.$row['work_1_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['work_1_end_date']?></i></p>
              <p ><i>JOB ROLE</i></p>
              <ul class ="ft12"><li> <?php echo "".$row['work_1_role']?></li></ul>
              
              
              <p class="ft124"><b><?php echo "".$row['work_2_company']?><br></b></p>  
                 <p  class="ft16"><i><?php echo "".$row['work_2_start_date']?>&nbsp;-&nbsp;<?php echo "".$row['work_2_end_date']?></i></p>
              <p ><i>JOB ROLE</i></p>
              <ul class ="ft12"><li> <?php echo "".$row['work_2_role']?></li></ul>
              
              <h2 > CERTIFICATES</h2>
              
              <p class="ft124"><b><?php echo "".$row['certificate_1_name']?><br></b></p>  
                 <p  class="ft16"><i><?php echo ''.$row['certificate_1_date']?>&nbsp;/i></p>
              
                 
              
              <p class="ft124"><b><?php echo "".$row['certificate_2_name']?><br></b></p>  
                 <p  class="ft16"><i><?php echo ''.$row['certificate_2_date']?>&nbsp;</i></p>
                 
                 
                 <p class="ft124"><b><?php echo "".$row['certificate_3_name']?><br></b></p>  
                    <p  class="ft16"><i><?php echo ''.$row['certificate_3_date']?>&nbsp;</i></p>
                    
                    
 
            </div>
           <!--right-->
            <div class="right">
             <h2 >  PERSONAL PROJECTS</h2>
             <p ><i><?php echo "".$row['project_1_name']?>/i></p>
             <p  class="ft16"><i><?php echo ''.$row['project_1_date']?>&nbsp;</i></p>
             <ul class ="ft12"><li> <b>Project Features-</b><?php echo "".$row['project_1_feature']?></li>
               <li> <b>Project Outcome-</b><?php echo "".$row['project_1_outcome']?></li>
               <li> <b>Tools used-</b><?php echo "".$row['project_1_tools_used']?></li></ul>
               <br><br>
               <p ><i><?php echo "".$row['project_2_name']?></i></p>
             <p  class="ft16"><i><?php echo ''.$row['project_2_date']?>&nbsp;</i></p>
             <ul class ="ft12"><li> <b>Project Features-</b><?php echo "".$row['project_2_feature']?></li>
               <li> <b>Project Outcome-</b><?php echo "".$row['project_2_outcome']?></li>
               <li> <b>Tools used-</b><?php echo "".$row['project_2_tools_used']?>.</li></ul>
               <br><br>
               <p ><i><?php echo "".$row['project_3_name']?></i></p>
             <p  class="ft16"><i><?php echo ''.$row['project_3_date']?>&nbsp;</i></p>
             <ul class ="ft12"><li> <b>Project Features-</b><?php echo "".$row['project_3_feature']?></li>
               <li> <b>Project Outcome-</b><?php echo "".$row['project_3_outcome']?></li>
               <li> <b>Tools used-</b><?php echo "".$row['project_3_tools_used']?></li></ul>
               <br><br>
 
               <h2 > SKILLS</h2> <br>
               <h4 class="ft90"><?php echo "".$row['skills_1']?></h4>
               <h4 class="ft90"><?php echo "".$row['skills_2']?></h4>
               <h4 class="ft90"><?php echo "".$row['skills_3']?></h4>
               <br> <br>
               <h4 class="ft90"><?php echo "".$row['skills_4']?></h4>
               <h4 class="ft90"><?php echo "".$row['skills_5']?></h4>
               <br> <br>
               <h2 > LANGUAGES</h2> <br>
               <p><b><?php echo "".$row['lang_1']?></b>
                 <div class="slidecontainer">
                   <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </p>
                 </div>
                <br>
               <p><b><?php echo "".$row['lang_2']?></b>
                 <div class="slidecontainer">
                   <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </p>
                 </div>
                 <br>
                 <p><b><?php echo "".$row['lang_3']?></b>
                   <div class="slidecontainer">
                     <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                   </p>
                   </div>
                  <br> <br>
                   <h2>INTERESTS</h2>
                   <br>
                   <ul class ="ft10">
                       <li><?php echo "".$row['interest_1']?></li>
                     <br>
                     <li><?php echo "".$row['interest_2']?></li>
                     <br>
                     <li><?php echo "".$row['interest_3']?></li>
                 </ul>
            </div>
 
 
           </div>     
                   
     </body></html>
     <!DOCTYPE html>
     <html lang="en">
     <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
     <link rel="stylesheet" href="./vscode/template1.css">
     <title>Template 1</title>
 
 
     <!-- Add icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
      </head>
 
      <body>
 
     <div class="main">
         <div class="left"> 
             <br>
             <div class="profile-img"><img src="<?php echo "".$row['photo']?>" alt=""></div>
 
             <div class="box-1">
                 <div class="heading">
                     <p>Contact</p>
                 </div>
                 <p class="p1"><i class="fa fa-phone" id="icons">call</i><?php echo "".$row['phone']?></p>
                 <p class="p1"><i class="fa fa-calendar" id="icons">DOB</i><?php echo "".$row['dob']?></p>
 
                 <p class="p1">
                     <i class="fa fa-envelope" id="icons"></i><b style="font-size: 12px!important;"><?php echo "".$row['email']?></b>
                 </p>
             </div>
 
             
             <div class="box-1">
                 <div class="heading">
                     <p>ADDRESS </p>
                 </div>
 
                 <p class="p1"><i class="fa fa-location-arrow" id="icons">Address</i><?php echo "".$row['address']?></p>
             </div>
 
             
             <div class="box-1">
                 <div class="heading">
                     <p>SKILLS</p>
                 </div>
                 <p class="p1"><?php echo "".$row['skills_1']?>
                     
                 </p>
                 <p class="p1"><?php echo "".$row['skills_2']?>
                     
                 </p>
 
 
                 <p class="p1"><?php echo "".$row['skills_3']?>
                    
                 </p>
                 <p class="p1"><?php echo "".$row['skills_4']?>
                     
                 </p>
                 <p class="p1"><?php echo "".$row['skills_5']?>
                     
                 </p>
             </div>
             <div class="box-1">
                 <div class="heading">
                     <p>LANGUAGES</p>
                 </div>
                 <p class="p1"><?php echo "".$row['lang_1']?>
                     
                 </p>
                 <p class="p1"><?php echo "".$row['lang_2']?>
                     
                 </p>
                 <p class="p1"><?php echo "".$row['lang_3']?>
                    
                 </p>
             </div>
 
             <div class="box-1" style="color: white;">
                 <div class="heading">
                     <h2><i class="fa fa-certificate" id="icons" style="font-size: 20px!important; color:white;"></i>Certificate</h2>
                 </div>
                 <p class="p1" style="font-size: 16px!important;"><?php echo ''.$row['certificate_1_date']?>  <span><?php echo "".$row['certificate_1_name']?></span></p>
                 <p class="p1" style="font-size: 16px!important;"><?php echo ''.$row['certificate_2_date']?>  <span><?php echo "".$row['certificate_2_name']?></span></p>
                 <p class="p1" style="font-size: 16px!important;"><?php echo ''.$row['certificate_3_date']?>  <span><?php echo "".$row['certificate_3_name']?></span></p>
             
             </div>
 
             <div class="box-1">
                 <div class="heading">
                     <p>LINKS</p>
                 </div>
                 <p class="p1"><a href="<?php echo "".$row['github']?>" target="_blank"><i class="fa fa-github" id="icons"> GITHUB</i></a></p>
                 <p class="p1"><a href="<?php echo "".$row['linkedin']?>" target="_blank"><i class="fa fa-linkedin" id="icons"> LinkedIn</i></a></p>
             </div>
 
 
 
         </div>
         <div class="right">
             <div class="name-div">
                 <h1><?php echo "".$row['name']?></h1>
                 <p><?php echo "".$row['title']?></p>
             </div>
 
             <div class="box-2">
                 <h2><i class="fa fa-user" id="icons" style="font-size: 28px!important;">ABOUT Me</i> </h2>
                 <p class="p2">
                 <?php echo "".$row['bio']?>
             </p>
             </div>
 
             <div class="box-2">
                 <h2><i class="fa fa-graduation-cap" id="icons" style="font-size: 28px!important;">EDUCATION</i> </h2>
 
                 <p class="p3"><?php echo "".$row['school_start_date']?> - <?php echo "".$row['school_end_date']?> <span><?php echo "".$row['school_name']?></span></p>
                 <p class="p2">
                 <!--<?php echo "".$row['']?>-->
                 </p>
 
                 <p class="p3"><?php echo "".$row['college_1_start_date']?> - <?php echo "".$row['college_1_end_date']?> <span><?php echo "".$row['college_1_name']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['college_1_course_name']?>
                 </p>
 
                 <p class="p3"><?php echo "".$row['college_2_start_date']?> - <?php echo "".$row['college_2_end_date']?> <span><?php echo "".$row['college_2_name']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['college_2_course_name']?>
                 </p>
                 
 
                 <p class="p3"><?php echo "".$row['college_3_start_date']?> - <?php echo "".$row['college_3_end_date']?> <span><?php echo "".$row['college_3_name']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['college_3_course_name']?>
                 </p>
 
             </div>
 
             <div class="box-2">
                 <h2><i class="fa fa-briefcase" id="icons" style="font-size: 28px!important;">Work Experience</i> </h2>
 
                 <p class="p3"><?php echo ''.$row['work_1_start_date']?> - <?php echo "".$row['work_1_end_date']?> <span><?php echo "".$row['work_1_company']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['work_1_role']?>
                 </p>
 
                 <p class="p3"><?php echo "".$row['work_2_start_date']?> - <?php echo "".$row['work_2_end_date']?> <span><?php echo "".$row['work_2_company']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['work_2_role']?>
                 </p>
             </div>
 
             <div class="box-2">
                 <h2><i class="fa fa-pencil" id="icons" style="font-size: 28px!important;">Projects</i> </h2>
 
                 <p class="p3"><?php echo ''.$row['project_1_date']?> <span><?php echo "".$row['project_1_name']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['project_1_feature']?>
                 </p>
                 <p class="p2">
                 <?php echo "".$row['project_1_outcome']?>
                 </p>
                 <p class="p2">
                 <?php echo "".$row['project_1_tools_used']?>
                 </p>
 
                 <p class="p3"><?php echo ''.$row['project_2_date']?> <span><?php echo "".$row['project_2_name']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['project_2_feature']?>
                 </p>
                 <p class="p2">
                 <?php echo "".$row['project_2_outcome']?>
                 </p>
                 <p class="p2">
                 <?php echo "".$row['project_2_tools_used']?>
                 </p>
 
                 <p class="p3"><?php echo ''.$row['project_3_date']?> <span><?php echo "".$row['project_3_name']?></span></p>
                 <p class="p2">
                 <?php echo "".$row['project_3_feature']?>
                 </p>
                 <p class="p2">
                 <?php echo "".$row['project_3_outcome']?>
                 </p>
                 <p class="p2">
                 <?php echo "".$row['project_3_tools_used']?>
                 </p>
             </div>
 
             <div class="box-2">
                 <h2><i class="fa fa-pinterest" id="icons" style="font-size: 28px!important;">Interest</i> </h2>
 
                 <p class="p3"> <span><?php echo "".$row['interest_1']?></span></p>
                 <p class="p3"> <span><?php echo "".$row['interest_2']?></span></p>
                 <p class="p3"> <span><?php echo "".$row['interest_3']?></span></p>
                 
             </div>
             <!--
             <div class="box-2">
                 <button class='btn' onclick="printCV()"><i class='fa fa-print'></i>Print</button> 
             <script>
                 function printCV(){
                     window.print();
                     
                     }
             </script>
             </div>-->
 
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
 </div>
 
 ?>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./n1.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <title>Document</title>
 </head>
 
 <body style="background-color: pink;">
 
     <div class="container">
 
         <div class="header">
 
             <div class="profile-img">
                 <img src="<?php echo "".$row['photo']?>" alt="" width="100" height="100" srcset="">
             </div>
             
             <div class="htxt">
                 <h3> <?php echo "".$row['name']?></h3>
                 <h6><?php echo "".$row['title']?></h6>
             </div>
             <div class="con">
                 <div class="contact">
                     <p><?php echo "".$row['phone']?>  <i class="fa fa-phone"></i></p>
                  </div>
                 <div class="contact">
                     <p><?php echo "".$row['email']?>  <i class="fa fa-envelope-open"></i></p>
                 </div>
                 <div class="contact">
                     <p><?php echo "".$row['dob']?> <i class="fa fa-calendar"></i></p>
                 
                  </div>
                 <div class="contact">
                    <p><?php echo "".$row['address']?> <i class="fa fa-map-marker"></i></p>
                 </div>
             </div>
 
             <table style="border:1px solid;width:100%;margin-left: 0px;margin-top: 150px;">
                 <tr><th></th></tr>
             </table>
             
         </div>
         <div class="about col-12">
             <div class="about1 col-7">
                 <h3><i class="fa fa-user"></i> About</h3>
 
                 <p>
                     <?php echo "".$row['bio']?>
                 </p>
             </div>
             <div class="lang col-5">
                 <div class="lang1">
                     <h3><i class="fa fa-langauge"></i>Langauge</h3>
                     <div class="lang2">
                         <div class="lang-name"><?php echo "".$row['lang_1']?></div>
                         <input type="range" min="1" max="100" value="50" class="slider" id="myRange">    
                     </div>
                     <div class="lang2">
                         <div class="lang-name"><?php echo "".$row['lang_2']?></div>
                         <input type="range" min="1" max="100" value="50" class="slider" id="myRange">    
                     </div>
                     <div class="lang2">
                         <div class="lang-name"><<?php echo "".$row['lang_3']?>/div>
                         <input type="range" min="1" max="100" value="50" class="slider" id="myRange">    
                     </div>
                 </div>
             </div>
         </div>
         
         <div class="work">
             <div class="w1 col-7">
                 <h3> <i class="fa fa-briefcase"></i> Work EXPERIENCE</h3>
                 <div class="workDetails">
                     <h6><?php echo "".$row['work_1_company']?></h6>
                     <p><?php echo ''.$row['work_1_start_date']?> &nbsp;&nbsp; - &nbsp;&nbsp;<?php echo "".$row['work_1_end_date']?></p>
                     <p><?php echo "".$row['work_1_role']?></p>
                 </div>
                 <div class="workDetails">
                     <h6><?php echo "".$row['work_2_company']?></h6>
                     <p><?php echo ''.$row['work_2_start_date']?> &nbsp;&nbsp; - &nbsp;&nbsp;<?php echo "".$row['work_2_end_date']?></p>
                     <p><?php echo "".$row['work_2_role']?></p>
                 </div>
 
             </div>
             <div class="intereset col-5">
                 <h3>Intereset</h3>
                 <div class="intersetdetails">
                     <p><?php echo "".$row['interest_1']?></p>
                 </div>
                 <div class="intersetdetails">
                     <p><?php echo "".$row['interest_2']?></p>
                 </div>
                 <div class="intersetdetails">
                     <p><?php echo "".$row['interest_3']?></p>
                 
                 </div>
             </div>
             
         </div>
         <div class="qul col-12">
             <div class="acd col-7">
                 <h3><i class="fa fa-graduation-cap"></i> Qualification</h3>
                 <table>
                 <tr>
                     <th>School/University Name</th>
                     <th>Course</th>
                     <th>Starting Year</th>
                     <th>Ending Year</th>
                 </tr>
                 <tr>
                     <td><?php echo "".$row['school_name']?></td>
                     <td>school board</td>
                     <td><?php echo "".$row['school_start_date']?></td>
                     <td><?php echo "".$row['school_start_date']?></td>
                 </tr>
                 <tr>
                     <td><?php echo "".$row['college_1_name']?></td>
                     <td><?php echo "".$row['college_1_course_name']?></td>
                     <td><?php echo "".$row['college_1_start_date']?></td>
                     <td><?php echo "".$row['college_1_end_date']?></td>
                 </tr>
                 
                 <tr>
                     <td><?php echo "".$row['college_2_name']?></td>
                     <td><?php echo "".$row['college_2_course_name']?></td>
                     <td><?php echo "".$row['college_2_start_date']?></td>
                     <td><?php echo "".$row['college_2_end_date']?></td>
                 </tr>
                 <tr>
                     <td><?php echo "".$row['college_3_name']?></td>
                     <td><?php echo "".$row['college_3_course_name']?></td>
                     <td><?php echo "".$row['college_3_start_date']?></td>
                     <td><?php echo "".$row['college_3_end_date']?></td>
                 </tr>
                 </table>
             </div>
             <div class="skills col-5">
                 <h3>Skills</h3>
                 <div class="skills1">
                     <div class="skills-name"><?php echo "".$row['skills_1']?></div>
                     <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </div>
                 <div class="skills1">
                     <div class="skills-name"><?php echo "".$row['skills_2']?></div>
                     <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </div>
                 <div class="skills1">
                     <div class="skills-name"><?php echo "".$row['skills_3']?></div>
                     <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </div>
                 <div class="skills1">
                     <div class="skills-name"><?php echo "".$row['skills_4']?></div>
                     <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </div>
                 <div class="skills1">
                     <div class="skills-name"><?php echo "".$row['skills_5']?></div>
                     <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                 </div>
             </div>
             
         </div>
 
         <div class="pro col-12">
             <div class="project col-6">
                 <h3><i class="fa fa-project"></i>Project</h3>
                 <table>
                     <tr>
                         <th>Project Completeion Date</th>
                         <th>Project Name</th>
                         <th>Features</th>
                         <th>Outcome</th>
                         <th>Tools Used</th>
                     </tr>
                     <tr>
                         <td><?php echo ''.$row['project_1_date']?></td>
                         <td><?php echo "".$row['project_1_name']?></td>
                         <td><?php echo "".$row['project_1_feature']?></td>
                         <td><?php echo "".$row['project_1_outcome']?></td>
                         <td><?php echo "".$row['project_1_tools_used']?></td>
                     </tr>
                     
                     <tr>
                         <td><?php echo ''.$row['project_2_date']?></td>
                         <td><?php echo "".$row['project_2_name']?></td>
                         <td><?php echo "".$row['project_2_feature']?></td>
                         <td><?php echo "".$row['project_2_outcome']?></td>
                         <td><?php echo "".$row['project_2_tools_used']?></td>
                     </tr>
                     
                     <tr>
                         <td><?php echo ''.$row['project_3_date']?></td>
                         <td><?php echo "".$row['project_3_name']?></td>
                         <td><?php echo "".$row['project_3_feature']?></td>
                         <td><?php echo "".$row['project_3_outcome']?></td>
                         <td><?php echo "".$row['project_3_tools_used']?></td>
                     </tr>
                 </table>
             </div>
             <div class="cer col-5">
                 <div class="certificate">
                     <h3><i class="fa fa-certificate"></i>Certificate</h3>
                 <table>
                     <tr>
                         <th>Certificate Date</th>
                         <th>Certificate Detail</th>
                     </tr>
                     <tr>
                         <td><?php echo ''.$row['certificate_1_date']?></td>
                         <td><?php echo "".$row['certificate_1_name']?></td>
                     </tr>
                     <tr>
                         <td><?php echo ''.$row['certificate_2_date']?></td>
                         <td><?php echo "".$row['certificate_1_name']?></td>
                     </tr>
                     <tr>
                         <td><?php echo ''.$row['certificate_3_date']?></td>
                         <td><?php echo "".$row['certificate_1_name']?></td>
                     </tr>
                 </table>
             
                 </div>
             </div>
         </div>
 
     </div>
 
 </body>
 
 </html>
 
 <?php
 }*/
 ?>
 