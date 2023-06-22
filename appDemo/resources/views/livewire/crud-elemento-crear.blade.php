<div>
    <x-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3>Registro nuevo Elemento</h3>
        </x-slot>
        <x-slot name="content">
            <form>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Número de Serie" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.numserie" class="w-full" />
                        <x-input-error for="elemento.numserie" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Cantidad" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.cantidad" class="w-full" />
                        <x-input-error for="elemento.cantidad" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Baja" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.baja" class="w-full" />
                        <x-input-error for="elemento.baja" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Fecha de Baja" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.fechabaja" class="w-full" />
                        <x-input-error for="elemento.fechabaja" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Motivo de Baja" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.motivobaja" class="w-full" />
                        <x-input-error for="elemento.motivobaja" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Motivo de Baja" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.codigobarra" class="w-full" />
                        <x-input-error for="elemento.codigobarra" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="ID de Ubicación" class="font-bold" />
                        <x-input type="text" wire:model.defer="elemento.ubicacions_id" class="w-full" />
                        <x-input-error for="elemento.ubicacions_id" />
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('isOpen', false)" class="mx-2">Cancelar</x-secondary-button>
            <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
                Registrar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div
