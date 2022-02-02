module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
      "./node_modules/@themesberg/flowbite/**/*.js"
  ],
  theme: {
      extend: {
          colors: {
              primary: "hsl(275deg 52% 37%)",
              secondary: "#eae2b7",
              dark: "#003049",
              white: "#fff",
              black: "#000",
              sponsor:"#003049",
          },
      },

      container: {
          center: true,

      }
  },
    plugins: [
        require('@themesberg/flowbite/plugin')
    ]
}
