<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <?php

      use Core\Helper;

      $customer = Helper::getCustomer();


      foreach ($this->get('menuCollection') as $item) :
      ?>
        <li>
          <?= \Core\Url::getLink($item['path'], $item['name']); ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if ($customer) : ?>
        <li> <a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $customer['first_name'] . " " . $customer["last_name"] ?> </a> </li>
        <li><a href="<?php echo $this->getBP(); ?>/customer/logout/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      <?php else : ?>
        <li><a href="<?php echo $this->getBP(); ?>/customer/register/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo $this->getBP(); ?>/customer/login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php endif ?>

    </ul>
  </div>
</nav>