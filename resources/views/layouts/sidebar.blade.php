<aside class="sidebar">
    <ul>
        <li><a class="{{ Route::is('dashboard') ? 'active' : "" }}" href="{{ route('dashboard') }}"><i class="far fa-lightbulb"></i> <span>Notes</span></a></li>
        <li><a class="{{ Route::is('notes.archived') ? 'active' : "" }}" href="{{ route('notes.archived') }}"><i class="far fa-box-alt"></i> <span>archive</span></a></li>
        <li><a class="{{ Route::is('notes.trash') ? 'active' : "" }}" href="{{ route('notes.trash') }}"><i class="far fa-trash-alt"></i> <span>bin</span></a></li>
    </ul>
</aside>