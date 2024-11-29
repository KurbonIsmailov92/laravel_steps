<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="email" class="mt-8">Email</x-form-label>
                        <div class="mt-2">
                            <div>
                                <x-form-input type="email" name="email" id="email" autocomplete="email" :value="old('email')" required/>
                            </div>
                            <div>
                                <x-form-error name="email"/>
                            </div>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password" class="mt-8">Password</x-form-label>
                        <div class="mt-2">
                            <div>
                                <x-form-input type="password" name="password" id="password" autocomplete="password"
                                              required/>
                            </div>
                            <div>
                                <x-form-error name="password"/>
                            </div>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="mt-8 flex items-center justify-end gap-x-6">
            <a href="/jobs" type="button" class="text-sm/6 font-semibold text-red-500">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>


