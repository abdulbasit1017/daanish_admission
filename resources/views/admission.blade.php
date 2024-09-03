{{-- @extends('layout')

@section('title', 'Admission Form')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Admission Form</title>
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
    @endif
      <!-- Form content goes here -->
      <form action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="container">
              <!-- Header Section -->
              <div class="row">
                  <div class="col-sm-12">
                      <div class="header d-flex justify-content-between align-items-center mb-4">
                          <img src="./Images/left logo.jfif" style="width: 100px;">
                          <div class=" box p-3 bg-dark">
                              <h1 class="school-name text-white">Daanish School (Boys / Girls)</h1>
                          </div>
                          <img src="./Images/right logo.jfif" style="width: 100px;">
                      </div>
                  </div>
              </div>


              <h2 class="text-center">Name of school where admission sought: ____________________</h2>
              <h3 class="text-center">Application Form for Admission Class 6th ____ Entry 20__</h3>


              <form id="admission-form">
                  <!-- Category Selection -->
                  <div class="form-group">
                      <label>Please select one category to which the applicant belongs:</label>
                      <div class="category-group">
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="category-deserving" name="category" value="Deserving" required>
                              <label class="form-check-label" for="category-deserving">Deserving</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="category-provincial" name="category" value="Provincial" required>
                              <label class="form-check-label" for="category-provincial">Provincial</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="category-cholistan" name="category" value="Cholistan" required>
                              <label class="form-check-label" for="category-cholistan">Cholistan</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="category-pata" name="category" value="PATA" required>
                              <label class="form-check-label" for="category-pata">PATA</label>
                          </div>
                      </div>
                  </div>

                  <!-- Information about Student -->
                  <div class="form-group text-center">
                      <h4>Information about Student</h4>
                      <div class="photo-box">
                          <label>Passport Size Picture : </label>
                          <input type="file" id="photo-upload" name="photo" accept="image/*" required>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="student-name">Student’s Name</label>
                          <input type="text" class="form-control" id="student-name" name="student_name" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="father-name">Father’s Name</label>
                          <input type="text" class="form-control" id="father-name" name="father_name" required>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-4">
                          <label for="dob">Date of Birth</label>
                          <input type="date" class="form-control" id="dob" name="dob" required>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="age">Age</label>
                          <input type="number" class="form-control" id="age" name="age" required>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="year">Year</label>
                          <input type="number" class="form-control" id="year" name="year" required>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="tehsil">Tehsil</label>
                          <input type="text" class="form-control" id="tehsil" name="tehsil" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="district">District</label>
                          <input type="text" class="form-control" id="district" name="district" required>
                      </div>
                  </div>

                  <div class="form-row">

                      <div class="form-group col-md-6">
                          <label for="address">Complete Address</label>
                          <textarea class="form-control" id="address" name="address" rows="1" required></textarea>
                      </div>
                  </div>

                  <!-- Parent/Guardian Information -->
                  <div class="form-group">
                      <h4>Information about Parents/Guardian</h4>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="father-name">Father’s Name</label>
                              <input type="text" class="form-control" id="father-name" name="father_name" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="mother-name">Mother’s Name</label>
                              <input type="text" class="form-control" id="mother-name" name="mother_name" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="guardian-name">Guardian’s Name</label>
                              <input type="text" class="form-control" id="guardian-name" name="guardian_name" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="father-id">Father’s ID Card No</label>
                              <input type="text" class="form-control" id="father-id" name="father_id" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="mother-id">Mother’s ID Card No</label>
                              <input type="text" class="form-control" id="mother-id" name="mother_id" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="guardian-id">Guardian’s ID Card No</label>
                              <input type="text" class="form-control" id="guardian-id" name="guardian_id" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="father-profession">Father’s Profession</label>
                              <input type="text" class="form-control" id="father-profession" name="father_profession" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="mother-profession">Mother’s Profession</label>
                              <input type="text" class="form-control" id="mother-profession" name="mother_profession" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="guardian-profession">Guardian’s Profession</label>
                              <input type="text" class="form-control" id="guardian-profession" name="guardian_profession" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="father-contact">Father’s Contact No</label>
                              <input type="text" class="form-control" id="father-contact" name="father_contact" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="mother-contact">Mother’s Contact No</label>
                              <input type="text" class="form-control" id="mother-contact" name="mother_contact" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="guardian-contact">Guardian’s Contact No</label>
                              <input type="text" class="form-control" id="guardian-contact" name="guardian_contact" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="father-income">Father’s Monthly Income</label>
                              <input type="number" class="form-control" id="father-income" name="father_income" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="mother-income">Mother’s Monthly Income</label>
                              <input type="number" class="form-control" id="mother-income" name="mother_income" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="guardian-income">Guardian’s Monthly Income</label>
                              <input type="number" class="form-control" id="guardian-income" name="guardian_income" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="father-qualification">Father’s Qualification</label>
                              <input type="text" class="form-control" id="father-qualification" name="father_qualification" required>
                          </div>
                      </div>

                      <div class="form-row">

                          <div class="form-group col-md-6">
                              <label for="mother-qualification">Mother’s Qualification</label>
                              <input type="text" class="form-control" id="mother-qualification" name="mother_qualification" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="guardian-qualification">Guardian’s Qualification</label>
                              <input type="text" class="form-control" id="guardian-qualification" name="guardian_qualification" required>
                          </div>
                      </div>
                  </div>

                  <!-- Information about Previous School -->
                  <div class="form-group">
                      <h4>Information about Previous School</h4>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="present-class">Student’s Present Class</label>
                              <input type="text" class="form-control" id="present-class" name="present_class" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="previous-school">Name of Previous School</label>
                              <input type="text" class="form-control" id="previous-school" name="previous_school" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="dob-school">Date of Birth (According to School Record)</label>
                              <input type="date" class="form-control" id="dob-school" name="dob_school" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="principal-name">Principal’s Name</label>
                              <input type="text" class="form-control" id="principal-name" name="principal_name" required>
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="school-contact">Contact No</label>
                              <input type="text" class="form-control" id="school-contact" name="school_contact" required>
                          </div>
                      </div>
                  </div>

                  <!-- Emergency Contact Information -->
                  <div class="form-group">
                      <h4>The Applicant must nominate the names and details of two relatives in the space provided below who can be called in case of emergency.</h4>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Sr. No.</th>
                                  <th>Name of Relative</th>
                                  <th>Relation with Student</th>
                                  <th>Phone No.</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td><input type="text" class="form-control" name="relative1_name" required></td>
                                  <td><input type="text" class="form-control" name="relative1_relation" required></td>
                                  <td><input type="text" class="form-control" name="relative1_phone" required></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td><input type="text" class="form-control" name="relative2_name" required></td>
                                  <td><input type="text" class="form-control" name="relative2_relation" required></td>
                                  <td><input type="text" class="form-control" name="relative2_phone" required></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>

                  <!-- Important Notes -->
                  <div class="important-notes">
                      <h4>Important Notes:</h4>
                      <ol>
                          <li>The applicant is entitled to the Priority No. _________ given at the back of the form.</li>
                          <li>The complete admission form must be submitted in the Admission Office of the relevant Daanish School.</li>
                          <li>The following a, b, c must be attached at the time of submission of the application form; d & e must be submitted to the school before admission is confirmed.
                              <ul>
                                  <label for="document">a. One copy of attested ID card of the parent/guardian : </label>
                                  <input type="file" id="document" name="document" required><br>
                                  <label for="document">b. Attested copy of birth certificate : </label>
                                  <input type="file" id="document" name="document" required><br>
                                  <label for="document">c. 03 photographs of the applicant : </label>
                                  <input type="file" id="document" name="document" required><br>
                                  <label for="document">d. Attested Copy of B – Form :</label>
                                  <input type="file" id="document" name="document" required><br>
                                  <label for="document">e. Copy of School Leaving Certificate : </label>
                                  <input type="file" id="document" name="document" required><br>
                              </ul>
                          </li>
                      </ol>
                  </div>

                  <label for="payment">Admission Fee:</label>
                  <input type="number" id="payment" name="payment" required><br><br>


                  <!-- Submit Button -->
                  <div class="form-group text-center mt-4">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
          </div>

      </form>
  {{-- @endsection --}}

</body>
</html>
