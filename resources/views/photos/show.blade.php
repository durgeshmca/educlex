
  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a href="javascript:void(0);"  onclick="openAlbum({{$photo->album_id}});">Back To Gallery</a>
  <hr>
  <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <br><br>

  <hr>
  <small>Size: {{$photo->size}}</small>
