<x-app-layout>
    <x-note.search-input :route="route('notes.trash')" />

    <div class="create_note">
        <i class="far fa-plus"></i>
    </div>

    <x-note.create-modal/>

    <div class="row">
    <x-note.note-card :notes="$notes" :trash="true" />
    </div>
</x-app-layout>
