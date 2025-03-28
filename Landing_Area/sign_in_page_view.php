<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-screen h-screen grid grid-cols-8 grid-rows-8 gap-4 bg-cyan-300 bg-no-repeat bg-cover" style="background-image: url('https://cdn.pixabay.com/photo/2022/06/13/07/09/techno-7259402_1280.png');">
        <div class="flex justify-center items-center w-screen h-screen">
            <div id="sign_in_form_container" class="rounded-lg shadow-md p-5 w-full max-w-md mx-auto h-min max-h-lg grid grid-cols-3 bg-slate-400/40 text-center">
                <h1 class="font-bold text-3xl col-start-2">SIGN IN</h1>
                <div class="col-start-2 gap-4 text-left mt-5 transform -translate-x-1/2">
                    <form class="">
                        <input type='hidden' name='page' value='SignInPage'>
                        <input type='hidden' name='command' value='SignIn'>
                        <label for="username_email" class="block text-sm font-medium text-black-700">Username Or Email</label>
                        <input type="text" name="username_email" id="username_email" class="mt-1 p-2 w-64 border border-gray-300 rounded-md shadow-sm sm:text-sm">
        
                        <label for="password" class="block text-sm font-medium text-black-700">Password</label>
                        <input type="password" name="password" id="password" class="mt-1 p-2 w-64 border border-gray-300 rounded-md shadow-sm sm:text-sm">
        
                        <button type="submit" class="mt-4 w-64 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Sign In</button>
                        <br>
                        <label class="block mt-2 text-xs font-medium text-gray-700">Not A User?... 
                            <a href="https://cs.tru.ca/~w3mgulyas/TP_MG/Landing_Area/sign_up_page_view.html" id="signup_link" class="underline text-orange-500 hover:text-orange-700">
                                Sign-Up
                            </a>
                        </label>
                    </form>
                </div>
            </div>    
        </div>    
    </div>
    
</body>
</html>
