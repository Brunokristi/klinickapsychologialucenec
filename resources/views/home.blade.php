@extends('layouts.app')

@section('title', 'Klinická Psychológia')

@section('content')
    @include('sections.landing')
    @include('sections.scroll')
    @include('sections.faq')
    @include('sections.contacts')
    @include('sections.profesionals')
    @include('sections.contracts')
@endsection
