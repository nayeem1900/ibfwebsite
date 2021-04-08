@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <img src="{{url('public/frontend/images/IBCHK, Dhaka.jpg')}}" class="d-block w-100" width="" alt="">
    <div class="row">
        <div class="col-sm"><a href="">Services</a> </div>
        <div class="col-sm">Consultants</div>
        <div class="col-sm">Committee</div>
        <div class="col-sm">Gallery</div>
        <div class="col-sm">About Us</div>
        <div class="col-sm">Contact US</div>

    </div>
    <strong>Welcome To Islami Bank Central Hospital, Kakrail, Dhaka.</strong>
    <p style="text-align: justify">Islami Bank Central Hospital Kakrail is a largest and fast growing Hospital in Dhaka. The Hospital has founded  13 April 1993. It is a 135 beded hospital. We believe the Hospital will go ahead as a pioneer private Hospital in Dhaka.The Hospital operates its daily activities of her won building. There are three building in Hospitalt.  It has 06 operation theaters including 01 Eye OT. There are also 05 preoperative and 06 post operative room. There have Modern ICU  that leaded by famous and expert  Consulant and medical related people. </p>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>


        </tbody>
    </table>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Contact Us</h5>

            <p class="card-text">30, Anjuman-e-Mofidul Islam Road, Kakrail, Dhaka-1000
                Phone:+(02) 9360331-2, 9355801-2
                Mobile:+01915728266, 01918872802
                Office Email:ibhdit@yahoo.com
              </p>

        </div>
    </div>

</div>

  @endsection