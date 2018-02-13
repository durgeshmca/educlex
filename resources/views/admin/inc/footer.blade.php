</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2018 &copy; Educlex By Verclex Network Pvt Ltd.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   FormSamples.init();

	 @if(count($errors) > 0)
	 <?php $err='';?>
	   @foreach($errors->all() as $error)
	   <?php $err.=$error.'\n';?>
	   @endforeach
	   $('#modal-title').html('Error');
		 var error = "<div class= 'alert alert-danger'> {{$err}}</div>";
	   $('#modal-body').html(error);
	   $("#portlet-config").modal('show');
	 @endif

	 @if(session('success'))
	   $('#modal-title').html('Success');
		 var succ = "<div class= 'alert alert-success'> {{session('success')}}</div>";
	    $('#modal-body').html(succ);
			$("#portlet-config").modal('show');
	 @endif

	 @if(session('error'))
	 $('#modal-title').html('Error');
	 var error = "<div class= 'alert alert-danger'>{{session('error')}}</div>";
		$('#modal-body').html(error);
		$("#portlet-config").modal('show');
	 @endif
});
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
						$("#content").html(data);
				},
			error : function(xhr,status,error){
				var err ='<div class="alert alert-danger">Request has been '+error+'</div>';
				$("#content").html(err);
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
				$("#content").html(data);
		},
	error : function(xhr,status,error){
		var err ='<div class="alert alert-danger">Request has been '+error+'</div>';
		$("#content").html(err);
	}

});
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
