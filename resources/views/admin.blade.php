<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

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


        @include('partials.script')
    </body>
</html>
