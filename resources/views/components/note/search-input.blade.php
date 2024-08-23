<form action="{{ $route }}" method="GET">
<div class="search_area">
    <input type="text" name="search" placeholder="Search..." value="{{ request()->get('search') }}">
    <i class="far fa-search"></i>
</div>
</form>