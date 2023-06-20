<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="mb-5 text-bold text-xl text-center text-black">
            {{ __('Garage Items') }}  <i class="fas fa-solid fas fa-warehouse"></i><br>
        </div>
        <div class="flex justify-center">
            <div class="me-3 border-s-orange-100 bg-slate-500 p-5 hover:shadow-xl hover:text-white">
                <a href="{{ route('bike.index') }}" class="text-xl btn btn-secondary"><i class="fas fa-solid fas fa-motorcycle"></i> Bikes</a>
            </div>
            <div class="me-3 border-s-orange-100 bg-slate-500 p-5 hover:shadow-xl hover:text-white">
            <a href="{{ route('car.index') }}" class="text-xl btn btn-secondary"><i class="fas fa-solid fas fa-car"></i> Cars</a>
            </div>
        </div>
    </div>
</x-app-layout>
