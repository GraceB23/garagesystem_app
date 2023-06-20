<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Car') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex m-2">
            <a href="{{ route('car.index') }}" class="btn btn-secondary text-sm"><i class="fas fa-solid fas fa-arrow-left"></i></a>
        </div>
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="flex justify-center bg-slate-900">
                    <div class="w-64 rounded-lg hover:shadow-xl shadow-lg p-4 mx-2 my-2">
                        <img src="{{ asset('storage/'.$car->image) }}" alt="Image" style="width: 250px; height: 250px;">
                        <div class="p-4">
                            <p>Plate Number: {{ $car->platenumber }}</p>
                            <p>Model: {{ $car->model }}</p>
                            <p>Brand: {{ $car->brand }}</p>
                            <p>Color: {{ $car->color }}</p>
                            <p>Date of Purchase: {{ $car->yearbought }}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('car.edit',$car->id) }}">
                                <button class="btn btn-secondary me-2"><i class="fas fa-pen"></i></button>
                            </a>
                            <form action="{{ route('car.destroy', $car->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-black">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
