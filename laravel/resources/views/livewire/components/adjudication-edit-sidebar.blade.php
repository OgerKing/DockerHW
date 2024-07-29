<div id="adjudication-edit-sidebar">
    <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel"
        wire:ignore.self
        x-data="{
            isOpen: false,
            isEditable: @entangle('isEditable'),
            mapping_zone_west: @entangle('mapping_zone_west'),
            mapping_zone_east: @entangle('mapping_zone_east'),
            mapping_zone_central: @entangle('mapping_zone_central'),
        }"
        @show-offcanvas="isOpen = true"
        @close-offcanvas="isOpen = false"
    >
        <div class="offcanvas-header pb-0">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                Edit Adjudication
            </h5>
            <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
                wire:click="isEditable = false"
            ></button>
        </div>
        <hr />

        <div class="offcanvas-body pt-0">
            <form wire:submit.prevent="submit" class="edit-form">
                <div>
                    <div class="mb-4">
                        <x-wrats-basic-text-input
                            label="Title"
                            id="title"
                            wire:model="title"
                            :disabled="!$isEditable"
                        />
                        @error('title')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="my-4">
                        <x-wrats-basic-text-input
                            class="my-4"
                            label="Adjudication Prefix"
                            id="prefix"
                            wire:model="prefix"
                            :disabled="!$isEditable"
                            maxLength="10"
                        />
                        @error('prefix')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="my-4">
                        <x-wrats-basic-text-input
                            class="my-4"
                            label="Nickname"
                            id="nickname"
                            wire:model="nickname"
                            :disabled="!$isEditable"
                        />
                        @error('nickname')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="my-4">
                        @livewire(
                            'components.wrats-dropdown-select',
                            [
                                'id' => 'status',
                                'label' => 'Status',
                                'selectedItem' => $status,
                                'emitTo' => 'editAdjudicationStatus',
                                'disabled' => '!$isEditable',
                                'options' => [
                                    ['value' => '1', 'label' => 'Status 1'],
                                    ['value' => '2', 'label' => 'Status 2'],
                                    // Add more options as needed
                                ],
                            ]
                        )
                        @error('status')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="my-4">
                        @livewire(
                            'components.wrats-dropdown-select',
                            [
                                'id' => 'bureau',
                                'label' => 'Bureau',
                                'selectedItem' => $bureau,
                                'emitTo' => 'editAdjudicationBureau',
                                'disabled' => '!$isEditable',
                                'options' => [
                                    ['value' => '1', 'label' => 'Bureau 1'],
                                    ['value' => '2', 'label' => 'Bureau 2'],
                                    // Add more options as needed
                                ],
                            ]
                        )
                        @error('bureau')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <!-- <div class="mapping-title">Mapping Zones</div>

                    <div class="d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="inlineCheckbox1"
                                value="West"
                                :checked="mapping_zone_west == 1 ? true : false"
                                wire:model="mapping_zone_west"
                                :disabled="!isEditable ? true : false"
                            />
                            <label
                                class="form-check-label"
                                for="inlineCheckbox1"
                            >
                                West
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="inlineCheckbox2"
                                value="Central"
                                :checked="mapping_zone_central == 1 ? true : false"
                                wire:model="mapping_zone_central"
                                :disabled="!isEditable ? true : false"
                            />
                            <label
                                class="form-check-label"
                                for="inlineCheckbox2"
                            >
                                Central
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="inlineCheckbox3"
                                value="East"
                                :checked="mapping_zone_east == 1 ? true : false"
                                wire:model="mapping_zone_east"
                                :disabled="!isEditable ? true : false"
                            />
                            <label
                                class="form-check-label"
                                for="inlineCheckbox3"
                            >
                                East
                            </label>
                        </div>
                    </div> -->
                    <div class="edit-datum">
                        <div class="datum">Datum</div>
                        <div class="datum-value">{{ $datum }}</div>
                    </div>

                    <x-wrats-basic-text-input
                        label="Adjudication Boundary Link"
                        id="boundary_link"
                        wire:model="boundary_link"
                        :disabled="!$isEditable"
                    />
                    @error('boundary_link')
                        <span class="text-danger inline-error-msg">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div>
                    <hr />
                    <div x-show="!isEditable">
                        <div class="edit-form-message my-3">
                            <i class="bi bi-info-circle"></i>
                            Now you are in view only mode. If you want to do
                            edits clicking on “Edit” button.
                        </div>
                        <button
                            type="button"
                            class="btn btn-outline-success filter-button"
                            x-on:click="$wire.toggleEdit"
                        >
                            Edit Form
                        </button>
                    </div>
                    <div class="row my-2 mx-1" x-show="isEditable">
                        <div class="col-6">
                            <button
                                class="btn btn-grey w-100"
                                type="button"
                                type="reset"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close"
                                wire:click="isEditable = false"
                            >
                                Cancel
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-green">
                                <div class="d-flex align-items-center">
                                    Save Changes
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('show-offcanvas', (event) => {
                var offcanvasElement =
                    document.getElementById('offcanvasExample');
                var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
                offcanvas.show();
            });

            window.addEventListener('close-offcanvas', (event) => {
                var offcanvasElement =
                    document.getElementById('offcanvasExample');
                var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
                offcanvas.hide();
            });
        });
    </script>
@endpush
