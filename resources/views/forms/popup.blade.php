<h2 align="center">Get Course Details</h2>
<form action="contact/submit"  method="post" name="course_form" >
  {{csrf_field()}}

  <div class="form-group">

     <input type="text" placeholder="Name *" class="form-control" name="name">
  </div>
  <div class="form-group">

  <input type="email" placeholder="Your Email *" class="form-control" name="email">
  </div>
  <div class="form-group">

    <input type="number" placeholder="Contact Phone *" class="form-control" name="phone">
  </div>

  <div class="form-group">

    <input type="text" placeholder="Courses *" class="form-control" name="subject">
  </div>
<textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control"></textarea><br>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
