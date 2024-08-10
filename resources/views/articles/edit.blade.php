<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Articles / Edit
      </h2>
      <a href="{{ route('articles.index') }}" class="bg-slate-700 text-white rounded-md px-3 py-2">Back</a>
    </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <form action="{{ route('articles.update',$article->id) }}" method="POST">
                    @csrf
                    <div>
                      <label class="text-lg font-medium" for="title">Title</label>
                      <div class="my-3">
                        <input value="{{ old('title', $article->title) }}" id="title" name="title" placeholder="Title" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                      </div>
                      @error('title')
                       <p class="text-red-400 font-medium mb-2">{{ $message }}</p>
                      @enderror
                      <label class="text-lg font-medium" for="text">Content</label>
                      <div class="my-3">
                        <textarea name="text" id="text" placeholder="Content" class="border-gray-300 shadow-sm w-1/2 rounded-lg" cols="30" rows="10">{{ old('text', $article->text) }}</textarea>
                      </div>

                      <label class="text-lg font-medium" for="author">Author</label>
                      <div class="my-3">
                        <input value="{{ old('author', $article->author) }}" id="author" name="author" placeholder="Author" type="text" class="border-gray-300 shadow-sm w-1/2 rounded-lg">
                      </div>
                      @error('author')
                       <p class="text-red-400 font-medium mb-2">{{ $message }}</p>
                      @enderror
                      <button class="bg-slate-700 text-white rounded-md px-5 py-3">Update</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>