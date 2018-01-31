<!-- BEGIN PRICING SECTION -->
<section id="pricing">
    <div class="pricing-bg">
        <div class="container">
            <div class="heading">
                <h2>Course <strong>Technical Courses Offered</strong></h2>
                <P>offers corporate training in both technical and Management Courses. <br> The list of courses given below </P>
            </div><!-- //end heading -->

            <!-- Pricing -->
            <div class="row no-space-row">
              @if(count($courses))
              <?php $totalData= count($courses);
                     $half=ceil($totalData/2);
                    for($i=0; $i < $half; $i++){
                      $firstHalf[]=$courses[$i];
                    }
                    for($i=$half; $i < $totalData; $i++){
                      $secondHalf[]=$courses[$i];
                    }
               ?>
                <div class="col-md-6">
                    <div class="">
                        <ul class="pricing-features listTick">
                            @foreach($firstHalf as $course)
                            <li><a href="javascript:void(0);" onclick="openCourse({{$course->id}});"> {{$course->course}}</a></li>
                            @endforeach
                          </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <ul class="pricing-features listTick">
                            @foreach($secondHalf as $course)
                            <li><a href="javascript:void(0);" onclick="openCourse({{$course->id}});">{{$course->course}}</a></li>
                            @endforeach
                          </ul>
                    </div>
                </div>
                @endif
            </div><!-- //end row -->
            <!-- End Pricing -->
        </div>
    </div>
</section>
<!-- END PRICING SECTION -->
