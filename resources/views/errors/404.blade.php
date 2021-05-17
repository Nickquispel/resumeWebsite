<!DOCTYPE html>
<html lang="en">
    
    @include('partials.head')

    <body id="page-top">

        @include('partials.navigation')
        <div class="container-fluid p-5">
            <div class="resume-section">
                <div class="resume-section-content">
                    <a href="{{route('home')}}"><img src="https://media.giphy.com/media/14uQ3cOFteDaU/giphy.gif" width="100%" style="padding-left:10%;"></a>
                </div>
            </div>
        </div>

        @include('partials.script')
    </body>
</html>
