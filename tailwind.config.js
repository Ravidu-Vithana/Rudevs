/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./src/script.js",
    "./views/**/*.php"
  ],
  theme: {
    extend: {
      fontFamily:{
        'courgette':'Courgette'
      },
    },
  },
  plugins: [],
}

