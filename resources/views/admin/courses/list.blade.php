@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">
    
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Courses  <small>Settings</small>
    </h3>
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="/dashboard">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Courses</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Setting</a>
        </li>
      </ul>

    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#tab_0" data-toggle="tab">
            Courses</a>
            </li>

          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_0">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-gift"></i>Settings
                  </div>
                  <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                  </div>
                </div>

                <div class="portlet-body form">
                    @include('admin.inc.messages')
                    @if(count($courses)==1)
                  <!-- BEGIN FORM-->
                  <form action="/courses/list/{{$courses->id}}/store" class="form-horizontal"  method="post" >
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Course Name</label>
                        <div class="col-md-4">
                        <input type="text" name="course" value="{{$courses->course}}" class="form-control input-circle">


                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Course Description</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="desc" rows="2" cols="80" class="form-control input-circle">{{$courses->desc}}</textarea>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Course Details</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <textarea name="content" rows="20" cols="80" class="form-control input-circle">{{$courses->content}}</textarea>

                          </div>
                        </div>
                      </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn btn-circle blue">Update</button>

                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- END FORM-->
                  @else
                  <table class="table table-bordered table-striped">
													<thead>
													<tr>
														<th>
															 Course Name
														</th>
														<th>
															 Course Descripton
														</th>
														<th>
															 Change
														</th>
														</tr>
													</thead>
													<tbody>
                            @foreach($courses as $course)
                          <tr>
														<td>
															<span class="font-blue">{{$course->course}}</span>
														</td>
														<td>
                              <span class="font-blue">{{$course->desc}}</span>
															<i class="fa fa-user font-blue">
															</i>
														</td>
														<td>

                              <a href="/courses/list/{{$course->id}}" ><button class="btn btn-sm yellow filter-submit margin-bottom"><i class="icon-pencil"></i> </button></a>
                              <form action="/courses/delete/{{$course->id}}" method="post" name="form{{$course->id}}">
                                  <button class="btn btn-sm red filter-cancel" type="submit" for="form{{$course->id}}"><i class="fa fa-times"></i> </button>
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="id" value="{{$course->id}}">
                                {!! csrf_field() !!}
                              </form>

														</td>

                          </tr>
                          @endforeach

													</tbody>
													</table>

                  @endif
                  <br>
                  <br>
                </div>
              </div>

                      <!-- END FORM-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
@endsection
