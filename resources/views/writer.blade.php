@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <br />
                      @if($layout == 'show')
                      <div class="container-fluid mt-4">
                       <div class="row">
                         <section class="col">
                          @include('VFiList') 
                          </section>
            </div>
        </div>
    </div>
</div>
@endif
@endsection