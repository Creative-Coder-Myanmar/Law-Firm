<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
  <title>Law Firm</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="/css/custom.css">

</head>

<body class="relative">
    <x-user.navbar/>
    {{$slot}}
    <x-user.footer/>
</body>

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend : {
                colors : {
                    'primary' : '#4c1d95',
                    'secondary' : '#5b21b6',
                    'warning' : '#ca8a04'
                }
            }
        }
    }
</script>

<script>
  const menuItem = document.getElementById('menuItem');
  function openMenu() {
    menuItem.classList.remove('-right-full');
    menuItem.classList.add('-right-48');
  }

  function closeMenu() {
    menuItem.classList.add('-right-full');
    menuItem.classList.remove('-right-48');
  }
</script>

</html>
