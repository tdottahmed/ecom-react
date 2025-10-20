import axios from "axios";

// Basic axios setup for non-Inertia API calls
axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Optional: Only if you need axios available globally
declare global {
    interface Window {
        axios: typeof axios;
    }
}

window.axios = axios;

export {};
