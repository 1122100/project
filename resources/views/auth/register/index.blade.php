@extends('auth.layouts.main')

@section('container')
<div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
        <div class="text-center mb-12">
            <a href="javascript:void(0)">
                <img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-40 inline-block' />
            </a>
        </div>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="mb-4 text-green-600 text-center">{{ session('success') }}</div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf <!-- Token CSRF wajib ada di form Laravel -->
            <div class="space-y-6">
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Name</label>
                    <input name="name" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Masukkan nama" required />
                </div>
                {{-- <div>
                    <label class="text-gray-800 text-sm mb-2 block">Alamat</label>
                    <input name="alamat" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Masukkan alamat" required />
                </div> --}}
                {{-- <div>
                    <label class="text-gray-800 text-sm mb-2 block">No.Hp</label>
                    <input name="no_hp" type="tel" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Masukkan nomor telp" required />
                </div> --}}
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Email</label>
                    <input name="email" type="email" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter email" required />
                </div>
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Password</label>
                    <input name="password" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter password" required />
                </div>
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter confirm password" required />
                </div>

                <div class="flex items-center">
                    <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                    <label for="remember-me" class="text-gray-800 ml-3 block text-sm">I accept the <a href="/home" class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a></label>
                </div>
            </div>

            <div class="mt-12">
                <button type="submit" class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                    Create an account
                </button>
            </div>
            <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="/login" class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
        </form>
    </div>
</div>
@endsection
