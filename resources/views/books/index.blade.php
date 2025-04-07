@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">ISBN</th>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Author</th>
                    <th class="px-4 py-2 text-left">Published</th>
                    <th class="px-4 py-2 text-left">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $book->isbn }}</td>
                    <td class="px-4 py-2">{{ $book->title }}</td>
                    <td class="px-4 py-2">{{ $book->author }}</td>
                    <td class="px-4 py-2">{{ $book->date_published }}</td>
                    <td class="px-4 py-2">{{ $book->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
