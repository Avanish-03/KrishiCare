/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js,php}",
    "../laboratory/*.{html,js,php}",
    './farmer/*.{html,js,php}'],
  theme: {
    extend: {},
  },
  darkMode: "class",
  plugins: []
}
