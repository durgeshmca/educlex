@extends('layouts.appmain')
@section('content')
@if(isset($sections[0]) && $sections[0]->status)
	@include('inc.about')
@endif
@if(isset($sections[1])&& $sections[1]->status)
	@include('inc.features')
@endif
@if(isset($sections[2]) && $sections[2]->status)
	@include('inc.team')
@endif
@if(isset($sections[3]) && $sections[3]->status)
	@include('inc.pricing')
@endif
@if(isset($sections[8]) && $sections[8]->status)
	@include('inc.clients')
@endif
@if(isset($sections[4]) && $sections[4]->status)
	@include('inc.portfolio')
@endif
@if(isset($sections[6]) && $sections[6]->status)
	@include('inc.contact')
@endif
@endsection
