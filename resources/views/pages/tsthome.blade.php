@extends ('layouts.app')
@section('content')
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<script type="text/jQuery">
$(function() {

  $('.tab-panels .tabs li').on('click', function() {

      var $panel = $(this).closest('.tab-panels');

      $panel.find('.tabs li.active').removeClass('active');
      $(this).addClass('active');

      //figure out which panel to show
      var panelToShow = $(this).attr('rel');

      //hide current panel
      $panel.find('.panel.active').slideUp(300, showNextPanel);

      //show next panel
      function showNextPanel() {
          $(this).removeClass('active');

          $('#'+panelToShow).slideDown(300, function() {
              $(this).addClass('active');
          });
      }
  });


});
</script>
<div class="tab-panels" >
            <ul class="tabs">
                <li rel="panel1" class="active">panel1</li>
                <li rel="panel2">panel2</li>
                <li rel="panel3">panel3</li>
                <li rel="panel4">panel4</li>
            </ul>

            <div id="panel1" class="panel active">
                content1<br/>
                content1<br/>
                content1<br/>
                content1<br/>
                content1<br/>
            </div>
            <div id="panel2" class="panel">
                content2<br/>
                content2<br/>
                content2<br/>
                content2<br/>
                content2<br/>
            </div>
            <div id="panel3" class="panel">
                content3<br/>
                content3<br/>
                content3<br/>
                content3<br/>
                content3<br/>
            </div>
            <div id="panel4" class="panel">
                content4<br/>
                content4<br/>
                content4<br/>
                content4<br/>
                content4<br/>
            </div>
        </div>




<div class="tg-theme-heading">
  <h2>WHAT TO EXPECT</h2>
  <span class="tg-roundbox"></span>
  <div class="tg-description">
    <p>In just three simple steps, DocDirect will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest
      healthcare facility.</p>
  </div>
</div>
<div class="col-sm-4 col-xs-12 tg-expectwidth">
  <div class="tg-search-category">
    <div class="tg-displaytable">

      <div class="tg-displaytablecell">
        <div class="tg-box">
          <a href="http://santemap.firstonenews.com/dir-search/?directory_type=doctor"><h3>find your doctor</h3></a>
          <i class="icon-stethoscope"></i>
          <a href="http://santemap.firstonenews.com/dir-search/?directory_type=doctor"><span class="tg-show"><em class="icon-add"></em></span></a>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="col-sm-4 col-xs-12 tg-expectwidth">
  <div class="tg-search-category">
    <div class="tg-displaytable">

      <div class="tg-displaytablecell">
        <div class="tg-box">
          <a href="http://santemap.firstonenews.com/dir-search/?directory_type=hospital"><h3>NEAREST HOSPITAL</h3></a>
          <i class="icon-healthcare"></i>
          <a href="http://santemap.firstonenews.com/dir-search/?directory_type=hospital"><span class="tg-show"><em class="icon-add"></em></span></a>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="col-sm-4 col-xs-12 tg-expectwidth">
  <div class="tg-search-category">
    <div class="tg-displaytable">

      <div class="tg-displaytablecell">
        <div class="tg-box">
          <a href="http://santemap.firstonenews.com/dir-search/?directory_type=pharmacy"><h3>NEAREST PHARMACY</h3></a>
          <i class="icon-capsules"></i>
          <a href="http://santemap.firstonenews.com/dir-search/?directory_type=pharmacy"><span class="tg-show"><em class="icon-add"></em></span></a>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="container">
<div class="tg-section-head tg-haslayout" >
                                    <div class="tg-section-heading tg-haslayout">
                        <h2>FEATURED LISTINGS</h2>
                    </div>
                                                    <div class="tg-description tg-haslayout">
                        <p>In just three simple steps, DocDirect will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest healthcare facility.</p>
                    </div>
  </div>
  <div class="col-md-12 theme-notification message-informations alert alert-info" role="alert">
    <p>No users Found.</p>
  </div>
</div>
<div class="container">
<div class="tg-theme-heading">
  <h2>Top Categories</h2>
  <span class="tg-roundbox"></span>
  <div class="tg-description">
    <p>In just three simple steps, DocDirect will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find your nearest
      healthcare facility.</p>
  </div>
