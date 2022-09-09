@extends('backend.mastering.master')
@section('imran')
<div class="col-md-4">
    <div class="msg">
        <p class="alert alert-success" style="display:none;"></p>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Student Name" class="form-control name" required>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Roll" class="form-control roll" required>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Registration Number" class="form-control registration_no">
    </div>
    <div class="form-group">
        <select class="form-control department" required>
            <option value="">-- Select Department --</option>
            <option value="cse">CSE</option>
            <option value="eee">EEE</option>
            <option value="ete">ETE</option>
            <option value="arch">ARCHITECTURE</option>
            <option value="cis">CIS</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control semester" required>
            <option value="">-- Select Semester --</option>
            <option value="fall">Fall</option>
            <option value="spring">Spring</option>
            <option value="summer">Summer</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Fathers Name" class="form-control father_name" required>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Mothers Name" class="form-control mother_name" required>
    </div>
    <div class="form-group">
        <select class="form-control gender" required>
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control status" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <button class="form-control btn btn-success btnAddStudent">Add Student</button>
</div>
<div class="col-md-8">
    <table class="table">
      <h4 class="text-center">Student Information</h4>
        <thead>
            <tr>
                <th>S/L</th>
                <th>Student Name</th>
                <th>Roll</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="tbody">
        </tbody>
    </table>
</div>




<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <input type="text" placeholder="Student Name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <input type="number" placeholder="Roll" class="form-control" id="roll">
    </div>
    <div class="form-group">
        <input type="number" placeholder="Registration Number" class="form-control" id="registration_no">
    </div>
    <div class="form-group">
        <select class="form-control" id="department">
            <option value="">-- Select Department --</option>
            <option value="cse">CSE</option>
            <option value="eee">EEE</option>
            <option value="civil">Civil</option>
            <option value="arch">Architechture</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" id="semester">
            <option value="">-- Select Semester --</option>
            <option value="fall">Fall</option>
            <option value="spring">Spring</option>
            <option value="summer">Summer</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Fathers Name" class="form-control" id="father_name">
    </div>
    <div class="form-group">
        <input type="text" placeholder="Mothers Name" class="form-control" id="mother_name">
    </div>
    <div class="form-group">
        <select class="form-control" id="gender">
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" id="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning editnow">Update</button>
      </div>
    </div>
  </div>
</div>



<!-- Status Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Status Change Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to change status?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-watning statusnow">Change</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger deletenow">Delete</button>
      </div>
    </div>
  </div>
</div>


@endsection