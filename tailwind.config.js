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
      }
    }
  },
  plugins: [],
}
