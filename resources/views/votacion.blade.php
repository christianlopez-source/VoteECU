<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Votación') }}
        </h2>
    </x-slot>

 
    <!---->

    <section>
      <div class="py-6">
        <ul class="flex ml-8">
          <li class="mr-3">
          <a class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white" href="#">Presidente</a>
          </li>
          <li class="mr-3">
            <a class="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-1 px-3" href="#">Vicepresidente</a>
          </li>
          <li class="mr-3">
            <a class="inline-block border border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-1 px-3" href="#">Alcalde</a>
          </li>
        </ul>
      </div>
  
  
    </section>


</x-app-layout>
