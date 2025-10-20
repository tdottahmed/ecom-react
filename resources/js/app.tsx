import "./bootstrap";
import { createInertiaApp } from "@inertiajs/react";
import { createRoot } from "react-dom/client";
import React from "react";

createInertiaApp({
    resolve: (name: string) => {
        const pages = import.meta.glob("./Pages/**/*.tsx", { eager: true });
        const page = pages[`./Pages/${name}.tsx`];
        if (!page) {
            throw new Error(`Page ${name} not found.`);
        }
        return page;
    },
    setup({ el, App, props }) {
        createRoot(el).render(React.createElement(App, props));
    },
});
