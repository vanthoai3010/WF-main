<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-white h-screen flex justify-center items-center">
    <div class="bg-gray-100 rounded shadow-lg p-8 max-w-md w-full">
        <h1 class="text-center text-gray-700 text-2xl font-semibold">Reset Password</h1>
        <form action="{{route('reset.password.post')}}" method="POST">
            @csrf
            <input type="text" name="token" id="" hidden value="{{$token}}">
            <div class="mb-3">
                <label for="" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="" placeholder="Email"
                       class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
                @if($errors->has('email'))
                    <div class="text-red-700 ms-2">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="" class="block text-gray-700">Enter new password</label>
                <input type="password" name="password" id="" placeholder="Password"
                       class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
                @if($errors->has('password'))
                    <div class="text-red-700 ms-2">
                        {{$errors->first('password')}}
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="" class="block text-gray-800">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="" placeholder="Confirm Password"
                               class="border py-2 px-3 w-full focus:outline-none focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out placeholder-gray-400 rounded">
                        @if($errors->has('password_confirmation'))
                            <div class="text-red-700 ms-2">
                                {{$errors->first('password_confirmation')}}
                            </div>
                        @endif
                    </div>
                    <div class="mt-3">
                        <button
                            class="transition delay-150 ease-in-out bg-blue-500 hover:bg-indigo-500 hover:-translate-y-1 hover:scale-105 duration-300 rounded w-full p-3 text-white">
                            Reset Password
                        </button>
                    </div>
                    @if(session()->has('message'))
                        <div class="border border-green-700 bg-green-300 text-green-700 rounded p-3 text-center mt-3">
                            {{session('message')}}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="border border-red-700 bg-red-300 text-red-700 rounded p-3 text-center flex flex-nowrap mt-3">
                            {{session('error')}}
                        </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>

