<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Imagen de perfil') }}
        </h2>
        <img src="{{ asset(Auth::user()->profile_image) }}" alt="Profile Image" style="border-radius: 50%; width: 50px; height: 50px; margin-right: 10px;">
        <span style="font-size: 20px;">{{ Auth::user()->name }}</span>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Actualiza tu imagen de perfil") }}
        </p>
    </header>
    <div class="flex items-center gap-4">
        <form action="/image-upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </form>
    </div>
</section>
