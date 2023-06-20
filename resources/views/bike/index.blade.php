<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Bike Index') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="mb-5 text-bold text-xl text-black">
            <i class="fas fa-solid fas fa-motorcycle"></i>{{ __("My Bikes Collection") }}<br>
            <div class="flex justify-end">
                <button class="btn btn-danger">
                    <a href="{{ route('bike.create') }}"><i class="fas fa-solid fas fa-plus"></i><span class="pe-2"></span><i class="fas fa-solid fas fa-motorcycle"></i></a>
                </button>
            </div>
        </div>
        @if (count($bikes)== 0)
        <div class="text-bold text-black text-center">
            {{ __('Empty Garage') }}
        </div>
        @else
        <div class="flex flex-wrap bg-slate-900">
            @foreach($bikes as $bike)
            <a href="/bike/show/{{ $bike->id }}">
            <div class="w-64 rounded-lg hover:text-slate-400 hover:shadow-xl shadow-lg p-4 mx-2 my-2">
                <img src="{{ asset('storage/'.$bike->image) }}" alt="Image" style="width: 250px; height: 250px;">
                <div class="p-4">
                    <p>Plate Number: {{ $bike->platenumber }}</p>
                    <p>Model: {{ $bike->model }}</p>
                    <p>Brand: {{ $bike->brand }}</p>
                    <p>Color: {{ $bike->color }}</p>
                    <p>Date of Purchase: {{ $bike->yearbought }}</p>
                </div>
            </div>
        </a>
            @endforeach
        @endif
    </div>
</x-app-layout>
