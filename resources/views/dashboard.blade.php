<x-app-layout>
    <x-slot name="header">
      <div class="relative">
      <div class="py-3">
        <h2 class="font-semibold text-xl text-gray-800">
            Welcome <b>{{ Auth::user()->name }}</b>
        </h2>
      </div>
      <div class="absolute top-0 right-0">
        <button onclick="" class="px-12 text-white py-2 px-2 bg-green-500 rounded-lg border-2 border-white"><a href="/AddBook">Add Book</a></button>
      </div>
    </div>
    </x-slot>

    <div class="py-12">

        <div class="bg-white max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">

            <div class="bg-white py-2 px-2">

              <h2 class=" font-semibold text-xl text-gray-800">
                  Quick Statistics

              </h2>

              <div class="bg-white flex justify-center sm:rounded-lg py-4 px-2">
                @livewire('dashboard')
            </div>
            </div>
        </div>

        <div class="bg-white max-w-5xl mx-auto sm:px-6 lg:px-4 py-4">

            <div class="bg-white py-2 px-2">
              <h2 class=" font-semibold text-base text-gray-400">
                  Universiti Islam Antarabangsa Malaysia
              </h2>
              <h2 class=" font-bold text-xl text-gray-800">
                 Library Management System 
              </h2>
              <p class="flex justify-left font-semibold text-base text-gray-800">
               Muhammad Aiman Hakim Bin Abdull Mutalib
               <br>
               Antor
               <br>
               Memadou
              </p>
              <p class="flex justify-left font-semibold text-base text-gray-800 ">
              Faris Irfan bin Rosemanzalaini
              </p>
              
            </div>
        </div>

    </div>
</x-app-layout>
