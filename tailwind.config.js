import defaultTheme from "tailwindcss/defaultTheme";
export default {
    content: ["./resources/js/**/*.{js,jsx,ts,tsx}"],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: "#4f46e5",
                    DEFAULT: "#3b82f6",
                    dark: "#1e40af",
                },
            },
        },
    },
};
