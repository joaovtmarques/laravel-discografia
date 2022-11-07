const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'background': "url('/public/assets/images/background.png')",
      }),
    },
    fontFamily: {
      'aLight': ['ArabotoLight'],
      'aBold': ['ArabotoBold'],
    }
  },
  plugins: [
    plugin(function ({ addBase }) {
      addBase({
        '@font-face': {
          fontFamily: 'ArabotoLight',
          src: 'url(/public/assets/fonts/Araboto-Light.ttf)'
        },

      })
      addBase({
        '@font-face': {
          fontFamily: 'ArabotoBold',
          src: 'url(/public/assets/fonts/Araboto-Bold.ttf)'
        },
      })
    }),
  ],
};
