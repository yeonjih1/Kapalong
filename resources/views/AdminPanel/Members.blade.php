@include('Layouts.main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="ml-3 mb-1">


    </div>
<section class="content">
    
    <div class="container-fluid card" style="width: 100%">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Entry</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body card">
                <div class="row">
                <div class="col">
                  <span class="right badge badge-success">Account No</span>
                  <input type="textarea" class="form-control" id="Member_ID" placeholder="Member ID" required />
                </div>
                <div class="col">
                  <span class="right badge badge-success">CID No</span>
                  <input type="textarea" class="form-control" id="Member_ID" placeholder="CID No." required />
                </div>
                </div>
                <span class="right badge badge-success">Full Name</span>
                <div class="input-group">
                
                  {{-- <label for="First_Name">Full Name</label> --}}
                  <input type="text" class="form-control" id="fname" placeholder="First Name" required />
                    {{-- <label for="Middle">Middle Name</label> --}}
                    <input type="text" class="form-control" id="mname" placeholder="Middle Name" required />
                    <input type="text" class="form-control" id="lname" placeholder="Last Name" required />
                </div>
                <span class="right badge badge-success">Address</span>
                <div class="input-group">
                  <input type="textarea" class="form-control" id="address" placeholder="Address" required />
                </div>
                <span class="right badge badge-success">Birthday</span>
                <div class="input-group">
                  <input type="date" class="form-control" id="birthday" placeholder="Date" onchange="getAge();" required />
                  <span class="form-control" id="result" placeholder="age" @disabled(true)>
                </div>
                <span class="right badge badge-success">Membership Date</span>
                <div class="input-group">
                  <input type="date" class="form-control" id="date" placeholder="Date" required />
                </div>

                
                
                <div class="input-group">
                  <div class="row">
                    <div class="col">
                    <span class="right badge badge-success">SCA</span>
                    <button class="right badge badge-succes btn-danger pt-1 pb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                      <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg></button>
                <select class="form-select form-select-lg mb-3" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                    </div>

                    <div class="col">
                      <span class="right badge badge-success pt-1 pb-1 ">Agent</span> 
                      {{-- <button class="btn btn-danger pt-2 pl-2 pb-2 pr-2"> --}}
                        <button class="right badge badge-succes btn-danger pt-1 pb-1"><svg width="10" height="13" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg></button>
                      {{-- </button> --}}
                <select class="form-select form-select-lg mb-3" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                    </div>
                  </div>
                </div>
              </div>
 
              
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-danger now-ui-icons">Add Dependent</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      
    </div>
</section>
<script>
function getAge() {
  var age = document.getElementById('result').value;
	var date = document.getElementById('birthday').value;
 
	if(result === "0"){
		alert("Cannot Accept the age!");
    }else{
		var today = new Date();
		var birthday = new Date(date);
		var year = 0;
		if (today.getMonth() < birthday.getMonth()) {
			year = 1;
		} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
			year = 1;
		}
		var age = today.getFullYear() - birthday.getFullYear() - year;
 
		if(age < 0){
      alert("Cannot Accept the age!");
			age = 0;
		}
		document.getElementById('result').innerHTML = age;
	}
}
</script>
</div>