@extends('layouts.default')

@section('content')



@include('includes.modals.subscribe')

@include('includes.modals.location', ["cities" => $cities]);

@stop