</div>
</div>
<div class="col-xs-12 col-md-12 builder-column ">

  <div class="sc-dir-types catagories-types">
    <div class="tg-findbycategorys">
      <div class="specialities-list">
        <ul>
          <li id="dir-127">
            <div class="tg-checkbox user-selection">
              <div class="tg-packages">
                <a href="http://santemap.firstonenews.com/dir-search/?directory_type=doctor">
                  <label>
							                                  <i class="icon-stethoscope"></i>
                                                            Docteur<span class="count">9</span>
                          </label>
                </a>
              </div>
            </div>
          </li>
          <li id="dir-126">
            <div class="tg-checkbox user-selection">
              <div class="tg-packages">
                <a href="http://santemap.firstonenews.com/dir-search/?directory_type=hospital">
                  <label>
							                                  <i class="icon-Hospitalmedicalsignalofacrossinacircle"></i>
                                                            hôpital<span class="count">7</span>
                          </label>
                </a>
              </div>
            </div>
          </li>
          <li id="dir-125">
            <div class="tg-checkbox user-selection">
              <div class="tg-packages">
                <a href="http://santemap.firstonenews.com/dir-search/?directory_type=clinic">
                  <label>
							                                  <i class="icon-Clinichistorymedicalpaperonclipboard"></i>
                                                            clinique<span class="count">8</span>
                          </label>
                </a>
              </div>
            </div>
          </li>
          <li id="dir-123">
            <div class="tg-checkbox user-selection">
              <div class="tg-packages">
                <a href="http://santemap.firstonenews.com/dir-search/?directory_type=pharmacy">
                  <label>
							                                  <i class="icon-Pills"></i>
                                                            Pharmacie<span class="count">8</span>
                          </label>
                </a>
              </div>
            </div>
          </li>
          <li id="dir-122">
            <div class="tg-checkbox user-selection">
              <div class="tg-packages">
                <a href="http://santemap.firstonenews.com/dir-search/?directory_type=blood-bank">
                  <label>
							      <i class="icon-BloodDonation"></i>
                      Banque du sang<span class="count">9</span>
                    </label>
                </a>
              </div>
            </div>
          </li>
          <li id="dir-121">
            <div class="tg-checkbox user-selection">
              <div class="tg-packages">
                <a href="http://santemap.firstonenews.com/dir-search/?directory_type=opticien">
                  <label>
							        <i class="fa fa-eye"></i>
                      Opticien<span class="count">10</span>
                    </label>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="tg-main-section haslayout tg-areuadoctor stretch_section" style="padding-bottom: 0px; background-repeat: no-repeat; background-position: 0% 100%; position: relative; left: -89.5px; box-sizing: border-box; width: 1349px; padding-left: 89.5px; padding-right: 89.5px;"
  data-speed="0.5" data-bleed="0" data-appear-top-offset="600" data-parallax="scroll" data-position="center 0" data-image-src="http://santemap.firstonenews.com/wp-content/uploads/2016/03/bgparallax-01.jpg">
  <div class="builder-items">
    <div class="col-xs-12 col-md-6 builder-column col-sm-12 col-lg-6  pull-right">

      <div class="sc-about-us tg-healthcareonthego">
        <div class="tg-contentbox tg-haslayout">
          <div class="tg-heading-border">
            <h2>ARE YOU A DOCTOR?</h2>

            <h3>REGISTER NOW AND REACH THOUSANDS OF PATIENTS</h3>
          </div>
          <div class="tg-description">
            <p>We know how much it takes to become a qualified doctor so we have taken away all your hassle to look out for your patients once you have qualified. DocDirect will give you an easy reach to all the patients, all you need is to sign up!</p>
          </div>

          <div class="tg-btns">
            <a class="tg-btn" href="#">signup now</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 builder-column col-sm-12 col-lg-6  pull-left">

      <figure class="frame-img"><img src="http://mixtapekitchen.com/wp-content/uploads/2015/05/chief-keef-doctor-500x500.jpeg" alt="Image Frame"></figure>
    </div>
  </div>
</section>
<section class="tg-main-section haslayout  default" style="padding-bottom:0px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;">
  <div class="builder-items">
    <div class="col-xs-12 col-md-6 builder-column ">

      <div class="sc-about-us tg-healthcareonthego">
        <div class="tg-contentbox tg-haslayout">
          <div class="tg-heading-border">
            <h2>HEALTHCARE ON THE GO</h2>
          </div>
          <div class="tg-description">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim ad minim veniam quis nostrud.</p>
          </div>

          <ul>
            <li>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</li>
            <li>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.</li>
            <li>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</li>

          </ul>
          <div class="tg-btns">
            <a class="tg-btn" href="#">buy now</a>
            <a class="tg-btn" href="#">screenshots</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 builder-column col-lg-6  pull-left">

      <figure class="frame-img"><img src="http://www.1stchoicefancydress.co.uk/image/cache/data/products/MK-9901-500x500.jpg" alt="Image Frame"></figure>
    </div>
  </div>
