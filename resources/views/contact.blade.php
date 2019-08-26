@extends('layouts.app')

@section('content')
    <h1>Contact</h1>

    <div class="container">
        <div class="row">

                 <form action="contact/submit" method="post">
                     @csrf

                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                     </div>

                     <div class="form-group">
                         <label for="email">E-mail</label>
                         <input type="text" name="email" id="email" class="form-control" placeholder="Example@email.com">
                     </div>

                     <div class="form-group">
                         <label for="phone">Message</label>
                         <input type="text" name="message" id="message" class="form-control" placeholder="Enter message">

                     </div>

                     <div class="form-group float-right">
                         <button class="btn btn-primary">Submit</button>
                     </div>

                   </form>
        </div>
    </div>

@endsection