<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{ asset('backend/css/2.2 tailwind.min.css') }}">
</head>
<body class="bg-cover bg-center" style="background-image: url('{{ asset('images/back.png') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg p-6 w-full sm:w-96">
            <h1 class="text-2xl font-semibold mb-4">New Account Credentials</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                @if ($errors->has('email') || ($errors->has('password')))
                    <div class="bg-red-100 border border-red-400 text-red-800 px-4 py-4 rounded relative" role="alert">
                        <ul>
                            @if($errors->has('email'))
                                <li>{{($errors->first('email'))}}</li>
                            @endif

                            @if($errors->has('password'))
                                <li>{{($errors->first('password'))}}</li>
                            @endif 
                        </ul>
                    </div>
                @endif
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Full Name" class= "p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                    <input type="password" id="password" name="password" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                </div>
                <div class="mb-4">
                    <label for="confirmPassword" class="block text-gray-700 font-medium">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Register</button>
            </form>
        <p class="mt-4 text-gray-600 text-sm text-center">Already have an account? <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Login</a></p>
        </div>
    </div>
</body>
</html>
