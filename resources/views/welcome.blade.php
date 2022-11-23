<x-app-layout>
    <x-laravel name="{{ Auth::check() ? Auth::user()->name : 'Not Logged In' }}" :title="$title"></x-laravel>
</x-app-layout>
