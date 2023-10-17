@extends('layouts.default')
@section('title','Iot Services')
@section('main-content')

{{-- iot image --}}
<section class="container-fluid  mb-3 mr-top-10">
    <div class="row border border-0">
        <img src="{{ asset('servicesimg/iotserviceimages/Office Event QII copy.png') }}" class="img img-thumbnail" style="border: none;" alt="">
    </div>
</section>

<section class="container-fluid">
    <div class="row " style="margin-top: 4rem;">
        <div class="col-lg-6">
            <img src="{{ asset('eic_img/img1.jpg') }}" class="img-thumbnail mx-auto" style="border:none;" alt="">
        </div>
        <div class="col-lg-6">
            <h2 class="font-weight-bold mx-auto text-center mb-1" style="font-weight:600;">Applicant/Students</h2>
                <hr style="width:100%;">
            <p style="font-size:19px;font-family:inherit;" class="mt-1"> <span style="margin-left:1rem;"></span> Quantanics TechServ Pvt Ltd, India in collaboration with Edge Matrix
    Corporation, Delaware, United States, is delighted to announce the launch of the STUDENT
    PoC SCHEME, an exciting opportunity for students to demonstrate their creative ideas and turn
    them into real-world solutions. We invite you to submit proposals for Proof of Concept (PoC)
    under this initiative.</p>
        </div>
    </div>



<div class="row " style="margin-top:4rem;">
    <div class="col-lg-6">
            <h2 class="font-weight-bold mx-auto text-center mb-1" style="font-weight:600;">About PoC SCHEME</h2>
                <div class="m-1"><hr></div>
            <p style="font-size:19px;font-family:inherit;margin-left:1rem;" class="mt-1"> <span style="margin-left:0.4rem;"></span> The STUDENT PoC SCHEME is intended to motivate students to explore their
entrepreneurial spirit, creativity, and problem-solving skills. Through this scheme, we hope to
support PoC that have the potential to make a positive impact in a variety of areas, such as
technology, healthcare, energy, the environment, and more.</p>
        </div>
    <div class="col-lg-6 ">
        <img src="{{ asset('eic_img/img2.png') }}" class="img-thumbnail mx-auto " style="border:none;" alt="">
    </div>
</div>

 <!-- eligibility criteria -->
 <div class="row " style="margin-top:4rem;">
    <h2 class="mx-auto font-weight-bold text-center text-decoration-underline">Eligibility Criteria</h2>
    <div class="col-lg-10 mx-auto">
        <ul class="list-group ml-2" style="font-size:19px;font-family:inherit">
            <li class="list-group-item">Students enrolled in accredited educational institutions.</li>
            <li class="list-group-item">Teams consisting of up to [maximum team size 3] members.</li>
            <li class="list-group-item">PoCs should align with the theme and objectives of the scheme.</li>
        </ul>
    </div>
</div>


<div class="row" style="margin-top:4rem;">
    <h2 class="mx-auto font-weight-bold text-center text-decoration-underline">Amenities</h2>
    <div class="col-lg-10 mx-auto">
        <ul class="list-group ml-2" style="font-size:19px;font-family:inherit;">
            <li class="list-group-item" style="padding-left:1.5rem;">Financial support to develop your Proof of Concept (PoC).</li>
            <li class="list-group-item " style="padding-left:1.5rem;">You can be eligible for a maximum grant of <span class="text-success fw-bold">Rs. 25,000.</span></li>
            <li class="list-group-item " style="padding-left:1.5rem;">Mentorship and guidance from industry experts.</li>
            <li class="list-group-item" style="padding-left:1.5rem;">The Opportunity to present your PoC to potential investors.</li>
            <li class="list-group-item" style="padding-left:1.5rem;">Networking and exposure within the innovation ecosystem</li>
        </ul>
    </div>
</div>


