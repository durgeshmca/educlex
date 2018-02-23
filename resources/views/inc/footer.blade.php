
<a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/plugins/jquery.easing.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.parallax.js" type="text/javascript"></script>
<script src="/assets/global/plugins/smooth-scroll/smooth-scroll.js" type="text/javascript"></script>
<script src="/assets/global/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- BEGIN Cubeportfolio -->
<script src="/assets/global/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="/assets/frontend/onepage2/scripts/portfolio.js" type="text/javascript"></script>
<!-- END Cubeportfolio -->
<!-- BEGIN RevolutionSlider -->
<script src="/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="/assets/frontend/onepage2/scripts/revo-ini.js" type="text/javascript"></script>
<!-- END RevolutionSlider -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/frontend/onepage2/scripts/layout.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
Layout.init();
RevosliderInit.initRevoSlider();
@if ($errors->any())
$('#myModal').modal('show');
@endif
@if(session('status'))
$('#myModal').modal('show');
@endif
@if($formList[0]->status)
$('#myModal').modal('show');
@endif

});
function openForm(formid){
var srcurl="/form/workshop";
if(typeof formid =='string'){
  srcurl = formid;
  $('#myModal').modal('show');
}else{
    switch (formid) {
      case 0:
        srcurl="/form/popup";
        $('#myModal').modal('show');
        break;
      case 1:
        srcurl="/form/workshop";
        break;
      case 2:
          srcurl="/form/college_workshop";
          break;
      case 3:
              srcurl="/form/corporate";
              break;
      case 4:
              srcurl="/form/industrial";
              break;
      case 5:
              srcurl="/form/classroom";
              break;
      default:
        var x="<div class='alert alert-danger'>Form Not Found</div>"
          $("#mbody").html(data);
    }
  }
    var wait='<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Please Wait....</div></div>';
    $("#mbody").html(wait);
    $.ajax({
      url : srcurl,
      success : function(data,result){
        $("#mbody").html(data);
        if(formid==1){
          ShowMe(1);
        }
      },
      error : function(xhr,status,error){
        var err ='<div class="alert alert-danger">Request has been '+error+'</div>';
        $("#mbody").html(err);
      }

    });


}
function ShowMe(value)
{
  if( value==1)
  {
    $('.student').show();
    $('.emp').hide();
  }else {
    $('.student').hide();
    $('.emp').show();
  }
}

function openCourse(cid){
var srcurl="/course/get/"+cid;
    var wait='<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Please Wait....</div></div>';
    $("#mbody").html(wait);
    $('#myModal').modal('show');
    $.ajax({
      url : srcurl,
      success : function(data,result){
            $("#mbody").html(data);
        },
      error : function(xhr,status,error){
        var err ='<div class="alert alert-danger">Request has been '+error+'</div>';
        $("#mbody").html(err);
      }

    });
}
    function openAlbum(cid){
    var srcurl="/albums";
    if(cid!=0){
      srcurl+="/"+cid;
    }
        var wait='<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Please Wait....</div></div>';
        $("#mbody").html(wait);
        $('#myModal').modal('show');
        $.ajax({
          url : srcurl,
          success : function(data,result){
                $("#mbody").html(data);
            },
          error : function(xhr,status,error){
            var err ='<div class="alert alert-danger">Request has been '+error+'</div>';
            $("#mbody").html(err);
          }

        });
}

function openPhoto(cid){
var srcurl="/photos/"+cid;

    var wait='<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Please Wait....</div></div>';
    $("#mbody").html(wait);
    $('#myModal').modal('show');
    $.ajax({
      url : srcurl,
      success : function(data,result){
            $("#mbody").html(data);
        },
      error : function(xhr,status,error){
        var err ='<div class="alert alert-danger">Request has been '+error+'</div>';
        $("#mbody").html(err);
      }

    });
}
</script>
<script>
$(function(){

})
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
