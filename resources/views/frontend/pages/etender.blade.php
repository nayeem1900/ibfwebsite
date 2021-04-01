@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
               <strong>E-Tender System</strong>
                <p class="etender">Islami Bank Foundation E-Tender System is an internet based process wherein the complete tendering process; from advertising to receiving and submitting tender-related information are done through online. Islami Bank Foundation E-Tender system has developed and will be implemented as followed by the Government of the People's Republic of Bangladesh in pursuant to Section 65 of the Public Procurement Act, 2006. Visiting IBF website e-tender section visitor/bidder informed about the enlistment notice, then he complete the registration process, IBF responsible authority check and verify the registered user and approve the suitable applicant to be a enlisted bidder. After being a bidder he will informed tender notice and can participate in tender.</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Etender
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="">Supplier Login</a> </li>
                       <p class="card-text">Hot LIne :+02 7125567</p>

                        <li class="list-group-item">Tender NOtice</li>

                    </ul>
                </div>
            </div>

        </div>
        {{--Tender table--}}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">Date</th>
                <th scope="col">Deadline</th>
                <th scope="col">Title</th>
                <th scope="col">Download</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>


            </tbody>
        </table>

    </div>

@endsection