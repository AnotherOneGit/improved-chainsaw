<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(auth()->user() == 'admin')

            @else
                @if(auth()->user()->bonus_id != null)
                    Your bonus: {{ auth()->user()->bonus->title }}
                @else
                    <form action="/user/addBonus/{{auth()->user()->id}}" method="post">
                        @method('put')
                        @csrf
                        <button type="submit">Bonus</button>
                    </form>
                @endif
            @endif
        </div>
    </div>
</x-app-layout>