</section>
<section class="tg-main-section haslayout  stretch_section" data-speed="0.5" data-bleed="0" data-appear-top-offset="600" data-parallax="scroll" data-position="center 0" data-image-src="http://santemap.firstonenews.com/wp-content/uploads/2016/03/bgparallax-01.jpg"
  style="position: relative; left: -89.5px; box-sizing: border-box; width: 1349px; padding-left: 89.5px; padding-right: 89.5px;">
  <div class="builder-items">
    <div class="col-xs-12 col-md-12 builder-column ">
      <div class="sc-review">
        <div class="tg-patientfeedbacks tg-haslayout">
          <div class="col-sm-10 col-sm-offset-1 col-xs-12">
            <div class="tg-theme-heading">
              <h2>PATIENT FEEDBACK</h2>
              <span class="tg-roundbox"></span>

              <div class="tg-description">
                <p>We know how much it takes to become a qualified doctor so we have taken away all your hassle to look out for your patients once you have qualified. DocDirect will give you an easy reach to all the patients, all you need is to sign up!</p>
              </div>

            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 tg-feedbackwidht">
            <div class="tg-patientfeedback">
              <figure class="tg-patient-pic">
                <a href="http://santemap.firstonenews.com/user/steve/"><img src="http://santemap.firstonenews.com/wp-content/uploads/2016/04/img-01-1-150x150.jpg" alt="Reviewer"></a>
              </figure>
              <div class="tg-patient-message">
                <span class="tg-patient-name"><a href="http://santemap.firstonenews.com/user/steve/">Dr Steve</a></span>
                <span class="tg-doctor-name">For <a href="http://santemap.firstonenews.com/user/professional/">Demo Professional</a></span>
                <div class="tg-stars star-rating">
                  <span style="width:80%"></span>
                </div>
                <div class="tg-description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 tg-feedbackwidht">
            <div class="tg-patientfeedback">
              <figure class="tg-patient-pic">
                <a href="http://santemap.firstonenews.com/user/steve/"><img src="http://santemap.firstonenews.com/wp-content/uploads/2016/04/img-01-1-150x150.jpg" alt="Reviewer"></a>
              </figure>
              <div class="tg-patient-message">
                <span class="tg-patient-name"><a href="http://santemap.firstonenews.com/user/steve/">Dr Steve</a></span>
                <span class="tg-doctor-name">For <a href="http://santemap.firstonenews.com/user/carol/">Dr.Carol</a></span>
                <div class="tg-stars star-rating">
                  <span style="width:100%"></span>
                </div>
                <div class="tg-description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="tg-main-section haslayout  default">
  <div class="builder-items">
    <div class="col-xs-12 col-md-12 builder-column ">

      <div class="col-sm-10 col-sm-offset-1 col-xs-12">
        <div class="tg-theme-heading">
          <h2>find healthcare by</h2>
          <span class="tg-roundbox"></span>
          <div class="tg-description">
            <p>In just three simple steps, DocDirect will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find
              your nearest healthcare facility.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 builder-column ">
      <div class="sc-dir-search">
        <div class="tg-findbycategory">
          <div class="tg-box">
            <div class="tg-heading-border tg-small">
              <i class="icon-map"></i>
              <h3>Location</h3>
            </div>
            <ul>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=aberdeen">Aberdeen</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=aldershot">Aldershot</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=altrincham">Altrincham</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=aylesbury">Aylesbury</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=bamber">Bamber</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=bangor">Bangor</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=batley">Batley</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=bebingto">Bebingto</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=bedford">Bedford</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=birmingham">Birmingham</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=blackpool">Blackpool</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=brentwood">Brentwood</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=bristol">Bristol</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=cardiff">Cardiff</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=carlisle">Carlisle</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=crawley">Crawley</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=darlington">Darlington</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=eastleigh">Eastleigh</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=edinburg">Edinburg</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=esher">Esher</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=glasgow-sco">Glasgow SCO</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=guildford">Guildford</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=halesowen">Halesowen</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=halifax">Halifax</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=hamilton">Hamilton</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?location=inezgane">Inezgane</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 builder-column ">
      <div class="sc-dir-search sc-specialities">
        <div class="tg-findbycategory">
          <div class="tg-box">
            <div class="tg-heading-border tg-small">
              <i class="fa fa-medkit"></i>
              <h3>Speciality</h3>
            </div>
            <ul>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=aerobic-centers">Aerobic Centers</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=associazione-volontari-italiani-sangue">Associazione Volontari</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=athletic-clubs">Athletic Clubs</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=blood-services">Blood Services</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=blood-services-center-for-biologics-evaluation-and-research">Blood Services Center</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=cancer-hospital">Cancer Hospital</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=cardiologist">Cardiologist</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=cardiology-clinic">Cardiology clinic</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=children-clinic">Children clinic</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=children-hospital">Children Hospital</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=clinical-pharmacy">Clinical pharmacy</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=colorectal-surgeon">Colorectal surgeon</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=community-blood-services">Community Blood Services</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=community-pharmacy">Community pharmacy</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=compliance-medicine">Compliance (medicine)</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=cord-blood-registry">Cord Blood Registry</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=country-clubs">Country Clubs</a></li>
              <li><a href="http://santemap.firstonenews.com/dir-search/?speciality=dance-centers">Dance Centers</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
