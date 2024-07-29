<div>
    <div class="adjudication-cards-component" x-data>
        <div class="card-container">
            <div class="adjudication-card">
                <div class="card-section">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <div class="card-title">
                                {{ $adjudication->adjudication_name }}
                            </div>
                            <div class="nickname">
                                {{ $adjudication->adjudication_nickname }}
                            </div>
                        </div>
                        <div class="adjudications-options-dropdown">
                            <button
                                type="button"
                                id="adjudicationsDropdownButton"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                color="transparent"
                                class="btn ac-dropdown form-styles"
                            >
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="adjudicationsDropdown"
                            >
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="#"
                                        wire:click="emitId({{ $adjudication->id }})"
                                        onclick="event.preventDefault(); event.stopPropagation();"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample"
                                        aria-controls="offcanvasExample"
                                    >
                                        <i class="bi bi-pencil"></i>
                                        <span class="li-label">Edit</span>
                                    </a>
                                </li>

                                <li><hr class="dropdown-divider" /></li>

                                <li>
                                    <a
                                        class="dropdown-item"
                                        data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop"
                                    >
                                        <i class="bi bi-pie-chart"></i>
                                        <span class="li-label">
                                            Adjudication Settings
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop"
                                    >
                                        <!-- TODO: custom icon -->
                                        <i class="bi bi-house-door"></i>
                                        <span class="li-label">
                                            Courts & Judges
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop"
                                    >
                                        <!-- TODO: custom icon -->
                                        <i class="bi bi-shuffle"></i>
                                        <span class="li-label">
                                            Split & Combine
                                        </span>
                                    </a>
                                </li>

                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop"
                                    >
                                        <i class="bi bi-globe2"></i>
                                        <span class="li-label">
                                            Global Documents
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExampleChange"
                                        aria-controls="offcanvasExampleChange"
                                    >
                                        <i class="bi bi-clock"></i>
                                        <span class="li-label">Change Log</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span
                        class="badge default rounded-pill mb-2 {{ str_replace(' ', '-', $adjudicationStatus->adjudication_status_description) }}"
                    >
                        <i class="bi bi-circle fs-14"></i>
                        {{ $adjudicationStatus->adjudication_status_description }}
                    </span>

                    <div class="coord-system">
                        Coordinate System:
                        {{ $adjudication->coordinate_system }}
                    </div>
                    <div class="coord-direction mb-2">
                        <span>
                            {{ $adjudication->mapping_zone_west ? 'West -' : '' }}
                        </span>
                        <span>
                            {{ $adjudication->mapping_zone_central ? 'Central -' : '' }}
                        </span>
                        <span>
                            {{ $adjudication->mapping_zone_east ? 'East -' : '' }}
                        </span>

                        {{ $adjudication->datum }}
                    </div>
                    <div class="boundary-link">
                        <a
                            href="{{ Str::startsWith($adjudication->adjudication_boundary_map_link, ['http://', 'https://']) ? $adjudication->adjudication_boundary_map_link : 'http://' . $adjudication->adjudication_boundary_map_link }}"
                            target="_blank"
                        >
                            ADJ Boundary
                            <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
                <hr />
                <div class="card-section">
                    <div class="d-flex align-items-center">
                        <div class="basin-icon">
                            <x-basin-icon />
                        </div>
                        <div class="sections-managed">
                            Has
                            <span class="section-number highlight">
                                3 sections
                            </span>
                            managed by the
                            <span class="management">
                                {{ $bureau->bureau_name }}
                            </span>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="card-section">
                    <div class="subfile-count">
                        <span class="subfile-number highlight">88</span>
                        out of
                        <span class="subfile-out-of highlight">100</span>
                        subfiles are finalized and
                        <span class="open-subfiles highlight">12</span>
                        are still open
                    </div>
                    <div class="mt-3">
                        <div class="progress">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 88%"
                                aria-valuenow="88"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                                88 finalized
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div class="subfile-type-badge">
                            <span class="subfile-badge-number">125</span>
                            Rights
                        </div>
                        <div class="subfile-type-badge">
                            <span class="subfile-badge-number">150</span>
                            POD
                        </div>
                        <div class="subfile-type-badge">
                            <span class="subfile-badge-number">550</span>
                            POU
                        </div>
                        <div class="subfile-type-badge">
                            <span class="subfile-badge-number">2000</span>
                            Persons
                        </div>
                    </div>

                    <div class="watching-subfiles-component my-2">
                        <span class="badge badge-pill">
                            <i class="bi bi-eye"></i>
                            Watching 22 subfiles
                        </span>
                    </div>
                </div>
                <hr />
                <div class="card-section">
                    <div class="court-cases">
                        <div class="cc-title mb-2">Court Cases</div>
                        <div class="courts">
                            <div>
                                <x-court-icon />
                                {{ $courtName }}: 307-SM9703175-A
                            </div>
                            <div>
                                <x-court-icon />
                                {{ $courtName }}: US1990-2157-234
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
