// Default Laravel bootstrapper, installs axios
import './bootstrap';

// Added: Actual Bootstrap JavaScript dependency
import 'bootstrap';

// Added: Popper.js dependency for popover support in Bootstrap
import '@popperjs/core';

import * as bootstrap from 'bootstrap';

window.bootstrap = bootstrap;

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
