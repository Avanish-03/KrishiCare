/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dist/*.{html,js,php}",
    "./farmer/*.{html,js,php}",
    "./laboratory/*.{html,js,php}",
    "./admin/*.{html,js,php}"
  ],
  theme: {
    extend: {},
  },
  darkMode: 'class',
  plugins: []
}
