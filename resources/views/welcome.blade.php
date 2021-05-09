<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portfolio Nick Quispel</title>
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">

           <!-- Navigation-->

       @include('partials.navigation')

        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{ $resume->GetFirstName() }}
                        <span class="text-primary">{{ $resume->GetLastName() }}</span>
                    </h1>
                    <div class="subheading mb-5">
                        Ram 11 · Hellevoetsluis, 3225 EG · {{ $resume->GetPhone() }} ·
                        <a href="mailto:name@email.com">{{ $resume->GetEmail() }}</a>
                    </div>
                    <p class="lead mb-5">I am an eager learning junior backend developer who's interests are with creating quality code and results for the customer. I'm assertive for trying new languages and frameworks and my goal is to create wonderful applications.  </p>
                    <div class="social-icons">
                        <a class="social-icon" target="_blank" href="https://www.linkedin.com/in/nickquispel/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" target="_blank" href="https://github.com/Nickquispel"><i class="fab fa-github"></i></a>
                        <a target="_blank" href="https://www.ereps.eu/member-profile/85053"><i><img  class="ereps"  width="56" src="{{URL::asset('img/EREPS_Professional_2021.png')}}"/></i> </a>
                    </div>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    @foreach($resume->GetWork() as $experience)
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                            <div class="flex-grow-1">
                                <h3 class="mb-0">{{$experience->position}}</h3>
                                <div class="subheading mb-3">{{$experience->company}}</div>
                                @if(!empty($experience->summary))
                                <p>{{$experience->summary}} </p>
                                @endif
                            </div>
                            <div class="flex-shrink-0"><span class="text-primary">{{date('d-m-Y', strtotime($experience->startDate))}} till @if(!empty($experience->endDate)){{date('d-m-Y', strtotime($experience->endDate))}} @else Present @endif</span></div>
                        </div>
                    @endforeach
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    @foreach($resume->GetEducation() as $education)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$education->institution}}</h3>
                            <div class="subheading mb-3">{{$education->area}}</div>
                            @if(!empty($education->studyType))
                            <div class="subheading mb-3">{{$education->studyType}}</div>
                            @endif
                            <!-- <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.23</p> -->
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{date('d-m-Y', strtotime($education->startDate))}} till @if(!empty($education->endDate)){{date('d-m-Y', strtotime($education->endDate))}} @else Present @endif</span></div>
                    </div>
                    @endforeach
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fab fa-java"></i></li>

                    </ul>
                    <!-- <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div> -->
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. I'm a big fan of mountainbiking and going to the gym and hiking. On the other hand I can also spend my time inside with gaming or developing.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->

            <section class="resume-section" id="contact">
                <div class="resume-section-content">
                @include('forms.contact')
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{URL::asset('js/scripts.js')}}"></script>
    </body>
</html>
