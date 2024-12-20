<x-layout>
    <x-slot:heading>
        Create Post
    </x-slot:heading>

    <form method="POST" action="/posts">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Post</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Please fill the form below</p>

                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="title"
                                       id="title"
                                       class="block flex-1 border-2 bg-white py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                       placeholder="Post title"
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
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Post text</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="body"
                                       id="body"
                                       autocomplete="body"
                                       class="block flex-1 border-2 bg-white py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                       placeholder="Some text should be here ..."
                                       required>
                            </div>
                            <div>
                                @error('salary')
                                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/posts" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save Post
                </button>
            </div>
        </div>
    </form>

</x-layout>

