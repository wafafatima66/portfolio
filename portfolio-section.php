<style>

/* Style the tab */
.tab {
  overflow: hidden;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  color:  #1E212D;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  border-top: none;
}
</style>
</style>

<section class="Portfolio-section mb-5 pb-5" id="portfoliosection">
    <div class="container portfolio-container">
        <h4 class="text-center ">PORTFLIO</h4>

        <!-- <div class="tab mt-5 d-flex justify-content-center">
            <button class="tablinks active" onclick="openProject(event,'All')">All</button>
            <button class="tablinks" onclick="openProject(event,'Static')">Static</button>
            <button class="tablinks" onclick="openProject(event,'Full')">Full Stack</button>
            <button class="tablinks" onclick="openProject(event,'Javascript')">Javascript</button>
            <button class="tablinks" onclick="openProject(event,'React')">React</button>
        </div> -->

        

        <div id="All" class=" project tabcontent" style="display: block;">
        <div class="row">
            <?php include "projects/berrieshut.php";?>
           <?php include "projects/project-1.php";?>
           <?php include "projects/project-2.php";?>
           <!-- <?php include "projects/project-3.php";?> -->
           <?php include "projects/project-4.php";?>
           <!-- <?php include "projects/project-5.php";?>
           <?php include "projects/project-6.php";?> -->
        </div>
        </div>

        <!-- <div id="Static" class=" project tabcontent" >
            <?php include "projects/project-4.php";?>
        </div>

        <div id="Full" class="  project tabcontent" >
        <div class="row">
            <?php include "projects/project-1.php";?>
            <?php include "projects/project-2.php";?>
            <?php include "projects/project-3.php";?>
            </div>
        </div>

        <div id="Javascript" class=" project tabcontent" >
            <?php include "projects/project-5.php";?>   
        </div>

        <div id="React" class=" project tabcontent ">
            <?php include "projects/project-6.php";?>   
        </div> -->

        
        <?php include 'berrieshut-modal.php'; ?>
        <?php include 'project-1-modal.php'; ?>
        <?php include 'project-2-modal.php'; ?>
        <?php 
        // include  'project-3-modal.php'; 
        ?>
        <?php include 'project-4-modal.php'; ?>

        <script>
            // function openProject(projectName) {
            // var i;
            // var x = document.getElementsByClassName("project");
            // for (i = 0; i < x.length; i++) {
            //     x[i].style.display = "none";  
            // }
            // document.getElementById(projectName).style.display = "block";  
            // }

            function openProject(evt, projectName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(projectName).style.display = "block";
                evt.currentTarget.className += " active";
                }
        </script>

        <!-- <div class="row portfolio-row mt-5 mb-5"> 
        

            <div class="col-lg-7 col-sm-12 portfolio-video">
                <img src="img/Picture3.png" alt="" class="portfolio-img">
                <i class="far fa-play-circle play-btn" onclick="playvideo('video/Media2.mp4')"></i>
            </div>

            <div class="col-lg-5 col-sm-12 mt-2">
                <h5>HR Management System</h5>
                <p>Established HRMIS using HTML5 / CSS3 / Bootstap / PHP / JS / MYSQL.
                    Designed the database system to ensure the smooth functioning of the system.
                    The system includes Employee leave management system, employee documents, information
                    handling system, events, and training regulating system, and well-defined UI report.</p>

            </div>
        </div>

        <div class="row portfolio-row mt-5 mb-5">

            <div class="col-lg-6 col-sm-12 portfolio-video">
                <img src="img/5.png" alt="" class="portfolio-img">
                <i class="far fa-play-circle play-btn" onclick="playvideo('video/Media3.mp4')"></i>
            </div>

            <div class="col-lg-6 col-sm-12 mt-2">
                <h5>Travel Website</h5>
                <p>Tools: HTML5 / CSS3 / Bootstrap / PHP / JS / MYSQL.
                    Travel Website Developed in team collaboration.
                    Developed the admin panel for the travel website enhancing the functionality of the administrator.
                    Booking system integrated for hotel booking and management.
                    Information on various travel places of Bangladesh to enhance the experience of the traveler.
                </p>

            </div>


        </div>


        <div class="row portfolio-row mt-5 mb-5">

            <div class="col-lg-6 col-sm-12 portfolio-video">
                <img src="img/6.png" alt="" class="portfolio-img">
                <i class="far fa-play-circle play-btn" onclick="playvideo('video/Media4.mp4')"></i>
            </div>

            <div class="col-lg-6 col-sm-12 mt-2">
                <h5>Educational Instituate Website</h5>
                <p>Developed website entirely using HTML5 / CSS3 / Bootstrap /PHP / JS / MYSQL.
                    Incorporated database management system to enhance trouble-free registration of students.
                    Integrated PHP mail function and messenger bot for effortless communication of the visitors.</p>

            </div>
        </div> -->

        <!--   <div class="text-center">
            <button class="portfolio-btn rounded">VIEW MORE PROJECTS</button>
        </div>
 
    </d iv>

     <div class="videoplayer" id="videoplayer">
            <video src="Media2.mp4" class="myvideo" id="myvideo" controls autoplay width="100%"></video>
            <i class="far fa-times-circle close-btn" onclick="stopvideo()"></i>
        </div> -->

</section>