<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Votación') }}
        </h2>
    </x-slot>


    <!--Filtro de candidatos-->

    <section>

    <div id="candidatos">

    </div>

    </section>


    <section>
{{-- @foreach ($candidatos as $candidato) --}}
<div id="cartas" class="grid grid-cols-3">
{{-- {{$candidato->nombre}} --}}
</div>
{{-- @endforeach --}}


    </section>




</x-app-layout>
