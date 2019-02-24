@extends('layouts.app')

@section('content')

<html>
    <div class = "d-flex flex-column justify-content-center" style = "text-align:center; padding-top: 30px;">
        <div><img src="https://thumbs.dreamstime.com/z/stressed-student-24485690.jpg" alt="My face" class="rounded-circle"></div>
        <div class="p-2" style = "font-size: 40px;">Me</div>
        <div class="p-2" style = "font-size: 20px;">A student hoping to become a more mindful person</div>
    </div>
    <div class = "row">
        <div class= "col-sm-6" align = "center">
            <p class = "circle-border">24</p>
        </div>
        <div class= "col-sm-6" align = "center">
            <p class = "circle-border">16</p>
        </div>
    </div>
    <div class = "row">
        <div class = "col-sm-6" align = "center">
            <p>activities accomplished</p>
        </div>
        <div class = "col-sm-6" align = "center">
            <p>day streak</p>
        </div>
    </div>






<!-- <div class="d-flex flex-column">
   <div class="d-flex flex-lg-row justify-content-center" style = "text-align: center;">
      <div class="p-2 circle-text"><div>25</div></div>
      <div class="p-2 circle-text"><div>23</div></div>
   </div>
</div>

 <div class="d-flex flex-column">
   <div class="d-flex flex-lg-row justify-content-around" style = "text-align: center;">
      <h4>activities done</h4>
      <h4>day streak</h4>
   </div>
</div>
<div class = "row col-sm-4"> -->
   <h1>TROPHIES</h1>
</div>
<div class="h-100 row align-items-center">
     <div class="card" style="width: 18rem; padding:10px">
      <img class="card-img-top" src="http://media.gettyimages.com/vectors/vector-trophy-illustration-vector-id530286335?s=170x170" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Write your first entry!</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;padding:10px">
    <img class="card-img-top" src="http://media.gettyimages.com/vectors/vector-trophy-illustration-vector-id530286335?s=170x170" alt="Card image cap">
    <div class="card-body">
       <p class="card-text">Finish 5 fulfilling activities in a single day!</p>
    </div>
   </div>
   <div class="card" style="width: 18rem;padding:10px">
   <img class="card-img-top" src="http://media.gettyimages.com/vectors/vector-trophy-illustration-vector-id530286335?s=170x170" alt="Card image cap">
   <div class="card-body">
      <p class="card-text">Write 5 entries in a row!</p>
   </div>
   </div>
</div>



@endsection
