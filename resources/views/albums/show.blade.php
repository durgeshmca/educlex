
  <h1>{{$album->name}}</h1>
  <a class="button secondary" href="javascript:void(0);"  onclick="openAlbum(0);">Go Back</a>
  <hr>
  @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos">
      <div class="row text-center">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
            <div class='col-sm-4'>
             <a href="javascript:void(0);"  onclick="openPhoto({{$photo->id}});">
                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" height="200" width="200">
              </a>
             <br>
             <h4>{{$photo->title}}</h4>
          @else
            <div class='col-sm-4'>
              <a href="javascript:void(0);"  onclick="openPhoto({{$photo->id}});">
                 <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" height="200" width="200">
               </a>
              <br>
              <h4>{{$photo->title}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Photos To Display</p>
  @endif
