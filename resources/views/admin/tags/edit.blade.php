<x-layouts.app>


<flux:breadcrumbs class="mb-4">
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item :href="route('admin.tags.index')">
                Categorias
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item>
           Editar
            </flux:breadcrumbs.item>

        </flux:breadcrumbs>
            

        <div class="card">

            <form action="{{route('admin.tags.update',$tag)}}" method="POST">
                @csrf
                @method('PUT')
               
                    <flux:input label="Nombre" name="name"    value="{{old('name', $tag ->name)}}" placeholder="Escriba el nombre de la etiqueta" ></flux:input>

               <div class="flex justify-end  mt-4">

                <flux:button variant="primary" type="submit">
                    Enviar
                
                    </flux:button>
               


               </div>
                    
            </form>


        </div>


</x-layouts.app>