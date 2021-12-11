let mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .vue({ version: 2 })
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
    ]);