<div class="row" style="margin-top:4rem;">
    <div class="col-lg-6">
        <h2 class="font-weight-bold mx-auto text-center mb-1" style="font-weight:600;">How To Apply</h2>
        <div class="m-4"><hr></div>
        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <span>1.</span>
            <div  style="font-family:inherit;margin-left:1rem;">Download the application form from <a href="https://forms.gle/2D5bxAMTFJ8wPiqx9"> Form Link  <i class="fa fa-download  text-primary"></i></a></div>
        </div>
        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <span>2.</span>
            <div style="font-family:inherit;margin-left:1rem;">Complete the application with all required details.</div>
        </div>
        <div class="d-flex flex-row justify-content-start align-items-center text-danger" style="font-size:19px;margin-left:1.5rem;">
            <span>3.</span>
            <div  style="font-family:inherit;margin-left:1rem;">Last date for online registration: 05.10.2023, 5.00 PM</div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="{{ asset('eic_img/img3.png')}}" class="img-thumbnail mx-auto" style="border:none;" alt="">
    </div>
</div>

 <!-- selection criteria -->
 <div class="row " style="margin-top:4rem;">
    <div class="col-lg-6">
        <img src="{{ asset('eic_img/img4.png') }}" class="img-thumbnail mx-auto" style="border:none;" alt="">
    </div>
    <div class="col-lg-6">
        <h2 class="font-weight-bold mx-auto text-center mb-1" style="font-weight:600;">Selection Criteria</h2>
        <div class="m-2"><hr></div>
        <p style="font-size:19px;font-family:inherit;margin-left:0.5rem;">Proposals will be evaluated based on the following criteria:</p>
        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <i class="fa fa-circle " style="font-size:10px;"></i>
            <div  style="font-family:inherit;margin-left:1rem;">Innovation and uniqueness of the idea.</div>
        </div>
        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <i class="fa fa-circle " style="font-size:10px;"></i>
            <div  style="font-family:inherit;margin-left:1rem;">Feasibility and potential for scalability.</div>
        </div>

        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <i class="fa fa-circle " style="font-size:10px;"></i>
            <div  style="font-family:inherit;margin-left:1rem">Impact on the target domain.</div>
        </div>

        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <i class="fa fa-circle " style="font-size:10px;"></i>
            <div style="font-family:inherit;margin-left:1rem;">Impact on the target domain.</div>
        </div>

        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <i class="fa fa-circle " style="font-size:10px;"></i>
            <div style="font-family:inherit;margin-left:1rem;">Team's capabilities and commitment.</div>
        </div>

        <div class="d-flex flex-row justify-content-start align-items-center" style="font-size:19px;margin-left:1.5rem;">
            <i class="fa fa-circle " style="font-size:10px;"></i>
            <div  style="font-family:inherit;margin-left:1rem">Alignment with the scheme's objectives.</div>
        </div>
    </div>
</div>

<!-- dates to remember -->
<div class="container " style="margin-top:4rem;">
    <div class="row mb-4">
        <h2 class="text-decoration-underline text-center" style="font-family:inherit;">Dates To Remember</h2>
    </div>

    <div class="row" style="font-size:19px;">
        <div class="col-lg-3"></div>
        <div class="col-lg-8 mx-auto text-start">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <i class="fa fa-circle " style="font-size:10px;"></i>
                    <span style="margin-left:1rem;">Proposal Submission Deadline </span>
                </div>
                <div class="col-lg-6 col-md-4">
                        <span style="margin-left:1rem;">: 05.10.2023</span>
                </div>
            </div>
               
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="row" style="font-size:19px;">
        <div class="col-lg-3"></div>
        <div class="col-lg-8 mx-auto text-start">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <i class="fa fa-circle " style="font-size:10px;"></i>
                    <span style="margin-left:1rem;">Announcement of Shortlisted Proposals </span>
                </div>
                <div class="col-lg-6 col-md-4">
                    <span style="margin-left:1rem">: 20.10.2023</span>
                </div>
            </div>
           
        </div>
        <div class="col-lg-3"></div>
    </div>


    <div class="row" style="font-size:19px;">
        <div class="col-lg-3"></div>
        <div class="col-lg-8 mx-auto text-start">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <i class="fa fa-circle " style="font-size:10px;"></i>
                    <span style="margin-left:1rem">PoC Development Period </span>
                </div>
                <div class="col-lg-6 col-md-4">
                    <span style="margin-left:1rem;">: 5 Months</span>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="row" style="font-size:19px;">
        <div class="col-lg-3"></div>
        <div class="col-lg-8 mx-auto text-start">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <i class="fa fa-circle " style="font-size:10px;"></i>
                    <span style="margin-left:1rem;">Final Presentation and Evaluation </span>
                </div>
                <div class="col-lg-6 col-md-4">
                        <span style="margin-left:1rem">: 24.03.2024</span>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3"></div>
    </div>

