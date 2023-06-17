@extends('layouts.main')
@section('content')


<style>
  .btn-square-md {
width: 150px !important;
max-width: 100% !important;
max-height: 100% !important;
height: 40px !important;
text-align: center;
padding: 0px;
font-size:20px;
font-weight: bold;

}
</style>


<div class="container-fluid bg-dark text-center">
>

<div class="container-fluid bg-warning text-center">
<p>

</p>

<style>
  .custom-row-1{
    
    background-color: black;
    height: 75px !important;
    max-width: 102% !important;
    width:1500px;
    font-size:20px;
    
  }
  .custom-row-2{
    height: 50px;
    max-width: 102% !important;
    width:1500px;
    font-weight: bold;
    font-size:30px;
  }


</style>

    <div class="row custom-row-2 justify-content-evenly text-dark ">
    <div class="col-sm-12 col-md-6 col-lg-3">Check In Details</div>
    </div>
    <p>
        
    </p>

    <div class="row custom-row-1 justify-content-start text-warning align-items-center">

    <div class="col-sm-12 col-md-6 col-lg-3">Date: </div>
    <div class="col-sm-12 col-md-6 col-lg-3">DD-MM-YYYY</div>

    
    
    </div>

    <div class="row custom-row-1 justify-content-start text-warning align-items-start">

    <div class="col-sm-12 col-md-4 col-lg-3">Time: </div>
    <div class="col-sm-12 col-md-6 col-lg-3">HH-MM</div>

    </div>

    <div class="row custom-row-1 justify-content-start text-warning align-items-start">

    <div class="col-sm-12 col-md-6 col-lg-3">Room #:</div>
    <div class="col-sm-12 col-md-6 col-lg-3">Room Type:</div>
    <div class="col-sm-12 col-md-6 col-lg-3">Duration:</div>
    <div class="col-sm-12 col-md-6 col-lg-3">Initial Amount:</div>
    
    </div>

    <div class="row custom-row-1 justify-content-start text-warning align-items-start">

    <div class="col-sm-12 col-md-6 col-lg-3 text-white">--</div>
    <div class="col-sm-12 col-md-6 col-lg-3 text-white">--</div>
    <div class="col-sm-12 col-md-6 col-lg-3 text-white">--</div>
    <div class="col-sm-12 col-md-6 col-lg-3 text-white">--</div>
    

    </div>

    <div class="row custom-row-1 justify-content-evenly text-warning align-items-start">

        <a class="btn btn-warning btn-square-md btn-outline-light text-dark" href="/home" role="button">Confirm</a></div>

    
    <p>
       
    </p>
    
    <!-- <div class="row justify-content-center text-dark align-items-center fw-bold" >
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        <p>
        <a class="nav-link" href="/home">Go Back!</a>
        </p>
    </svg>
   
    
    </div> -->

    <p>
        
    </p>

</div>
<p>
  <br/>
</p>


</div>
@stop