const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [
    'index.php',
    'playground/**/*.html'
  ],
  theme: {
    extend: {
      colors: {
        'light-blue': colors.lightBlue,
        cyan: colors.cyan,
      },
    },
  },
  variants: {},
  plugins: [],
}
