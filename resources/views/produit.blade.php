<x-guest-layout>
    <form method="POST" action="{{route($produit->exists ? 'editproduit': 'ProduitCreate', $produit)}}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nom" :value="old('nom',$produit->nom)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
               
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Prix')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="prix" :value="old('prix',$produit->prix)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('prix')" class="mt-2" />
                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Quantité')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="number"
                            name="quantite"
                            value="{{old('quantite',$produit->quantite)}}"
                            />

            <x-input-error :messages="$errors->get('quantite')" class="mt-2" />
        </div>

        <!-- Categorie -->

        <div class=" mt-4">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Catégorie')}} </label>
            <select  name="categorie_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected >{{__("Selectionner la Catégorie")}}</option>
                @foreach ($categorie as $cat )
                    <option @selected(old('categorie_id', $produit->categorie_id)== $cat->id) value="{{$cat->id}}" >{{$cat->nom}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('categorie_id')" class="mt-2" />

        </div>
  
        <!-- Confirm Password -->
        <div class="mt-4">
                        
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="message" name="commentaire" value="{{old('commentaire')}}" rows="4" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
<x-input-error :messages="$errors->get('commentaire')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class=" focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" href="{{ route('dashboard') }}">
                {{ __('Annuler') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <script src="{{asset('theme.js')}}"></script>
</x-guest-layout>
