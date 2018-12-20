@extends('layouts.my_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>My Panel</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<h4>Сongratulations</h4>
                   <h5> You are logged in! </h5><br>
                    <h5>Some information</h5>
                    <p style = " font-size: 15px">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.The source code of Laravel is hosted on GitHub and licensed under the terms of MIT License.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
