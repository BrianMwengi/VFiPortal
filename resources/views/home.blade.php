@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">-->     
<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Welcome to VFI Kenya Portal</h1>
         </div>
           </div>
    @if($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
            <!--place something here-->
            </section>
            <div class="row justify-content-center">
               <section class="col-md-8">
                <div class="card mb-3">
                <img src="{{ asset('images/vfi_brethren.png') }}" class="card-img-top" alt="..."/>
                    <div class="card-body">
                    @include('inc.messages')
                        <h5 class="card-title">Please Enter Your information</h5>
                        <form action="{{ url('/store') }}" method="post" data-toggle="validator">
                            @csrf
                            <div class="form-group">
                                <label>Gender</label>
                                <input name="Gender" type="text" id="Gender" class="form-control" placeholder="Enter your Gender" required>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" id="firstName" class="form-control"  placeholder="Enter your first name"  required>
                            </div>

    
                            <div class="form-group">
                                <label>second Name</label>
                                <input name="secondName" type="text" id="secondName" class="form-control"  placeholder="Enter your second name" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Marital Status</label>
                                <input name="MaritalStatus" type="text" id="maritalstatus" class="form-control"  placeholder="Enter your marital status" required>
                            </div>
                            <div class="form-group">
                                <label>Tel No</label>
                                <input name="TelNo" type="text" id="telNo" class="form-control"  placeholder="Enter your tel no" required>
                            </div>
                            <div class="form-group">
                                <label>Town of Residence</label>
                                <input name="TownofResidence" type="text" id="townofresidence" class="form-control"  placeholder="Enter your town of residence" required>
                            </div>
                            <div class="form-group">
                                <label>Fellowship</label>
                                <input name="Fellowshipifattendingany" type="text" id="fellowship" class="form-control"  placeholder="Which fellowship do you attend if any" required>
                            </div>
                            <div class="form-group">
                                <label>Ministry Involved in</label>
                                <input name="MinistryInvolvedin" type="text" id="ministryinvoled" class="form-control"  placeholder="Enter the Ministry Involved in" required>
                            </div>
                            <div class="form-group">
                                <label>Church You attend</label>
                                <input name="ChurchYouattend" type="text" id="churchyouattend" class="form-control"  placeholder="Enter the Church you attend" required>
                            </div>
                            <div class="form-group">
                                <label>Profession</label>
                                <input name="Profession" type="text" id="profession" class="form-control"  placeholder="Enter your current profession (Optional)">
                            </div>
                            <div class="form-group">
                                <label>Length of Membership in VFi</label>
                                <input name="LengthofMembershipinVFi" type="number" id="membership" class="form-control"  placeholder="How long have you been in VFi"  required>
                            </div> 
                            <div class="form-group">
                                <label>Email</label>
                                <input name="Email" type="email" id="email" class="form-control"  placeholder="Enter Your Email" data-error="that email address is invalid"  required>
                            </div>        
                            <input type="submit" name="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
@endif
@endsection
           
       <!-- </div>
    </div>
</div>-->
