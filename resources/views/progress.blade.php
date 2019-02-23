@extends('layouts.app')

@section('content')




<div class="d-flex flex-column">
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
<div class = "row col-sm-4">
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
