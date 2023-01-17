{{-- @extends('layouts.account')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
{{-- <div class="account-layout  border">
  <div class="account-hdr bg-primary text-white border">
   Become an employer in {{config('app.name')}} --}}
   <!-- Button trigger modal -->


  {{-- <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 style="color:black;" class="modal-title fs-5" id="exampleModalLabel">Requirements for Local Recruitment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('account.becomeEmployer')}}" method="POST">
            @csrf <!-- {{ csrf_field() }} -->

        <div class="modal-body">
            <div class="mb-3">
                <label style="color:black;" for="exampleFormControlInput1" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="Company Name" placeholder="Company Name">
              </div>
            <div class="mb-3">
                <label style="color:black;" for="BusinessPermit" class="form-label">Business Permit</label>
                <input class="form-control" type="file" id="Business Permit">
              </div>
              <div class="mb-3">
                <label style="color:black;" for="MayorsPermit" class="form-label">Mayor's Permit</label>
                <input class="form-control" type="file" id="MayorsPermit">
              </div>
              <div class="mb-3">
                <label style="color:black;" for="JobVacancies" class="form-label">Job Vacancies</label>
                <input class="form-control" type="file" id="JobVacancies">
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="sumbit" class="btn btn-primary">Save changes</button>

        </div>
      </div> --}}
    {{-- </div>
  </div>
  </div> --}}
  {{-- end --}}
  {{-- <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <p class="lead">Become Employeer</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div>
          <p class="text-sm"><i class="fas fa-info-circle"></i> <span class="font-weight-bold">Submit all the requirements to become an employer.</span> </p>
          <div class="my-4">
          <p class="my-3">Click the button to assign <span class="text-primary">Author roles</span> to your account.</p>


              <div class="form-group">
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Become Employer
                      </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection --}}
@extends('layouts.account')
@section('content')
<div class="account-layout  border">
  <div class="account-hdr bg-primary text-white border">
   Become an employer in {{config('app.name')}}
  </div>
  <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <p class="lead">Upgrade to Author Role</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div>
          <p class="text-sm"><i class="fas fa-info-circle"></i> <span class="font-weight-bold">Usually this should be validated by Admin but for testing it is one click away to become an employer.</span> </p>
          <div class="my-4">
          <p class="my-3">Click the button to assign <span class="text-primary">Author roles</span> to your account.</p>
            <form action="{{route('account.becomeEmployer')}}" method="POST">
              @csrf
              <div class="form-group">
                <div class="d-flex">
                  <button type="submit" class="btn primary-outline-btn">Become Employer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
