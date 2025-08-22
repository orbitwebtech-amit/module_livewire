<div>
    @if ($index_view === 1)
        @include('modules::Company.views.livewire.company.index')
    @endif
    @if ($add_edit_view === 1)
        @include('modules::Company.views.livewire.company.add_edit')
    @endif
</div>
