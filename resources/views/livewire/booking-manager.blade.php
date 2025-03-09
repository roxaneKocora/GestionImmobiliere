<div class="p-4 bg-white rounded shadow">
    @if (session()->has('message'))
        <div class="text-green-500">{{ session('message') }}</div>
    @endif

    <label for="startDate">Date de début :</label>
    <input type="date" wire:model="startDate" class="border p-2">

    <label for="endDate">Date de fin :</label>
    <input type="date" wire:model="endDate" class="border p-2">

    <button wire:click="book" class="bg-primary text-white p-2 rounded mt-2">Réserver</button>
</div>
