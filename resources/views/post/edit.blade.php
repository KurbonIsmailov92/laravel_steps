<x-layout>
    <x-slot:heading>
        Edit Post {{$post->title}}
    </x-slot:heading>

    <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="title" id="title"
                                       class="block flex-1 border-2 bg-white py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                       placeholder="Story of my life"
                                       value="{{$post->title}}"
                                       required>
                            </div>
                            <div>
                                @error('title')
                                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="body"
                                       id="body"
                                       autocomplete="body"
                                       class="block flex-1 border-2 bg-white py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                       placeholder="Some text here..."
                                       value="{{$post->body}}"
                                       required>
                            </div>
                        </div>
                            <div>
                                @error('body')
                                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">

                <div class="flex items-center">
                    <button form="delete-form" class="text-red-500 text-sm font-bold">Delete Post</button>
                </div>

                <div class="flex items-center gap-x-6">
                    <a href="/posts/{{$post->id}}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <div>
                        <button type="submit"
                                class='rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150'>Update
                        </button>
                    </div>
                </div>
            </div>
    </form>
    <form method="POST" action="/posts/{{$post->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>

