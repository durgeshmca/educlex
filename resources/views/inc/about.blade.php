<section id="about">
    <!-- Services BEGIN -->
    <div class="container service-bg">
        <div class="row">
            <div class="col-sm-3">
                <div class="services sm-margin-bottom-100">
                    <div class="services-wrap">
                        <div class="service-body">
                            <img src="/assets/frontend/onepage2/img/workshop.jpg" alt="">
                        </div>
                    </div>
                    <h2>College Workshop</h2>
                    <p>Educlex provides workshops  for Colleges, Schools and Corporates.To organize workshop in your College/School/Organization,  </p><p>fill up the Request form for Organizing Workshop.</p><p><br></p>
                    @if($formList[3]->status)
                    <button type="button" id ="collegew" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"  data-backdrop="static" onclick="openForm(2);">Submit Workshop Form</button>
                    @endif
                </div>
            </div>
            <div class="col-sm-3">
                <div class="services sm-margin-bottom-100">
                    <div class="services-wrap">
                        <div class="service-body">
                            <img src="/assets/frontend/onepage2/img/network.jpg" alt="">
                        </div>
                    </div>
                    <h2>Corporate Training</h2>
                    <p>Staying updated is the key to thrive in this competitive age. Our training solutions are tangible and make your teams proactive in the work plan and its execution.  We seamlessly determine your training requirements, mode of delivery and infrastructure required.</p>
@if($formList[4]->status)
<button type="button" id ="corporate" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"  data-backdrop="static" onclick="openForm(3);">Corporate Training Form</button>
  @endif
              </div>
            </div>
            <div class="col-sm-3">
                <div class="services">
                    <div class="services-wrap">
                        <div class="service-body">
                            <img src="/assets/frontend/onepage2/img/widgets/icon3.png" alt="">
                        </div>
                    </div>
                    <h2>Industrial Training</h2>
                    <p>A wide range of courses are available for the 4/6 weeks industrial training and 6 months industrial training programs. You can also opt for a certification courses.<br>Live projects and report preparation<br>Interview preparation and Placement assistance</p>
                    @if($formList[5]->status)
                    <button type="button" id ="collegew" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"  data-backdrop="static" onclick="openForm(4);">Industrial Training Form</button>
                    @endif
                </div>
            </div>
            <div class="col-sm-3">
                <div class="services">
                    <div class="services-wrap">
                        <div class="service-body">
                            <img src="/assets/frontend/onepage2/img/training.png" alt="">
                        </div>
                    </div>
                    <h2>Class Room Training</h2>
                    <p>Classroom Training is a live training by the domain expert Instructor.</p><p> Students and working professionals can enroll themselves for classroom training, depending on each course’s eligibility criteria.</p><p><br/></p>
@if($formList[6]->status)
<button type="button" id ="collegew" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"  data-backdrop="static" onclick="openForm(5);">Class room Training Form</button>
  @endif
              </div>
            </div>
        </div>
    </div>
    <!-- Services END -->
</section>
