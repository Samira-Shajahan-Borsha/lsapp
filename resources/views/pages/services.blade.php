@extends('layouts.app')

@section('content')
       <h1 class="mt-3">{{ $data['title'] }}</h1>
       @if(count($data['services']) > 0)
              <ul class="list-group">
                     @foreach($data['services'] as $service)
                            <li class="list-group-item">{{ $service }}</li>
                     @endforeach
              </ul>

       @endif
       <p>Services page</p>
@endsection


{{-- @extends('layouts.app')

@section('content')
       <h1>{{ $title }}</h1>
       @if(count($services) > 0)
              <ul class="list-group">
                     @foreach($services as $service)
                            <li class="list-group-item">{{ $service }}</li>
                     @endforeach
              </ul>

       @endif
       <p>Services page</p>
@endsection --}}