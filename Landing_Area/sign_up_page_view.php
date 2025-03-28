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
            <div id="sign_up_form_container" class="rounded-lg shadow-md p-5 w-full max-w-md mx-auto h-min max-h-lg grid grid-cols-3 bg-slate-400/40 text-center">
                <h1 class="font-bold text-3xl col-start-2">SIGN-UP</h1>
                <div class="col-start-2 gap-4 text-left mt-5 transform -translate-x-1/2">
                    <form class="">
                        <input type='hidden' name='page' value='SignUpPage'>
                        <input type='hidden' name='command' value='SignUp'>
                        <label for="username" class="block text-sm font-medium text-black-700">Username</label>
                        <input type="text" name="username" id="username" class="mt-1 p-2 w-64 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="coolExample_Name01">

                        <label for="email" class="block text-sm font-medium text-black-700">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 w-64 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="example@gmail.com">
        
                        <label for="password" class="block text-sm font-medium text-black-700">Password</label>
                        <input type="text" name="password" id="password" class="mt-1 p-2 w-64 border border-gray-300 rounded-md shadow-sm sm:text-sm">

                        <label for="password_confirm" class="block text-sm font-medium text-black-700">Confirm Password</label>
                        <input type="text" name="password_confirm" id="password_confirm" class="mt-1 p-2 w-64 border border-gray-300 rounded-md shadow-sm sm:text-sm">
                        <!--Make a view pass input box later... allow user to view what they type and have default 'password' type instead...  -->
                        <button type="submit" class="mt-4 w-64 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Sign In</button>
                        <br>
                        <label class="block mt-2 text-xs font-medium text-gray-700">Already A User?... 
                            <a href="https://cs.tru.ca/~w3mgulyas/TP_MG/Landing_Area/sign_in_page_view.php" id="signup_link" class="underline text-orange-500 hover:text-orange-700">
                                Sign In
                            </a>
                        </label>
                    </form>
                </div>
            </div>    
        </div>    
    </div>
    
</body>
</html>
