<!-- Modals -->
<!-- Add Job -->
<div class="modal fade" id="addJob" tabindex="-1" role="dialog" aria-labelledby="addJob">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <form method="post" action="/Job/create">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="addJob">Add Job</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Job Title</label>
            <input type="text" name="JobTitle" class="form-control" placeholder="Job Title">
          </div>
          <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="CompanyName" class="form-control" placeholder="Company Name">
          </div>
          <div class="form-group">
            <label>Note for Candidate</label>
            <textarea name="NoteForCandidate" class="form-control" placeholder="Note"></textarea>
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" name="Address" class="form-control" placeholder="Address">
          </div>
          <div class="form-group">
            <label>City</label>
            <input type="text" name="City" class="form-control" placeholder="City">
          </div>
          <div class="form-group">
            <label>Locality</label>
            <input type="text" name="Locality" class="form-control" placeholder="Locality">
          </div>
          <div class="form-group">
            <label>Job Description</label>
            <textarea name="JobDescription" class="form-control" placeholder="Job Description"></textarea>
          </div>
          <div class="form-group">
            <label>Minimal experience</label>
            <input type="text" name="MinimalExp" class="form-control" placeholder="0,1,2">
          </div>
          <div class="form-group">
            <label>Maximum experience</label>
            <input type="text" name="MaximumExp" class="form-control" placeholder="0,1,2,3,4">
          </div>
          <div class="form-group">
            <label>Minimal Salary</label>
            <input type="text" name="MinimalSalary" class="form-control" placeholder="$$$">
          </div>
          <div class="form-group">
            <label>Maximum Salary</label>
            <input type="text" name="MaximumSalary" class="form-control" placeholder="$$$">
          </div>
          <div class="form-group">
            <label>Openings</label>
            <input type="text" name="Openings" class="form-control" placeholder="1">
          </div>
          <div class="form-group">
            <label>Contact Name</label>
            <input type="text" name="ContactName" class="form-control" placeholder="Contact name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="Email" class="form-control" placeholder="something@something.com">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="Phone" class="form-control" placeholder="0123456789">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>