<section class="tg-main-section haslayout  stretch_section" style="background-image: url(&quot;http://santemap.firstonenews.com/wp-content/uploads/2016/08/bgparallax-03.jpg&quot;); padding: 50px 89.5px; background-repeat: no-repeat; background-position: 0% 100%; background-size: cover; position: relative; left: -105px; box-sizing: border-box; width: 1349px;">

<div class="builder-items">
  <div class="col-xs-12 col-md-12 builder-column ">
    <div class="tg-buynowbox">
	<h3 style="color:#fff">ONE OF THE VERY FEW USER BASE DIRECTORY THEMES AVAILABLE.</h3>
	<a class="tg-btn" style="color:#fff" href="#">Read more</a>
</div>
</div>
  </div>

</section>
  </div>
  <section class="tg-main-section haslayout  default" style="padding-bottom:0px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;">
    <div class="builder-items">
      <div class="col-xs-12 col-md-12 builder-column ">
        <div class="sc-teams-grid">
          <div class="tg-team-members">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
              <div class="tg-section-head">
                <div class="tg-theme-heading">
                  <h2>TEAM BEHIND DOCDIRECT</h2>
                  <span class="tg-roundbox"></span>
                </div>
                <div class="tg-description">
                  <p>In just three simple steps, DocDirect will help you find your nearest healthcare setting without having to signup. We aim to facilitate you in finding your right doctor with just three clicks without having to ask around or wander to find
                    your nearest healthcare facility.</p>
                </div>
              </div>
            </div>
            <div class="tg-teams-member">
              <div class="col-sm-4">
                <div class="tg-member">
                  <figure>
                    <img src="//santemap.firstonenews.com/wp-content/uploads/2016/08/img-01.jpg" alt="team">
                    <figcaption class="tg-share-icons">
                      <ul class="tg-socialicon">
                        <li class="tg-facebook"><a style="background:#3b5998" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="tg-facebook"><a style="background:#55acee" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="tg-facebook"><a style="background:#007bb5" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="tg-facebook"><a style="background:#cb2027" href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </figcaption>
                  </figure>
                  <div class="tg-contentbox">
                    <h2>DAWSON DAWYNE<span>CEO &amp; FOUNDER</span></h2>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="tg-member">
                  <figure>
                    <img src="//santemap.firstonenews.com/wp-content/uploads/2016/08/img-02.jpg" alt="team">
                    <figcaption class="tg-share-icons">
                      <ul class="tg-socialicon">
                        <li class="tg-facebook"><a style="background:#3b5998" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="tg-facebook"><a style="background:#55acee" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="tg-facebook"><a style="background:#007bb5" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="tg-facebook"><a style="background:#cb2027" href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </figcaption>
                  </figure>
                  <div class="tg-contentbox">
                    <h2>TIFANY RENY<span>FOUNDER</span></h2>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="tg-member">
                  <figure>
                    <img src="//santemap.firstonenews.com/wp-content/uploads/2016/08/img-03-1.jpg" alt="team">
                    <figcaption class="tg-share-icons">
                      <ul class="tg-socialicon">
                        <li class="tg-facebook"><a style="background:#3b5998" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="tg-facebook"><a style="background:#55acee" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="tg-facebook"><a style="background:#007bb5" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="tg-facebook"><a style="background:#cb2027" href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </figcaption>
                  </figure>
                  <div class="tg-contentbox">
                    <h2>HECTOR ALLIE<span>CFO</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </section>
@endsection
