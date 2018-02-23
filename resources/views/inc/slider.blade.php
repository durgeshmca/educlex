<!-- Slider BEGIN -->
@if(isset($sliders))
<div class="page-slider">
    <div class="fullwidthbanner-container revolution-slider">
        <div class="banner">
            <ul id="revolutionul">
              @foreach($sliders as $slider)
                <!-- THE NEW SLIDE -->
                <?php  if($slider->type==1) { ?>

                <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="/assets/frontend/onepage2/img/bg/bg_slider1.jpg" alt="">

                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-hoffset="-340"
                        data-voffset="-70"
                        data-speed="900"
                        data-start="1000"
                        data-easing="easeOutExpo">
                        <h3><?php echo $slider->slider_heading; ?></h3>
                    </div>
                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-hoffset="-385"
                        data-voffset="45"
                        data-speed="900"
                        data-start="1500"
                        data-easing="easeOutExpo">
                        <p class="subtitle-v1"><?php echo $slider->slider_sub_heading ?> </p>
                    </div>
                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-hoffset="-500"
                        data-voffset="140"
                        data-speed="900"
                        data-start="2000"
                        data-easing="easeOutExpo">
                        @if($slider->slider_link_target == 'modal')
                        <a href="javascript:void(0);" class="btn-brd-white" data-toggle="modal" data-target='#myModal' onclick="openForm('{{ $slider->slider_link }}')">{{ $slider->slider_link_label }}</a>
                        @elseif($slider->slider_link_target == 'same')
                        <a href="{{ $slider->slider_link }}" class="btn-brd-white"  target="_self" >{{ $slider->slider_link_label }}</a>
                        @else
                        <a href="{{ $slider->slider_link }}" class="btn-brd-white" target="_blank"  >{{ $slider->slider_link_label }}</a>
                        @endif
                    </div>
                    <div class="caption lfb tp-resizeme"
                        data-x="right"
                        data-y="bottom"
                        data-hoffset="50"
                        data-speed="900"
                        data-start="2500"
                        data-easing="easeOutExpo">
                        <img src="/assets/frontend/onepage2/img/slider/{{ $slider->slider_image }}" alt="Image 3">
                    </div>
                </li>
              <?php } elseif($slider->type==2){

                 ?>
                <!-- THE NEW SLIDE -->
                <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="6000" data-thumb="">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="/assets/frontend/onepage2/img/bg/bg_slider2.jpg" alt="">

                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-hoffset="-322"
                        data-voffset="-30"
                        data-speed="900"
                        data-start="1000"
                        data-easing="easeOutExpo">
                        <h3 class="title-v2"><?php echo $slider->slider_heading;?> </h3>
                    </div>
                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-hoffset="-490"
                        data-voffset="110"
                        data-speed="900"
                        data-start="1500"
                        data-easing="easeOutExpo">
                        <p class="subtitle-v2"><?php echo $slider->slider_sub_heading;?> </p>
                    </div>
                    <a href="{{ $slider->slider_link }}" class="caption lft tp-resizeme slide_thumb_img slide_border"
                        data-x="center"
                        data-y="center"
                        data-hoffset="-370"
                        data-voffset="102"
                        data-speed="900"
                        data-start="1500"
                        data-easing="easeOutExpo">
                        @if($slider->slider_link_target == 'modal')
                        <a href="javascript:void(0);" class="btn-brd-white" data-toggle="modal" data-target='#myModal' onclick="openForm('{{ $slider->slider_link }}')">{{ $slider->slider_link_label }}</a>
                        @elseif($slider->slider_link_target == 'same')
                        <a href="{{ $slider->slider_link }}" class="btn-brd-white"  target="_self" >{{ $slider->slider_link_label }}</a>
                        @else
                        <a href="{{ $slider->slider_link }}" class="btn-brd-white" target="_blank"  >{{ $slider->slider_link_label }}</a>
                        @endif
                        |
                    </a>
                    <div class="caption lfb tp-resizeme"
                        data-x="right"
                        data-y="bottom"
                        data-hoffset="100"
                        data-speed="900"
                        data-start="2000"
                        data-easing="easeOutExpo">
                        <img src="/assets/frontend/onepage2/img/slider/{{ $slider->slider_image }}" alt="Image 3">
                    </div>
                </li>
              <?php }elseif($slider->type==3){

                 ?>
                <!-- THE NEW SLIDE -->
                <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="6000" data-thumb="">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="/assets/frontend/onepage2/img/bg/blank.png" alt="">

                    <div class="caption fulllscreenvideo tp-videolayer"
                            data-x="0"
                            data-y="0"
                            data-speed="600"
                            data-start="1000"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeOut"
                            data-autoplay="true"
                            data-autoplayonlyfirsttime="false"
                            data-nextslideatend="true"
                            data-videowidth="100%"
                            data-videoheight="100%"
                            data-videopreload="meta"
                            data-videomp4="#"
                            data-videowebm="#"
                            data-videocontrols="none"
                            data-forcecover="1"
                            data-forcerewind="on"
                            data-aspectratio="16:9"
                            data-volume="mute"
                            data-videoposter="/assets/frontend/onepage2/img/slider/{{$slider->slider_image}}">
                    </div>

                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-voffset="-100"
                        data-speed="900"
                        data-start="1000"
                        data-easing="easeOutExpo">
                        <h3>{{$slider->slider_heading}}</h3>
                    </div>
                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-voffset="10"
                        data-speed="900"
                        data-start="1500"
                        data-easing="easeOutExpo">
                        <h3 class="red-title">{{$slider->slider_sub_heading}}</h3>
                    </div>
                    <div class="caption lft tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-voffset="130"
                        data-speed="900"
                        data-start="2000"
                        data-easing="easeOutExpo">
                        @if($slider->slider_link_target == 'modal')
                        <a href="javascript:void(0);" class="btn-brd-white" data-toggle="modal" data-target='#myModal' onclick="openForm('{{ $slider->slider_link }}')">{{ $slider->slider_link_label }}</a>
                        @elseif($slider->slider_link_target == 'same')
                        <a href="{{ $slider->slider_link }}" class="btn-brd-white"  target="_self" >{{ $slider->slider_link_label }}</a>
                        @else
                        <a href="{{ $slider->slider_link }}" class="btn-brd-white" target="_blank"  >{{ $slider->slider_link_label }}</a>
                        @endif
                    </div>
                </li>
              <?php } ?>

              @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
<!-- Slider END -->
