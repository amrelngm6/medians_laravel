/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/**/*.blade.php',
    './app/Modules/**/views/*.blade.php',
    './app/Modules/**/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/js/**/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

