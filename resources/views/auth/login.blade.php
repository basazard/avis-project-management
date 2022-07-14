<x-app-layout title="Login Page">
    <div class="flex h-screen">
    <div class="m-auto">
        <img class="object-contain" src="{{ 'images/logo.png' }}" alt="">
        <div class="form-control w-full max-w-lg">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" placeholder="email address" class="input input-bordered w-full max-w-lg" />
        </div>
            
        <div class="form-control w-full max-w-lg">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" placeholder="password" class="input input-bordered w-full max-w-lg" />
            <label class="label">
                <a href="#" class="label-text-alt">Remember me</a>
                <a href="#" class="label-text-alt">Forgot password</a>
            </label>
        </div>


        <button class="mt-2 w-full max-w-lg bg-violet-600 hover:bg-violet-900 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white">Login</button>
    </div>
</div>
</x-app-layout>