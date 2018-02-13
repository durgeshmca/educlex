@if(count($errors) > 0)
  @foreach($errors->all() as $error)

    <div class="callout alert alert-warning">
      {{$error}}
    </div>
  @endforeach

@endif

@if(session('success'))
  <div class="callout success">
    {{session('success')}}
  </div>
@endif

@if(session('error'))
  <div class="callout alert">
    {{session('error')}}
  </div>
@endif
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="modal-title">Modal title</h4>
      </div>
      <div class="modal-body" id="modal-body">
         Widget settings form goes here
      </div>
      <div class="modal-footer">
        <button type="button" class="btn blue" data-dismiss="modal">OK</button>
        <button type="button" class="btn default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
