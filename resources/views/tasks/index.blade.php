<x-app-layout title="Task Page">
    <x-navbar></x-navbar>
    <x-sidebar>
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content text-center">
              <div class="max-w-md">
                <h1 class="text-5xl font-bold">
                  @foreach ($tasks as $task)
                      <li><a href="">{{ $task->list }}</a></li>
                  @endforeach
                </h1>
              </div>
            </div>
          </div>
    </x-sidebar>
</x-app-layout>