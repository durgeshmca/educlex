@extends('layouts.admin')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Sliders  <small>Settings</small>
    </h3>
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="/dashboard">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Sliders</a>
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
            Sliders</a>
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
                    @if(count($sliders)==1)
                  <!-- BEGIN FORM-->
                  <form action="/sliders/list/{{$sliders->id}}/store" class="form-horizontal"  method="post" >
                    {{csrf_field()}}
                    <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label">Slider Type</label>
                        <div class="col-md-4">
                          <select class="form-control input-circle" name="type">
                              <option value="">Select Type</option>
                              <option value="1">Type 1</option>
                              <option value="2">Type 2</option>
                              <option value="3">Type 3</option>
                              </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Slider Link Label</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="slider_link_label"  class="form-control input-circle" value="{{ $sliders->slider_link_label }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Slider Link</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="slider_link"  class="form-control input-circle" value="{{ $sliders->slider_link }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Slider Main Heading</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="slider_heading"  class="form-control input-circle" value="{{$sliders->slider_heading }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Slider Sub Heading</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" name="slider_sub_heading"  class="form-control input-circle" value="{{ $sliders->slider_sub_heading }}"/>

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Slider Image</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <img src="{{ $sliders->slider_image }}" />

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Upload Slider Image</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="file" class="form-control input-circle-left" name="slider_image" accept="image/jpeg,image/gif,image/x-png">
                            <span class="input-group-addon input-circle-right">
                            <i class="fa fa-user"></i>
                            </span>
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
															 Type
														</th>
														<th>
															 Heading
														</th>
														<th>
															 Sub Heading
														</th>
                            <th>
															 Link Label
														</th>
                            <th>
															 Link
														</th>
														</tr>
													</thead>
													<tbody>
                            @foreach($sliders as $slider)
                          <tr>
														<td>
															<span class="font-blue">{{$slider->type}}</span>
														</td>
														<td>
                              <span class="font-blue">{{$slider->desc}}</span>
															<i class="fa fa-user font-blue">
															</i>
														</td>
														<td>

                              <a href="/sliders/list/{{$slider->id}}" ><button class="btn btn-sm yellow filter-submit margin-bottom"><i class="icon-pencil"></i> </button></a>
                              <form action="/sliders/delete/{{$slider->id}}" method="post" name="form{{$slider->id}}">
                                  <button class="btn btn-sm red filter-cancel" type="submit" for="form{{$slider->id}}"><i class="fa fa-times"></i> </button>
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="id" value="{{$slider->id}}">
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
