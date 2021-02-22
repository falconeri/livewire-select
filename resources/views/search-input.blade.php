<input
    id="{{ $name }}"
    type="text"
    placeholder="{{ $placeholder }}"
    class="{{ $styles['searchInput'] }}"

    wire:keydown.enter.prevent=""
    wire:model.debounce.300ms="searchTerm"

    x-on:click="isOpen = true"
    x-on:keydown="isOpen = true"

    x-on:keydown.arrow-up="selectUp()"
    x-on:keydown.arrow-down="selectDown()"
    x-on:keydown.enter.prevent="confirmSelection()"
/>
