@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto enim consequatur, facilis perspiciatis porro ab ea quam repudiandae fuga quo.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!--End of header row-->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rerum, veritatis quae dolorum vitae enim? Maiores ad exercitationem odit doloribus cum facere pariatur ipsa eligendi sint nam. Vitae expedita, aperiam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
                
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rerum, veritatis quae dolorum vitae enim? Maiores ad exercitationem odit doloribus cum facere pariatur ipsa eligendi sint nam. Vitae expedita, aperiam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rerum, veritatis quae dolorum vitae enim? Maiores ad exercitationem odit doloribus cum facere pariatur ipsa eligendi sint nam. Vitae expedita, aperiam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rerum, veritatis quae dolorum vitae enim? Maiores ad exercitationem odit doloribus cum facere pariatur ipsa eligendi sint nam. Vitae expedita, aperiam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        </div> <!--End of col-md-8-->

        <div class="col-md-3 col-md-offset-1">
           <h2>Sidebar</h2>
        </div>
    </div>
@endsection

