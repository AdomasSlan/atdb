<?php

echo "<!DOCTYPE html>";
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>";
echo "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>";
echo "<script src=\"Main.js\"></script>";
echo "<link href=\"bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\">";
echo "<html lang=\"en\">";
echo "<head>";
echo     "<meta charset=\"UTF-8\">";
echo     "<title>Login Screen</title>";
echo "</head>";
echo "<body>";
echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">";
echo   "<div class=\"container-fluid\">";
echo     "<a class=\"navbar-brand\" href=\"#\">Navbar</a>";
echo       "<form class=\"d-flex\">";
echo         "<input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">";
echo         "<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>";
echo         "<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"button\" onclick=\"RedirectLogin()\">login</button>";
echo      " </form>";
echo     "</div>";
echo   "</div>";
echo "</nav>";
echo "</body>";
echo "</html>";
