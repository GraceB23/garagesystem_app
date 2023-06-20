<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Edit Bike') }}
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
            <form method="post" action="{{ route('bike.update',$bike->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            <div class="container text-center p-3 justify-center">
                <div class="form-group mb-3">
                    <label for="platenumber">Plate Number</label>
                    <input class="" type="text" name="platenumber" placeholder="patter: XX 1234(two letters then space and 4 numbers)" value="{{ $bike->platenumber }}">
                </div>
                <div class="form-group mb-3">
                    <label for="color">Color</label>
                    <input class="" type="text" name="color" value="{{ $bike->color }}">
                </div>
                <div class="form-group mb-3">
                    <label for="yearbought">Date of Purchase</label>
                    <input class="" type="date" name="yearbought" id="yearbought" value="{{ $bike->yearbought }}">
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary text-black">Submit</button>
                </div>
            </div>
            </form>
        </div>
        </div>
</x-app-layout>
