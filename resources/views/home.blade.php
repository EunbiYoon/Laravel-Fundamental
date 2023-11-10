@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            @foreach ($addresses as $address)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{$address->u->name}}</h4>
                            <p>{{$address->u->email}}</p>
                            <p>{{$address->u}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection