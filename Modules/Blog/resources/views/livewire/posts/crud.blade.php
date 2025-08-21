<div>
    @if ($index_view === 1)
    
    @include('blog::livewire.posts.index')
    @endif
    @if ($add_edit_view === 1)
    @include('blog::livewire.posts.add_edit')
    @endif
</div>
