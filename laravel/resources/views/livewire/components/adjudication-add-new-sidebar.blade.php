<div id="adjudication-add-sidebar">
    <div>
        <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasExampleAdd"
            aria-labelledby="offcanvasExampleLabel"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
        >
            <div class="offcanvas-header pb-0">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    Add New Adjudication
                </h5>
                <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                ></button>
            </div>
            <hr />

            <div class="offcanvas-body">
                <form wire:submit.prevent="submit">
                    <div class="my-4">
                        <x-wrats-basic-text-input
                            label="Title"
                            id="title"
                            wire:model="title"
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
                        />
                        @error('nickname')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="my-4">
                        @livewire(
                            'components.wrats-dropdown-select',
                            [
                                'id' => 'status',
                                'label' => 'Status',
                                'selectedItem' => $status,
                                'emitTo' => 'addAdjudicationStatus',
                                'disabled' => 'true',
                                'options' => [
                                    ['value' => 'Final Decree', 'label' => 'Final Decree'],
                                    ['value' => 'Hydro Survey', 'label' => 'Hydro Survey'],
                                    ['value' => 'Settlement', 'label' => 'Settlement'],
                                ],
                                'wire:model' => 'status',
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
                                'emitTo' => 'addAdjudicationBureau',
                                'disabled' => 'true',
                                'options' => [
                                    ['value' => 'Pecos Bureau', 'label' => 'Pecos Bureau'],
                                    ['value' => 'Other', 'label' => 'Other'],
                                ],
                                'wire:model' => 'bureau',
                            ]
                        )
                        @error('bureau')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <!-- <div class="mapping-title">Mapping Zones</div>
                    <div class="d-flex justify-content-between">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="inlineCheckbox1"
                                value="West"
                                wire:model="mapping_zones"
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
                                wire:model="mapping_zones"
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
                                wire:model="mapping_zones"
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
                        <div class="datum-value">NAD 27</div>
                    </div>
                    <div class="my-4">
                        <x-wrats-basic-text-input
                            label="Adjudication Boundary Link"
                            id="boundary_link"
                            wire:model="boundary_link"
                        />
                        @error('boundary_link')
                            <span class="text-danger inline-error-msg">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <hr />
                    <div class="row my-2 mx-1">
                        <div class="col-6">
                            <button
                                class="btn btn-grey w-100"
                                type="button"
                                type="reset"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close"
                            >
                                Cancel
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-green" type="submit">
                                Add Adjudication
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
