@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{route('foundationcommittee')}}">Foundation Committee</a></li>
                    <li  class="list-group-item"> <a href="{{route('executivecommittee')}}">Executive Committee</a> </li>
                    <li class="list-group-item"><a href="{{route('auditcommittee')}}">Audit Committee</a></li>
                    <li class="list-group-item"><a href="{{route('hospitalcommittee')}}">Hospital Committee</a></li>
                    <li class="list-group-item"><a href="{{route('educationcommittee')}}"> IBF Education,Health Education & Social Work Committee</a></li>
                </ul>
            </div>
            <div class="col-md-8">













                <div class="card mb-3" style="max-width: 720px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{url('public/frontend/images/1566096456_Saleh Jahur.jpg')}}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Chairman</h5>
                                <p class="card-text" style="text-align: justify">Professor Dr. Mohammad Saleh Jahur is an Independent Director of the Bank. He was a Professor of Accounting and Banking at University of Chittagong. He started his career as Lecturer in the Department of Finance in 1993. Before, joining the university, He worked at MIDAS (an NGO; now a financial institution) and Bangladesh Petroleum Corporation (an Autonomous Government Organization) as executive. He also completed BCS successfully but did not join.

                                    Dr Jahur completed all academic programs –SSC, HSC, B.Com (Hons.) in Accounting, and M.Com in Accounting with outstanding results. He did his Ph.D.on Lease Financing in Bangladesh Study of Policy and Performance under the joint supervision of Professor Dr S.P.Singh and Professor Dr. Manoj Anand in University Business School, Punjab, India under ICCR Scholarship of Government of India in 2000-2002. He did a diploma on Financial Reporting Standards and Assurance under the World Bank Scholarship at London, United Kingdom in 2008. He also studied on Green Productivity for Industry under the scholarship of METI, Japan in 2013. He also worked in Chartered Accountancy Firm for five months.

                                    He is a continuous researcher, working in the area of corporate finance, stock market and industrial productivity for many years. He has a good number articles published at home and abroad. He also participated many seminar and conference as paper presenter, discussant, and session chair at home and abroad. Besides, eleven students got awarded with M. Phil. and Ph.D. under his supervision from the University of Chittagong and about fourteen students are pursuing M. Phil. and Ph.D. at universities in Bangladesh and Malaysia under his supervision/Joint supervision at present.

                                    Mr. Jahur successfully implemented the projects titled "Grameen Bank and Socio-Economic Changes—A Study of Select Loanees" and “Higher Education Quality Enhancement Project“ awarded by German Cultural Center-Goethe institute, Dhaka, and University Grants Commission, World Bank & Government of the People’s Republic of Bangladesh respectively. Besides, he worked as Editor of Capital Market Journal-Vision and Academic Journal-of Faculty of Business Administration of University of Chittagong.

                                    Professor Jahur served as an Advisor to Chittagong Capital Limited-a Brokerage of Chittagong Stock Exchange, Bangladesh and GPH Ispat Limited for three years from 2009 to 2012. He worked as an Independent Director of GPH Ispat Limited for two terms (6 years) i. e. from 2012 to 2018. He has also been working as an Independent Director of Hakkani Pulp and Paper Mills Limited since September, 2017. He is a member of Chittagong Club Limited, Chittagong and Life Member at Ma O Shishu Hospital Limited, Chittagong & Chittagong Diabetics Association, Khulshi, Chittagong. Prof. Jahur has visited many countries and participated in many international seminars, symposiums & conferences. </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="card mb-3" style="max-width: 720px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{url('public/frontend/images/1557046377_Areef Suleman.jpg')}}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Member</h5>
                                <p class="card-text" style="text-align: justify">Dr. Areef Suleman is the representative of Islamic Development Bank, Jeddah, KSA as Foreign director of Islami Bank Bangladesh Limited. He is appointed as director on March 28, 2013 in place of Janab Mohammad Adnan Midani. He is a South African National having PhD in Economics, Master in Economics and Masters in Business Leadership. At present he is a Manager of Policy Development Division in Economic Research & Policy Division of Islamic Development Bank, Jeddah, KSA.</p>
                            </div>
                        </div>

                    </div>
                </div>







            </div>
        </div>

    </div>
@endsection