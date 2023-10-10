<x-layout>

    <x-slot name="title">Movie List</x-slot>

    <h1>Movie List</h1>


    <x-cardRow>

        @foreach ($movies as $movie)
        <x-card movieTitle="{{$movie['movieTitle']}}" 
                movieDescription="{{$movie['movieDescription']}}" 
                movieDirector="{{$movie['movieDirector']}}" 
                movieGenre="{{$movie['movieGenre']}}" 
                released_at="{{$movie['released_at']}}" 
                movieImgsrc="{{$movie['movieImgsrc']}}">
        </x-card>
        @endforeach

    </x-cardRow>


</x-layout>