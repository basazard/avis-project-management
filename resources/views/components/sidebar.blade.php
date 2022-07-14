<div class="drawer">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        {{-- konten --}}
      {{ $slot }}
    </div>
    
    <div class="drawer-side">
      <label for="my-drawer" class="drawer-overlay"></label>
      <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
        <!-- Sidebar content here -->
        @foreach ($navigations as $name => $url)
            <li><a href="{{ $url }}">{{ $name }}</a></li>
        @endforeach
      </ul>
    </div>