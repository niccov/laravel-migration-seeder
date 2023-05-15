@extends('layouts/main')

@section('content')


        
@foreach($trains as $singleTrain)

    {{$singleTrain->company}}
    {{$singleTrain->departure_station}}
    {{$singleTrain->arrival_station}}
                
 @endforeach


@endsection