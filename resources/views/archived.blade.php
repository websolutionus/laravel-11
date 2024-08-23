<x-app-layout>
    <x-note.search-input :route="route('notes.archived')" />

    <div class="create_note">
        <i class="far fa-plus"></i>
    </div>

    <x-note.create-modal/>

    <div class="row">
    <x-note.note-card :notes="$notes" />
    </div>
</x-app-layout>
