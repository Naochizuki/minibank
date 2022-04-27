module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/view/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'mainFont': ['-apple-system', 'BlinkMacSystemFont', "'Segoe UI'", 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', "'Open Sans'", "'Helvetica Neue'", 'sans-serif'],
        'quicksand': ['Quicksand']
      },
      spacing: {
        '22': '5.5rem',
        '30': '7.5rem',
        '33': '8.25rem',
        '34': '8.5rem',
        '46': '11.5rem',
        '58': '14.5rem',
        '76': '19rem',
        '82': '21.5rem',
        'logout': 'calc(100% - 0.5rem)',
        'total-money-box': 'calc(100% - 1rem)',
        'user-greeting': 'calc(100% - 1rem)',
      },
      fontSize: {
        '2xs': '.650rem'
      },
      keyframes: {
        shake: {
          '0%': { transform: 'rotate(0deg)' },
          '12%': { transform: 'rotate(20deg)' },
          '25%': { transform: 'rotate(0deg)' },
          '37%': { transform: 'rotate(-20deg)' },
          '50%': { transform: 'rotate(0deg)' },
          '62%': { transform: 'rotate(20deg)' },
          '75%': { transform: 'rotate(0deg)' },
          '87%': { transform: 'rotate(-20deg)' },
          '100%': { transform: 'rotate(0deg)' }
        },
        updown: {
          '0%': { transform: 'translateY(0px)' },
          '12%': { transform: 'translateY(0.125rem)' },
          '25%': { transform: 'translateY(0px)' },
          '37%': { transform: 'translateY(-0.125rem)' },
          '50%': { transform: 'translateY(0px)' },
          '62%': { transform: 'translateY(0.125rem)' },
          '75%': { transform: 'translateY(0px)' },
          '87%': { transform: 'translateY(-0.125rem)' },
          '100%': { transform: 'translateY(0px)' }
        },
        halfspin: {
          to: { transform: 'rotate(180deg)' }
        }
      },
      animation: {
        'shake': 'shake .4s linear',
        'halfspin': 'halfspin .4s linear',
        'updown': 'updown .4s linear'
      }
    },
  },
  plugins: [],
}
