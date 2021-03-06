<h2>Corporate Traning Form</h2>
<form action="/corporate/workshop/submit"  method="post" name="workshop_form" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="fname">First Name:</label>
     <input type="text" placeholder="First Name" class="form-control" name="fname">
  </div>
  <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="text" class="form-control"  placeholder="Last Name" name="lname">
  </div>
  <div class="form-group">
    <label for="lname">Email:</label>
  <input type="email" placeholder="Your Email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="contact">Contact No:</label>
    <input type="number" placeholder="Contact Phone" class="form-control" name="contact">
  </div>
  <div class="form-group">
    <label for="cmp">Company Name:</label>
    <input type="text" class="form-control"  placeholder="Company Name" name="company">
  </div>
  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="text" class="form-control"  placeholder="Designation" name="designation">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" placeholder="Address" class="form-control" name="address">
  </div>
  <div class="form-group">
    <label for="cmp">Land Mark:</label>
    <input type="text" class="form-control"  placeholder="Nearest Land Mark" name="landmark">
  </div>
  <div class="form-group">
    <label for="state">State:</label>
    <select class="form-control" name="state">
      <option value="-1">Select State</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Orissa">Orissa</option>
      <option value="Pondicherry">Pondicherry</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttaranchal">Uttaranchal</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="West Bengal">West Bengal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="lname">City:</label>
    <input type="text" placeholder="City" class="form-control" name="city">
  </div>
  <div class="form-group">
    <label for="nofcan">No Of Candidates:</label>
    <input type="number" class="form-control" name="total_students" value="" >
  </div>

    <div class="form-group">
    <label for="lname">Interested Technologies:</label>
    <div class="checkbox">
      <label><input type="checkbox" name="interest[]" value="hadoop">Big Data</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"  name="interest[]" value="php">PHP</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="interest[]" value="java">Java</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="interest[]" value="python">Python</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"  name="interest[]" value="ds">Data Scientist</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"  name="interest[]" value="network">Networking</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox"  name="interest[]" value="database">Database Technologies</label>
    </div>
  </div>
  <div class="form-group">
    <label for="cmp">Payment Mode:</label>
    <select class="form-control" name="payment_mode">
      <option value="">Select Paymet Mode</option>
      <option value="online">Online</option>
      <option value="neft">Bank NEFT</option>
      <option value="cash">Cash</option>
    </select>
  </div>

</div>
<div class="form-group">
    <label for="images">Please Upload Company Image</label>
    <input type="file" class="form-control-file" id="collegeimg" name="collegeimg[]" accept="image/jpeg,image/gif,image/x-png">
    <input type="file" class="form-control-file" id="collegeimg" name="collegeimg[]" accept="image/jpeg,image/gif,image/x-png">
    <input type="file" class="form-control-file" id="collegeimg" name="collegeimg[]" accept="image/jpeg,image/gif,image/x-png">
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
</div>
</div>
