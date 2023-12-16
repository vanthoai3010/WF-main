<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: "Nunito", sans-serif;
            background-color: #e9ecef;
        }
    </style>
</head>
<body class="font-mono bg-gray-100">
<div class="container mx-auto">
    <div class="flex justify-center items-center h-screen px-6">
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <div
                class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                style="background-image: url('https://img.freepik.com/free-vector/background-wine-with-cheese-bread-flat-design_23-2147570514.jpg?w=826&t=st=1702657683~exp=1702658283~hmac=0768f52545151f94697195d276b92245da344255cc04532856252675b2905f02')"
            ></div>
            <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                <div class="px-8 mb-4 text-center">
                    <h3 class="pt-4 mb-2 text-2xl">Forgot Your Password?</h3>
                    <p class="mb-4 text-sm text-gray-700">
                        We get it, stuff happens. Just enter your email address below and we'll send you a
                        link to reset your password!
                    </p>
                </div>
                <form method="POST" action="{{route('forget.password')}}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Enter Email Address..."
                        />
                        @if($errors->has('email'))
                            <p class="text-red-500">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Reset Password
                        </button>
                    </div>
                    <hr class="mb-6 border-t"/>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href=""
                        >
                            Create an Account!
                        </a>
                    </div>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href=""
                        >
                            Already have an account? Login!
                        </a>
                    </div>
                    @if(Session::has('message'))
                        <div class="text-center">
                            <p class="text-red-500">{{ Session::get('message') }}</p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
