/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            "laracasts": "rgba(36, 63, 80, 0.63)"
        }
    },
  },
  plugins: [],
}

