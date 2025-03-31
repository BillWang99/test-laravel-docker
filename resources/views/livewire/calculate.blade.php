<div>
    {{-- The whole world belongs to you. --}}
    <label>inputA</label>
    <input type="number" wire:model="inputA"><br>
    <label>inputB</label>
    <input type="number" wire:model="inputB"><br><button wire:click="countInput">加法計算</button>
    <p>{{ $answer }}</p>
</div>
