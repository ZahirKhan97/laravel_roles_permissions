<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Permissions / Create
      </h2>
      <a href="{{ route('permissions.index') }}" class="bg-slate-700 text-white rounded-md px-3 py-2">Back</a>
    </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div>
                      <label class="text-lg font-medium" for="name">Name</label>
                      <div class="my-3">
                        <input value="{{ old('name') }}" name="name" placeholder="Enter Name" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                      </div>
                      @error('name')
                       <p class="text-red-400 font-medium mb-2">{{ $message }}</p>
                      @enderror
                      <button class="bg-slate-700 text-white rounded-md px-5 py-3">Submit</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>