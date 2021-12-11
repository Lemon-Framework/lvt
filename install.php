<?php

exec("composer install");
exec("npm i");
exec("npx mix");

echo "Installed, start with\n- php lemonade serve -";
