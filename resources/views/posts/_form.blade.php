@csrf

<label for="title" class="uppercase text-gray-700 dark:text-gray-400 text-xs">Título</label>
<input type="text" name="title" id="title" class="rounded border-gray-200 w-full mb-4 bg-white text-gray-800" value="{{ $post->title }}">

<label for="body" class="uppercase text-gray-700 dark:text-gray-400 text-xs">Contenido</label>
<textarea name="body" id="body" rows="5" class="rounded border-gray-200 w-full mb-4 bg-white text-gray-800">{{ $post->body }}</textarea>

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="text-sm bg-green-800 text-white rounded px-2 py-1 cursor-pointer">
</div>