</div>

<div class="container" style="margin-top:4rem;">
    <div class="text-start mb-4">
        <h1 class="font-weight-bold text-decoration-underline ">General Instructions</h1>
    </div>

    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">1.</span>The scheme is established to provide financial assistance to final-year undergraduate and postgraduate students (in engineering and all sciences) for conducting scientific research, with a particular focus on Proof of Concept (PoC)s that leverage technologies such as Internet of Things (IoT), artificial intelligence (AI), blockchain, and automation to improve efficiency, sustainability, and safety in industrial settings.</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">2.</span>The PoC Guides/HODs (Head of Departments) are responsible for evaluating the PoC proposals and ensuring that they meet the criteria of the scheme before submitting them to Quantanics and Edge Matrix Corporation.</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">3.</span>The PoC team are not allowed to change the topic or deviate from the objectives of the approved PoC proposal. If any such changes occur, the grant will be considered void and the institution must return the approved amount to Quantanics & Edge Matrix Corporation.</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">4.</span>All PoC proposals received will be reviewed and evaluated by a panel of experts. The selected proposals will be announced on the website ( <a href="https://www.quantanics.in">Quantanics</a> ).</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">5.</span>The PoC sanction letter and the grant amount will be sent to the Principal/Registrar of the institution, with a copy to the PoC Guide.</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">6.</span>The approved PoC must be completed and the report must be submitted by the end of March 2024.</p>
        </div>
    </div>

    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">7.</span>The Utilization Certificate (UC) and Statement of Expenditure (SE) must be signed by the PoC guide, Head of Department (HOD), and Principal/Registrar/Dean, with an official seal as applicable. The PoC guides are responsible for the timely submission of the PoC Report (20-30 pages), Seminar Paper (6 pages), UC, and SE.</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">8.</span>If the PoC guide wishes to leave the institution where the PoC is based, the institute/guide must inform the council immediately. In consultation with the council, the institute/guide must take steps to ensure the successful completion of the PoC before relieving the guide.</p>
        </div>
    </div>


    <div class="row ml-2 mb-4" style="font-size:19px;">
        <div class="row text-justify">
            <p><span style="font-weight:500;margin-right:1rem;">9.</span>Two complete copies of the proposals must be submitted through the appropriate channels to the Head Of Council, Council For Pioneering Excellence In Innovation, 207/49 A, VOC Nagar, North Street, Kalavasal, Madurai-625016, Tamil Nadu, India.</p>
        </div>
    </div>
    
</div>


<div class="container " style="margin-top:4rem;">
    <div class="text-start text-decoration-underline h1">Queries</div>

    <div class="row">
        <p class="text-justify" style="font-size:19px;"> <span style="margin-left:1.3rem;"></span>Please contact Mr. Faiz at +91 83005 75800 or writeus@edgematrixcorp.com for support. We eagerly anticipate receiving your innovative proposals and assisting you in bringing your ideas to fruition through the STUDENT PoC SCHEME. Let us collaborate to create a better future!</p>
    </div>
</div>

<div class="m-4" style="margin:4.4rem;">
    <hr>
</div>


</section>


 



@endsection