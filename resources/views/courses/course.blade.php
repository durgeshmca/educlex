<div class="container">
    <div class="row">
        <div class="col-sm-6">
          @foreach($courses as $course)
            <?php echo  $course->content;?> 
          @endforeach
        </div>
    </div>
</div>
