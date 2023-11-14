<div class="p-2 flex flex-col gap-2">
    <div class="text-xl font-semibold">Tambah Data Cabang</div>
    <form method="POST" action="{{ route('cabang.store') }}" wire:submit.prevent="save">
        @csrf

        <!-- nama_cabang Address -->
        <div>
            <x-input-label for="nama_cabang" :value="__('Nama Cabang')" />
            <x-text-input id="nama_cabang" class="block mt-1 w-full" type="text" name="nama_cabang" :value="old('nama_cabang')"
                required autofocus autocomplete="username" wire:model="nama_cabang" />
            <x-input-error :messages="$errors->get('nama_cabang')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Simpan') }}
            </x-primary-button>
            <x-danger-button class="ml-3" onclick="Livewire.dispatch('closeModal')">
                {{ __('Batal') }}
            </x-danger-button>
        </div>
    </form>
</div>
