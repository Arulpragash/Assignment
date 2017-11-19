<!doctype html>
<html lang="en">

@include('layouts.header')

<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Google Maps and Places API Demo</a>
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
                    {!! Form::button('Fetch Data',  ["class" => "btn btn-primary", "id" => "fetchData"]) !!}
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

            <section class="row text-center placeholders maps">
                <div class="col-12" >
                    <h4>Directions</h4>
                    <div id="map" class="map" style="height: 100%"></div>
                </div>
            </section>
            <br>
        </main>
    </div>
</div>

@include('layouts.footer')

</body>
</html>
