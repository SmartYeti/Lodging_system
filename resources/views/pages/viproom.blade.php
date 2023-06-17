@extends('layouts.main')
@section('content')


<style>
  .btn-square-md {
width: 150px !important;
max-width: 100% !important;
max-height: 100% !important;
height: 70px !important;
text-align: center;
padding: 0px;
font-size:20px;
font-weight: bold;

}
</style>


<div class="container-fluid bg-dark text-center">
>

<div class="container-fluid bg-warning text-center">


<style>
  .custom-row-1{
    text-align: center;
    background-color: black;
    height: 130px !important;
    max-width: 102% !important;
    width:1500px;
    font-size:20px;
    font-weight: bold;
    
  }
  .custom-row-2{
    height: 50px;
    max-width: 102% !important;
    width:1500px;
    
    font-size:30px;
  }


</style>

    <div class="row custom-row-2 justify-content-evenly text-dark ">
    <div class="col-sm-12 col-md-6 col-lg-3">VIP Room List</div>
    </div>
   
    <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">

        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 1 <p class="fw-normal text-dark fs-6">Status</p></a>
        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 2 <p class="fw-normal text-dark fs-6">Status</p></a>
        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 3 <p class="fw-normal text-dark fs-6">Status</p></a>
    </div>

    <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">

        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 4 <p class="fw-normal text-dark fs-6">Status</p></a>
        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 5 <p class="fw-normal text-dark fs-6">Status</p></a>
        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 6 <p class="fw-normal text-dark fs-6">Status</p></a>
    </div>

    <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">

        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 7 <p class="fw-normal text-dark fs-6">Status</p></a>
        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 8 <p class="fw-normal text-dark fs-6">Status</p></a>
        <a class="btn btn-success btn-square-md btn-outline-light text-dark" href="/confirm" role="button">VIP 9 <p class="fw-normal text-dark fs-6">Status</p></a>
    </div>

    <p>
    </p>
    
    <div class="row justify-content-start text-dark align-items-start fw-bold" >
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        <p>
        <a class="nav-link" href="/home">Go Back!</a>
        </p>
    </svg>
   
    
    </div>

 

</div>
<p>
  <br/>
</p>


</div>
@stop