<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <title>Soghra College</title>
</head>
<body>
    <div class="jumbotron" style="background-image: url(img/slider.jpg);">
        <div class="jumbotron-cover">

            <?php include_once('components/nav.php');?>
              <div class="container-fluid jumbotron-container">
                  <div class="row">
                      <div class="col-lg-6">
                          <h1 class="jumbotron-text">
                            Soghra College <span>Estd 1978</span>
                          </h1>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center">
                          <div class="style-line"></div>
                      </div>
                  </div>
              </div>
              <div class="apply-btn">
                  Apply Now
              </div>
        </div>
    </div>
    <div class="container-fluid pl-0">
        <div class="row">
            <div class="col-lg-6 courses-left" id="departments">
                <h1 class="section-header"> Our<span> Courses</span></h1>
                <ul class="course-info-ul nav nav-tabs" id="myTab" role="tablist">
                    <li class="course-info-li">
                      <a class="course-info-link active" id="home-tab" data-toggle="tab" href="#arts" role="tab" aria-controls="arts" aria-selected="true">Bachelor of Arts</a>
                    </li>
                    <li class="course-info-li">
                      <a class="course-info-link" id="profile-tab" data-toggle="tab" href="#science" role="tab" aria-controls="science" aria-selected="false">Bachelor of Science</a>
                    </li>
                    <li class="course-info-li">
                      <a class="course-info-link" id="contact-tab" data-toggle="tab" href="#commerce" role="tab" aria-controls="commerce" aria-selected="false">Bachelor of Commerce</a>
                    </li>
                </ul>
                  <div class="container text-center my-5 view-more-container">
                    <a href="#" class="view-more">View More <img src="img/right-arrow-1.svg"></a>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade course-info-p show active" id="arts" role="tabpanel" aria-labelledby="home-tab">
                        The social sciences are fields of study that may involve more empirical methods to consider society and human behavior, including (but not limited to) anthropology, archaeology, criminology, economics, education, linguistics, political science and international relations, sociology, geography and psychology.
                        <br><br>
                        The arts and humanities are about how human beings express emotions and ideas. Arts subjects teach how to create things like drama, paintings and music. Humanities subjects study how these ideas have affected human culture and society.
                    </div>
                    <div class="tab-pane fade course-info-p" id="science" role="tabpanel" aria-labelledby="profile-tab">
                        Bachelor of Science (BSc) offers theoretical as well as practical knowledge about different subject areas. These subject areas usually include any one of the main Science fields (Physics, Chemistry, and Biology) and other fields depending on the specialisation a student opts.

                        Pursuing a BSc course is most beneficial for students who have a strong interest and background in Science and Mathematics. The course is also beneficial for students who wish to pursue multi and inter-disciplinary science careers in future.
                    </div>
                    <div class="tab-pane course-info-p fade" id="commerce" role="tabpanel" aria-labelledby="contact-tab">
                        Commerce and industry are the pillars of any developing economy. The objective of this course is to make the student familiar with the different angles relating to accounting, finance, banking business, organizational behavior and economy. Through this programme a student gains a comprehensive view of the functioning of an organization and also cultivates good communication skills.
                    </div>
                  </div>
                  
            </div>
            
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-lg-3 pull-left">
                <img src="img/principal.jpg" class="princi-img">
            </div>
            <div class="col-lg-8 princi-message">
                <h2>Principal's Message</h2>
                <p>You are indeed blessed to find an opportunity to get education at one of the best colleges of Bihar Sharif. The college has the privilege of having a healthy and rich values which have played pivotal role in shaping the future of students. This is my firm belief that the rich values and traditions imbibed here would carry you to greater heights.
                </p>
                <h3>~Farid Rahman</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="about-img-container">
                    <div class="about-img" style="background-image: url(img/4.jpg);"></div>
                    <div class="about-img" style="background-image: url(img/5.jpg);"></div>
                    <div class="about-img" style="background-image: url(img/6.jpg);"></div>
                </div>
            </div>
            <div class="col-lg-6 bg-white about-desc">
                <h1 class="section-header-2"> About<br>College</h1>
                <p>
                    Soghra College, Bihar Sharif is a Co-educational Institution offering courses upto Undegraduate level. It enjoys the singular distinction of being a college maintained by Magadh University, Bodh Gaya, which is well-reputed . The college deservedly prides itself on having a well-qualified teaching staff, a vastly spacious playground and profusely equipped science laboratories.
<br><br>
We offers 3 Years Full Time Bachelors Degree on following courses - Bachelor of Arts (BA), Bachelor of Commerce (B.Com), Bachelor of Science (B.Sc) and Intermediate course.
<br><br>
We are planning to open shortly new course in PARA MEDICAL. Paramedical courses after 12th are those courses in which students learn about multiple emergency services required before hospitalization. Paramedical professional assist doctor with all kind of diagnostic reports to start treatment of any particular ailment.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-2 py-5">
        <div class="row">
            <div class="col-lg-4 know-more-container">
                <h1 class="section-header-2">Know<br>More</h1>
                <ul class="know-more-ul">
                    <li class="course-info-li">
                      <a href="about.php" class="course-info-link active">About College</a>
                    </li>
                    <li class="course-info-li">
                      <a href="#" class="course-info-link">Student Life</a>
                    </li>
                    <li class="course-info-li">
                      <a href="#" class="course-info-link">Facilities</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="about.php"><div class="about-college-item-container" style="background-image: url(img/1.jpg);">
                                <div class="about-college-item-container-overlay">
                                    <h2>About College</h2>
                                    <hr class="separator">
                                    <p>The social sciences are fields of study that may involve more empirical methods  </p>
                                </div></a>
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <a href="#"><div class="about-college-item-container" style="background-image: url(img/2.png);">
                                <div class="about-college-item-container-overlay">
                                    <h2>Student Life</h2>
                                    <hr class="separator">
                                    <p>The social sciences are fields of study that may involve more empirical methods  </p>
                                </div>
                            </div></a>
                        </div> 
                        <div class="col-lg-4">
                            <a href="#"><div class="about-college-item-container" style="background-image: url(img/3.jpg);">
                                <div class="about-college-item-container-overlay">
                                    <h2>Facilities</h2>
                                    <hr class="separator">
                                    <p>The social sciences are fields of study that may involve more empirical methods  </p>
                                </div>
                            </div></a>
                        </div> 
                        </div>
                    </div>
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=soghra%20college+(Soghra%20College)&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="my-5 pl-3 pr-3"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('components/footer.php')?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script  src="./js/script.js"></script>

</body>
</html>