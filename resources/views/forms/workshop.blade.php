  <h2>Workshop form</h2>
  <form action="/workshop/submit"  method="post" name="workshop_form" enctype="multipart/form-data">
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
      <label for="cat">Category:</label>
      <input type="radio" class="" name="cat" value="student"  checked="checked" onclick="ShowMe(1);">Student
      <input type="radio" class="" name="cat" value="professional" onclick="ShowMe(2);">Professonal
    </div>
    <div class="form-group">
      <label for="Qualification">Qualification:</label>
      <select  class="form-control" name="qualification">
        <option value="-1">Select Qualification</option>
        <option value="BA">B.A</option>
        <option value="BARCH">B.Arch</option>
        <option value="BDES">B.Des.</option>
        <option value="BELED">B.El.Ed</option>
        <option value="BPED">B.P.Ed</option>
        <option value="BUMS">B.U.M.S</option>
        <option value="BAMS">BAMS</option>
        <option value="BCA">BCA</option>
        <option value="B.B.A/ B.M.S">B.B.A/ B.M.S</option>
        <option value="BCOM">B.Com</option>
        <option value="BED">B.Ed</option>
        <option value="BDS">BDS</option>
        <option value="BFA">BFA</option>
        <option value="BHM">BHM</option>
        <option value="BPHARMA">B.Pharma</option>
        <option value="BSC" >B.Sc</option>
        <option value="B.Tech/B.E." selected="">B.Tech/B.E.</option>
        <option value="BHMS">BHMS</option>
        <option value="LLB">LLB</option>
        <option value="MBBS">MBBS</option>
        <option value="Diploma">Diploma</option>
        <option value="BVSC">BVSC</option>
        <option value="CA">CA</option>
        <option value="CS">CS</option>
        <option value="DM">DM</option>
        <option value="ICWA (CMA)">ICWA (CMA)</option>
        <option value="Integrated PG">Integrated PG</option>
        <option value="LLM">LLM</option>
        <option value="MA">M.A</option>
        <option value="MARCH">M.Arch</option>
        <option value="M.Ch">M.Ch</option>
        <option value="MCOM">M.Com</option>
        <option value="M.Des.">M.Des.</option>
        <option value="MED">M.Ed</option>
        <option value="M.Pharma">M.Pharma</option>
        <option value="MDS">MDS</option>
        <option value="MFA">MFA</option>
        <option value="MS/M.Sc(Science)">MS/M.Sc(Science)</option>
        <option value="MTECH">M.Tech</option>
        <option value="MBA/PGDM">MBA/PGDM</option>
        <option value="MCA">MCA</option>
        <option value="Medical-MS/MD">Medical-MS/MD</option>
        <option value="PG Diploma">PG Diploma</option>
        <option value="MVSC">MVSC</option>
        <option value="MCM">MCM</option>
        <option value="Other">Other</option>   </select>
      </select>
    </div>
    <div class="form-group emp">
      <label for="designation">Designation:</label>
      <input type="text" class="form-control"  placeholder="Designation" name="designation">
    </div>
    <div class="form-group emp">
      <label for="cmp">Company Name:</label>
      <input type="text" class="form-control"  placeholder="Company Name" name="company">
    </div>
    <div class="form-group student">
      <label for="lname">Sem/Year:</label>
      <select class="form-control student" name="sem_year">
        <option value="-1">Select</option>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>
      </select>
    </div>
    <div class="form-group student">
      <label for="cmp">College Name:</label>
      <input type="text" class="form-control"  placeholder="College Name" name="college">
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
        <label for="images">Please Upload Your Photo</label>
        <input type="file" class="form-control-file" id="img" name="photo" accept="image/jpeg,image/gif,image/x-png">

      </div>
    <button type="submit" class="btn btn-danger">Submit</button>
  </form>
</div>
</div>
