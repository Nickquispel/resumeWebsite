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
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>subject</th>
                    <th>message</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                    <td>{!! $contact->name !!}</td>
                    <td>{!! $contact->email !!}</td>
                    <td>{!! $contact->phone !!}</td>
                    <td>{!! $contact->subject !!}</td>
                    <td>{!! $contact->message !!}</td>
                    <td class="center"><a href="{{route('contact.delete',[$contact->id]) }}" onclick="return confirm('Weet je dit zeker?')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{URL::asset('js/scripts.js')}}"></script>
    </body>
</html>
