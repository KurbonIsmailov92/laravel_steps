<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <div>
                                <x-form-input type="first_name" name="first_name" id="first_name"
                                              autocomplete="first_name" required/>
                            </div>
                            <div>
                                <x-form-error name="first_name"/>
                            </div>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name" class="mt-8">Last Name</x-form-label>
                        <div class="mt-2">
                            <div>
                                <x-form-input type="text" name="last_name" id="last_name" autocomplete="last_name"
                                              required/>
                            </div>
                            <div>
                                <x-form-error name="last_name"/>
                            </div>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email" class="mt-8">Email</x-form-label>
                        <div class="mt-2">
                            <div>
                                <x-form-input type="email" name="email" id="email" autocomplete="email"
                                              required/>
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

                    <x-form-field>
                        <x-form-label for="password_confirmation" class="mt-8">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <div>
                                <x-form-input type="password" name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation"
                                              required/>
                            </div>
                            <div>
                                <x-form-error name="password_confirmation"/>
                            </div>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
        <div class="mt-8 flex items-center justify-end gap-x-6">
            <a href="/jobs" type="button" class="text-sm/6 font-semibold text-red-500">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>


