import "./bootstrap";
import "flowbite";

import { initFlowbite } from "flowbite";

// This will inject Flowbite scripts every time a `wire:navigate` is invoked
window.addEventListener("livewire:navigated", () => {
    initFlowbite();
});
