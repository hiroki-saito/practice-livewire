@extends('layouts.app')

@section('contents-meta')
    @parent
    <title>HOME - Practice Livewire</title>
@endsection

@section('contents')
    <h1>Hello Livewire</h1>
    <livewire:counter />
@endsection
