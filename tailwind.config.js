/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.jpg"
  ],
  theme: {
    extend: {
      colors: {
        'regal-blue': '#243c5a',
        'light-black': '#31363F',
        'light-gray': '#222831',
        'violet': '#7f5af0',
        'button-vio': '#76ABAE',
        'secondary': '#72757e',
        'second-back': '#242629',
        'blanc': '#EEEEEE'
      },
      backgroundImage: {
        'back-code': "url('/img/background.png')",
      },
    },
  },
  plugins: [],
}

