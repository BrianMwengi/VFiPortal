@extends('layouts.app')

@if($layout == 'edit')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-12">
                @include('VFiList')
            </section>
            <div class="row justify-content-center">
            <section class="col-md-6">
                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of VFi Kenya Brethren</h5>
                        <form action="{{ url('/update/'.$vfi->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Gender</label>
                                <input value="{{ $vfi->Gender }}" name="Gender" type="text" class="form-control"  placeholder="Enter Your Gender">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{ $vfi->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>second Name</label>
                                <input value="{{ $vfi->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Marital Status</label>
                                <input value="{{ $vfi->MaritalStatus }}" name="MaritalStatus" type="text" class="form-control"  placeholder="Enter Your Marital Status">
                            </div>
                            <div class="form-group">
                                <label>Tel No</label>
                                <input value="{{ $vfi->TelNo }}" name="TelNo" type="text" class="form-control"  placeholder="Enter Your Tel No">
                            </div>
                            <div class="form-group">
                                <label>Town of Residence</label>
                                <input value="{{ $vfi->TownofResidence }}" name="TownofResidence" type="text" class="form-control"  placeholder="Enter Your town of residence">
                            </div>
                            <div class="form-group">
                                <label>Fellowship if attending any</label>
                                <input value="{{ $vfi->Fellowshipifattendingany }}" name="Fellowshipifattendingany" type="text" class="form-control"  placeholder="Enter fellowship attending if any">
                            </div>
                            <div class="form-group">
                                <label>Ministry Involved in</label>
                                <input value="{{ $vfi->MinistryInvolvedin }}" name="MinistryInvolvedin" type="text" class="form-control"  placeholder="Enter the Ministry Involved in">
                            </div>
                            <div class="form-group">
                                <label>Church You attend</label>
                                <input value="{{ $vfi->ChurchYouattend }}" name="ChurchYouattend" type="text" class="form-control"  placeholder="Enter the Church you attend">
                            </div>
                            <div class="form-group">
                                <label>Profession</label>
                                <input value="{{ $vfi->Profession }}" name="Profession" type="text" class="form-control"  placeholder="Enter Your Profession">
                            </div>
                            <div class="form-group">
                                <label>Length of Membership in VFi</label>
                                <input value="{{ $vfi->LengthofMembershipinVFi }}" name="LengthofMembershipinVFi" type="number" class="form-control"  placeholder="Enter Your Length of Membership in VFi">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input value="{{ $vfi->Email }}" name="Email" type="email" class="form-control"  placeholder="Enter Your Email">
                            </div>        
                            <input type="submit" class="btn btn-info" value="Update">
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