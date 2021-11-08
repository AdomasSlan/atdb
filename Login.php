<?php

echo "<!DOCTYPE html>";
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>";
echo "<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>";
echo "<script src=\"Login.js\"></script>";
echo "<link href=\"bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\">";
echo "<html lang=\"en\">";
echo "<head>";
echo     "<meta charset=\"UTF-8\">";
echo     "<title>Login Screen</title>";
echo "</head>";
echo "<body>";
echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">";
echo     "<div class=\"container-fluid\">";
echo        " <a class=\"navbar-brand\" onclick=\"RedirectMain()\">Navbar</a>";
echo        "<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
echo             "<span class=\"navbar-toggler-icon\"></span>";
echo         "</button>";
echo     "</div>";
echo "</nav>";
echo "<div class=\"form-group\" style=\" margin: auto;  width: 20%;\">";
echo    "<label class=\"col-form-label mt-4\" for=\"Username\">Username</label>";
echo     "<input type=\"text\" class=\"form-control\" placeholder=\"Username\" id=\"Username\">";
echo "</div>";
echo "<p></p>";
echo "<div class=\"form-floating\" style=\" margin: auto;  width: 20%;\">";
echo "<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\" style=\"background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;\">";
echo "<label for=\"floatingPassword\">Password</label>";
echo "</div>";
echo "<p></p>";
echo "<div style=\" margin: auto;width: 10%;\">";
echo     "<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"button\" onclick=\"Login()\">Login</button>";
echo     "<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"button\" onclick=\"RegisterRedirect()\">Register</button>";
echo "</div>";
echo "</body>";
echo "</html>";
