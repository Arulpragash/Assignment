<!doctype html>
<html lang="en">

@include('layouts.header')

<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Google Maps and Places</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>

<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-sm-12 col-md-12">
            <br>
            <section class="row text-center placeholders">
                <div class="col-12 ">
                    <h4>Insert Locations in the textboxes below</h4>
                </div>
                <div class="container">
                    {{ Form::open() }}
                    <form method="POST" action="/locations">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col">
                                {!! Form::text('origin', null, ['class' => 'form-control', "id" => "origin", "name" => "origin", "placeholder" => "From"]) !!}
                            </div>
                            <div class="col">
                                {!! Form::text('destination', null, ['class' => 'form-control', "id" => "destination", "name" => "destination", "placeholder" => "To"]) !!}
                            </div>
                        </div>
                        <br>
                    {!! Form::button('Fetch Distance',  ["class" => "btn btn-primary", "id" => "fetchData"]) !!}
                    {{--@include('errors')--}}
                    {{ Form::close() }}
                </div>
            </section>

            <section class="row text-center placeholders">
                <div class="col-12">
                    <h4>Results</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Distance</th>
                                <th>Duration</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

@include('layouts.footer')

</body>
</html>
