@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        Edit Profile
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </header>

                <form method="post" action="{{ route('profile.update') }}" class="mt-10 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="flex items-center gap-x-3">
                        <input class="hidden" type="file" name="avatar" id="avatar" accept="image/*" />
                        <img id="avatar-preview" class="h-32 w-32 rounded-full border-2 border-gray-800 object-cover"
                            src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/user.jpeg') }}"
                            alt="{{ $user->name }}" />

                        <label for="avatar">
                            <div
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                Change
                            </div>
                        </label>
                    </div>
                    @if ($errors->has('avatar'))
                        <div class="text-sm text-red-600">{{ $errors->first('avatar') }}</div>
                    @endif

                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <input type="text"
                            class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6"
                            id="name" name="name" value="{{ $user->name }}" required autofocus
                            autocomplete="name" />
                        @if ($errors->get('name'))
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->get('name') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            address</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                            value="{{ $user->email }}" required
                            class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                        @if ($errors->get('email'))
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->get('email') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <input type="password" name="password" id="password" autocomplete="password"
                            class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" placeholder="********" />
                        @if ($errors->get('password'))
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->get('password') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div>
                        <label for="bio" class="block text-sm font-medium leading-6 text-gray-900">Bio</label>
                        <textarea id="bio" name="bio"
                            class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6"
                            rows="3">{{ old('bio', $user->bio) }}</textarea>
                        @if ($errors->get('bio'))
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->get('bio') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit"
                            class="rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                            Update Profile
                        </button>

                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('avatar').addEventListener('change', function (event) {
            const input = event.target;
            const id = input.id;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#' + id + '-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        });

    </script>
@endpush
