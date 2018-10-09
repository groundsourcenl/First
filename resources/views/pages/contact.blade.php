@extends('main')

@section('title', '| Contact')

@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3" >
                <h1>Contact Me</h1>
                <hr>
                                
            <form method="POST" action="{{url('contact')}}" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="email">Email:</label> <br>
                    <input type="email" id="email" name="email" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="subject">Subject:</label> <br>
                    <input type="subject" id="subject" name="subject" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="message">Message:</label> <br>
                    <textarea name="message" id="message" placeholder="Type your message here" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success form-control" value="Submit">
                </div>
            </form>
            </div>
        </div>
@endsection