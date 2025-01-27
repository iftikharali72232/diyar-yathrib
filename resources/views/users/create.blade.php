@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Create User</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block font-medium">Name</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label for="email" class="block font-medium">Email</label>
            <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label for="mobile" class="block font-medium">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label for="password" class="block font-medium">Password</label>
            <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
        </div>
    </form>
</div>
@endsection
