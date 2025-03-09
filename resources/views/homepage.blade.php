@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row row-cols-4">
            <div class="col">
                @foreach ($movies as $movie)
                    <div class="col-2">
                        <x-card>
                            <x-slot:title>{{ $movie['title'] }}</x-slot:title>
                            <x-slot:original_title>{{ $movie['original_title'] }}</x-slot:original_title>
                            <x-slot:nationality>{{ $movie['nationality'] }}</x-slot:nationality>
                            <x-slot:date>{{ $movie['date'] }}</x-slot:date>
                            <x-slot:vote>{{ $movie['vote'] }}</x-slot:vote>


                        </x-card>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
