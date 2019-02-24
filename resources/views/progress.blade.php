@extends('layouts.app')

@section('content')

<div class="bg-profile" style="padding-bottom:150px;">

    <div class = "d-flex flex-column justify-content-center" style = "text-align:center; padding-top: 90px;">
        <div><img src="https://thumbs.dreamstime.com/z/stressed-student-24485690.jpg" alt="My face" class="rounded-circle"></div>
        <div class="p-2" style = "font-size: 40px;font-family:'HWT Slab'">{{Auth::user()->name}}</div>
        <div class="p-2" style = "font-size: 30px;font-family:'RiftSoft';">A student hoping to become a more mindful person</div>
    </div>
    <div class = "row">
        <div class= "col-sm-6" align = "center">
            <p class = "circle-border" style="font-family:'HWT Slab'">{{$activitiesDone}}</p>
        </div>
        <div class= "col-sm-6" align = "center">
            <p class = "circle-border"  style="font-family:'HWT Slab'">16</p>
        </div>
    </div>
    <div class = "row">
        <div class = "col-sm-6" align = "center">
            <p style="font-family:RiftSoft; font-size:30px;color:#FEFEFE;padding-top:50px;">activities accomplished</p>
        </div>
        <div class = "col-sm-6" align = "center">
            <p style="font-family:RiftSoft; font-size:30px;color:#FEFEFE;padding-top:50px;">day streak</p>
        </div>
    </div>

</div>

<div style="margin-left:139px;margin-top:150px;">
  <h1 style ="font-family:'HWT Slab';font-size:80px;color:#434244;">trophies</h1>

 <div class="h-100 row align-items-center" style="margin-top:50px; margin-bottom:125px;">
       <div class="card" style="width: 18rem; padding:10px; border:0px;">
       <img class="card-img-top" src="http://media.gettyimages.com/vectors/vector-trophy-illustration-vector-id530286335?s=170x170" alt="Card image cap">
       <div class="card-body">
         <p class="card-text" style="font-family:'RiftSoft';font-size:20px;text-align:center;">50 activities done</p>
       </div>
      </div>
      <div class="card" style="width: 18rem;padding:10px; border:0px;">
      <img class="card-img-top" src="http://media.gettyimages.com/vectors/vector-trophy-illustration-vector-id530286335?s=170x170" alt="Card image cap">
      <div class="card-body">
         <p class="card-text" style="font-family:'RiftSoft';font-size:20px;text-align:center;">30-day streak</p>
      </div>
     </div>
     <div class="card" style="width: 18rem;padding:10px; border:0px;">
     <img class="card-img-top" src="http://media.gettyimages.com/vectors/vector-trophy-illustration-vector-id530286335?s=170x170" alt="Card image cap">
     <div class="card-body">
       <p class="card-text" style="font-family:'RiftSoft';font-size:20px;text-align:center;">25 activities done</p>
     </div>
     </div>
 </div>


</div>



@endsection
