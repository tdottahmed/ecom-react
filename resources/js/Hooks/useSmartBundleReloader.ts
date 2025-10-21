import { useEffect, useRef } from "react";
import { usePage } from "@inertiajs/react";

export function useSmartBundleReloader() {
    const { url, component } = usePage();
    const previousUrlRef = useRef<string>("");
    const reloadCountRef = useRef<number>(0);

    useEffect(() => {
        // Skip initial load or if URL hasn't changed
        if (previousUrlRef.current === url) return;

        previousUrlRef.current = url;
        reloadCountRef.current++;

        console.log(`Reloading bundle (${reloadCountRef.current}) for:`, url);

        const reloadBundle = () => {
            // Store current bundle functions if they exist
            const bundleFunctions = {
                initializeCountdown: window.initializeCountdown,
                initializePreloader: window.initializePreloader,
                initializeAnimations: window.initializeAnimations,
                // Add other functions from your bundle
            };

            // Remove all script tags that match your bundle pattern
            const scripts = document.querySelectorAll(
                'script[src*="app.bundle"]'
            );
            scripts.forEach((script) => script.remove());

            // Clear any intervals/timeouts that might be set by the bundle
            const highestTimeoutId = setTimeout(() => {}, 0);
            for (let i = highestTimeoutId; i >= 0; i--) {
                clearTimeout(i);
                clearInterval(i);
            }

            // Remove any global event listeners that might interfere
            const oldWindowOnLoad = window.onload;
            const oldDocumentReady = document.onreadystatechange;

            window.onload = null;
            document.onreadystatechange = null;

            // Wait for DOM cleanup
            setTimeout(() => {
                // Create new script element
                const script = document.createElement("script");
                script.src = "/frontend/marketpro/js/app.bundle.js";
                script.defer = true;

                script.onload = () => {
                    console.log("✅ Bundle reloaded successfully");

                    // Restore any necessary functions if they weren't recreated
                    Object.entries(bundleFunctions).forEach(([key, fn]) => {
                        if (!window[key as keyof Window] && fn) {
                            window[key as keyof Window] = fn;
                        }
                    });

                    // Trigger any initialization that should happen after reload
                    setTimeout(() => {
                        if (
                            typeof (window as any).initializeAll === "function"
                        ) {
                            (window as any).initializeAll();
                        }
                    }, 500);
                };

                script.onerror = (error) => {
                    console.error("❌ Bundle reload failed:", error);
                    // Restore original handlers on error
                    window.onload = oldWindowOnLoad;
                    document.onreadystatechange = oldDocumentReady;
                };

                document.body.appendChild(script);
            }, 150);
        };

        // Use requestAnimationFrame for smoother reloads
        requestAnimationFrame(() => {
            setTimeout(reloadBundle, 100);
        });
    }, [url, component]);
}
