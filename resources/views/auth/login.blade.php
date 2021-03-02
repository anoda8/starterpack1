<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="span12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <fieldset>
                        <div id="legend">
                          <legend class="">Login</legend>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label"  for="email">Email</label>
                          <div class="controls">
                            <input type="email" id="email" name="email" placeholder="" :value="old('email')" required autofocus class="form-control">
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Password-->
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="form-control" required autocomplete="current-password" >
                          </div>
                        </div>
                        <br>
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <button type="submit" class="btn btn-success">Login</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> --}}
    </x-jet-authentication-card>
</x-guest-layout>
