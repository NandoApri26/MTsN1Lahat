module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            padding: {
                '77' : '305px',
                '84.5' : '338px',
            },
            colors: {
                'whip-500' : '#E8C872',
                'celadon-500' : '#1F8A70',
                'celadon-600' : '#167f65',
                'celadon-700' : '#0f6d56',
                'celadon-800' : '#065642',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
