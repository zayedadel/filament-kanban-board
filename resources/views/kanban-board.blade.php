<x-filament::page>
    <x-filament::card wire:ignore>
        <div>
            <div>
                @includeIf($beforeKanbanBoardView)
            </div>

            <div class="{{ $styles['wrapper'] }}">
                @foreach($statuses as $status)
                    @include($kanbanView, [
                        'status' => $status
                    ])
                @endforeach
            </div>

            <div>
                @includeIf($afterKanbanBoardView)
            </div>

            <div>
                @includeWhen($sortable, 'filament-kanban-board::sortable', [
                    'sortable' => $sortable,
                    'sortableBetweenStatuses' => $sortableBetweenStatuses,
                ])
            </div>
        </div>
    </x-filament::card>
</x-filament::page>
