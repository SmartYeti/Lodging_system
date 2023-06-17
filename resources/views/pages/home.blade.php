@extends('layouts.main')
@section('content')


<style>
  .btn-square-md {
width: 300px !important;
max-width: 100% !important;
max-height: 100% !important;
height: 150px !important;
text-align: center;
padding: 0px;
font-size:30px;
font-weight: bold;

}
</style>


<div class="container-fluid bg-dark text-center">
>


<a class="btn btn-warning btn-square-md btn-outline-light text-dark" href="/reg-room" role="button"><br/>Regular</a>
<button type="button" class="btn btn-lg btn-dark" disabled></button>
<button type="button" class="btn btn-lg btn-dark" disabled></button>
<button type="button" class="btn btn-lg btn-dark" disabled></button>
<a class="btn btn-warning btn-square-md btn-outline-light text-dark" href="/vip-room" role="button"><br/>VIP</a>

<p>
  <br/>
</p>

<div class="container bg-warning">
<p>
  <br/>
</p>

<style>
  .custom-row-1{
    background-color: black;
    height: 50px;
    width:1140px;
    font-size:20px;
    font-weight: bold;
  }
  .custom-row-2{
    background-color: white;
    height: 50px;
    width: 1140px;
    font-weight: bold;
  }


</style>

  <div class="row custom-row-2 justify-content-evenly text-dark align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-3">Time</div>
    <div class="col-sm-12 col-md-6 col-lg-3">Regular Rate</div>
    <div class="col-sm-12 col-md-6 col-lg-3">VIP Rate</div>
  </div>

  <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-3">3 Hours</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">350 PHP</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">400 PHP</div>
  </div>

  <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-3">8 Hours</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">900 PHP</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">1000 PHP</div>
  </div>

  <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-3">12 Hours</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">1200 PHP</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">1400 PHP</div>
  </div>

  <div class="row custom-row-1 justify-content-evenly text-warning align-items-center">
    <div class="col-sm-12 col-md-6 col-lg-3">24 Hours</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">2200 PHP</div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">2600 PHP</div>
  </div>

  

  <p>
  <br/>
</p>

</div>

<p>
  <br/>
</p>


</div>
@stop