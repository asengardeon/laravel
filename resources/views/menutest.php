
<?php
    Menu::make('MyNavBar', function($menu){

      $menu->add('Home');
      $menu->add('About',    'about');
      $menu->add('services', 'services');
      $menu->add('Contact',  'contact');

    });
    echo Menu::get('MyNavBar')->asUl();
?>
