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
        accent: '#FAD120',
        grey: '#D9D9D9'
      }
    },
  },
  plugins: [],
}

