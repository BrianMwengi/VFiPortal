
    <div class="card-body">
        <h5 class="card-title">List of VFi Brethren in Kenya</h5>
        <p class="card-text">You can find here all the informations about VFi Kenya in the system</p>
   

    <div class="table-responsive">
    <div class="custom-control custom-checkbox"></div>   
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Gender</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Tel No</th>
                <th scope="col">Town of Residence</th>
                <th scope="col">Fellowship if attending any</th>
                <th scope="col">Ministry Involved in</th>
                <th scope="col">Church You attend</th>
                <th scope="col">Profession</th>
                <th scope="col">Length of Membership in VFi</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($vfis as $vfi)
                <tr>
                    <td>{{ $vfi->Gender }}</td>
                    <td>{{ $vfi->firstName }}</td>
                    <td>{{ $vfi->secondName }}</td>
                    <td>{{ $vfi->MaritalStatus }}</td>
                    <td>{{ $vfi->TelNo }}</td>
                    <td>{{ $vfi->TownofResidence }}</td>
                    <td>{{ $vfi->Fellowshipifattendingany }}</td>
                    <td>{{ $vfi->MinistryInvolvedin }}</td>
                    <td>{{ $vfi->ChurchYouattend}}</td>
                    <td>{{ $vfi->Profession }}</td>
                    <td>{{ $vfi->LengthofMembershipinVFi}}</td>
                    <td>{{ $vfi->Email }}</td>
                    
                

                    <td>
                
                     <input data-id="{{$vfi->id}}" class="toggle-class" type="checkbox" id = "status" name ="status" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $vfi->status ? 'checked' : '' }}>

                    </td>
                    
                    <td>
                        <a href="{{ url('/edit/'.$vfi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      
                    </td>
                   

                </tr>
            @endforeach
            </tbody>
        </table>
       
    </div>
</div>
</div>
