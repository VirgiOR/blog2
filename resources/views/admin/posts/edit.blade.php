<x-layouts.app>


    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">
            Dashboard
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item :href="route('admin.posts.index')">
            Posts
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item>
            Editar
        </flux:breadcrumbs.item>

    </flux:breadcrumbs>



    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="relative mb-2 ">

            <img class="w-full aspect-video object-cover object-center"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANAAAACUCAMAAADVs1c8AAAAV1BMVEXl5eXY2Njd3d3o6OiamppoaGh/f3+NjY1aWlrBwcGIiIjFxcXT09Ps7OxdXV3h4eFOTk7Nzc1UVFSgoKB1dXVubm61tbWnp6djY2NJSUmvr6+7u7uTk5PKTSsNAAAE/0lEQVR4nO2biZKkKBBANVFE5RC8KPT/v3MTtK6e2d6NrthRN/JF9JSDEOErkuSIMssIgiAIgiAIgiAIgiAIgiAIgiAIgiCIPw37lKMFvrIUnzHn51IylSg/wfv6ZEINN/nPgVrU6miHNz4Vak8oBCREQn8QEvpfCYEBeM+J1xaCeuV8lq9K1xZqupFzrcNLg0sLrWKWAG0jlmeLCwvBJOZYE+wwXLaH3u6sHu5m9ePGpYSgDS9KkjdbNgArwhWFQM7CNfZx8+pCUDdincvxGV2r3z7NrNvLCQHMvsSAqwc/34sWXRiIHTTy17C8hBDIBqMtXuSNq+Re2LsVy6ZB2IulbZDB+wB7Tgu+bO9GXozeDfXFJlawjW7ax/oGaq5xQt2efi6KSb7Wv4AQTDhuXh8aZCWq3Qj2uUkWwVxDyORrN9ivY2p2o31ZkhrLOzGbSwgt2s+/HpoYO7j5OckGN7aFK84vBLYQvP7dtIRpT69bcgNZiAovC93nJz3G2g3AYEYu5N+uG/xQm9glXPQpkReigDML4Xcuhvq3Nhv1iLk8m7yfduceo86cNuRwUYDf/Hc7CZxkRVU4/phWIRqdVAgHhh4W+H5nBHnv3WtMwhzOKoSTZ2G/10kGS3iThpNmOdn7ccn/2WebWd8Lzihkal99O3q+MzyjEOT/ItquJfRzSOg/h4RI6A9DQucXauDnnHK17dfq56z8bEJZaPhHVPJcvyTJzAcRFzFHCxAEQRAEQRCXRyn25VPdL5/ljxKm1L34sVlgqcnzSh26jTDTtC2Tl5Djv8pMa7PW2dNoCjkzS4D0HwZYPd2rQ7tXUBCbTEZlrA0TEqYjF96gb0V6wuEWfxm/6JsT7ja2dyPmu5rBeKu2r73vdNz2MFnehvRqAMvC1sQvmSpuXdfdbh4OkomYUbv0G3/ccbJs0qKZp5kLfd9+slG3DAbhWixg7SjGJBS08EsSmjvdhCU0bjWqdzy+BdEf2UMotD1j3ELLoSsAx4us3LBH3V1IcGC4TRc6VTaV4GiA8Wa17oEpBhiUqu/6w3etZvRaVPj0USi4Mo0QZUe3bF20C2mhZ4b3dRLCiBNWlBhzbHXcbKHHotD8nlGOECr94l2fhBjvwt4vhVjfhPzsfAtOF2MZheauYOstKJYPIpkbJAqt1to2P9AHhTQE51EGhQa3vzKjZte8CYl8dU3jKpuEME5btQgMSzlqixWbcRy5xDEknOtuh8YdCsmscQNsQsveQ7Or3oUkRpkubV6iEGs7HFH50Em1CTGuvSgtCg1VVTXTgT5JKA6ZeK7Gqq7fk1vlinchq4LGESKjkKpcyTkvsY7hYsaKuZR+tDEpmBR8BxKFmFq89pipJ6Eheqi6dO17lrPMNCXmPxRSudZaCIHpEWKnxNygsl3o8LfxklDGeqF1zXLecYll7XAfQi9CzOJfEgqukREuJpWPjlvMcPkmVKQjuhMIGe5QKGvHblz7ynfD/Rj0KZSxlK9LmUWRCIoZ7MzYpOA4m6nCjekQ9cg0B6WIz66sjysFZhtxw7XL+jjWZaO4C2VpyVPmrS8hTT259i12XBWbuCEufRxGonBCHueTZdKal0+W2Sks8mVxmsrvlTKDV2B3XSYtxCYS16MtTq8st4lDfbLHEH5uEN7m+nT/Oc7jFfvS9tnkpK/oEgRBEARBEARBEARBEARBEARBEARBEMRR/AWYfF3PWNGG3gAAAABJRU5ErkJggg==" >

            <div class="absolute top-8  right-8">
                <label class="bg-white px-4 py-2 rounded-lg cursor-pointer">
                    Cambiar imagen
                    <input class="hidden" type="file" name="image" accept="image/*">

                </label>

            </div>
        </div>

        <div class="card" class="space-y4 p-4">

            <flux:input label="Título" name="title" value="{{ old('title', $post->title) }}">
            </flux:input>
            <flux:input label="Slug" id="slug" name="slug" value="{{ old('slug', $post->slug) }}"
                placeholder="Escriba el slug del Post"></flux:input>
            <flux:select label="Categoría" name="category_id">
                @foreach ($categories as $category)
                    <flux:select.option value="{{ $category->id }}"
                        :selected="$category->id == old('category_id', $post->category_id)">
                        {{ $category->name }}
                    </flux:select.option>
                @endforeach
            </flux:select>


            <flux:textarea label="Resumen" name="excerpt">{{ old('excerpt', $post->excerpt) }}</flux:textarea>
            <flux:textarea label="Contenido" name="content" rows="16">{{ old('content', $post->content) }}
            </flux:textarea>

            <div class="flex space-x-3 " >
                <label>
                    <input type="radio" name="is_published" value="0" @checked (old('is_published', $post->is_published) == 0)>
                    <span class="ml-1">No publicado</span>
                </label>
                <label class="items-center">
                    <input type="radio" name="is_published" value="1" @checked(old('is_published', $post->is_published)  == 1)>
                    <span class="ml-1">Publicado</span>
                </label>
            </div>


            <div class="flex justify-end  mt-4">

                <flux:button variant="primary" type="submit">
                    Enviar

                </flux:button>
            </div>

        </div>


    </form>

</x-layouts.app>
