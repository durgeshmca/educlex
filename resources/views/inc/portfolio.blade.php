<!-- BEGIN PORTFOLIO SECTION -->
@if(isset($allProjects) && count($allProjects)>0)
<section id="portfolio">
    <div class="portfolio">
        <div class="container">
            <div class="heading">
                <h2>Demo and <strong>Live Projects</strong></h2>
            </div>

            <div class="cube-portfolio">
                <div id="filters-container" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All Stuff </div>
                    @foreach($allProjects as $project)
                    <?php $dataFilter=str_replace(" ","",$project->project);
                          $dataFilter=str_replace("/","",$dataFilter);
                          $projectArray[$dataFilter]=$project->content;
                     ?>
                    <div data-filter=".{{$dataFilter}}" class="cbp-filter-item"> {{$project->project}} </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Cube Portfolio -->
                        <div id="grid-container" class="cbp-l-grid-agency">
                          @foreach($projectArray as $name=>$content)
                            <div class="cbp-item {{$name}}">
                                <div class="cbp-caption">
                                  <a href="javascript:void(0);" onclick="openForm(0);">
                                    <?php echo $content; ?>
                                  </a>
                                        <button class="btn btn-alert-success">More..</button>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- End Cube Portfolio -->
                </div>
            </div><!-- //end row -->
        </div>
    </div>
</section>
@endif
<!-- END PORTFOLIO SECTION -->
