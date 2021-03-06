<?php   defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems();
?>

<nav class="nav-header top-bar" data-topbar>

	<ul class="title-area">
    <li class="name"></li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>
	
  <section class="top-bar-section">
  	<ul class="right">
  
		<?php   foreach ($navItems as $ni) {
      
      $classes = array();
      if ($ni->isCurrent) {
        $classes[] = 'nav-selected';
      }
      if ($ni->inPath) {
        $classes[] = 'nav-path-selected';
      }
      if ($ni->isFirst) {
        $classes[] = 'first';
      }
      $classes = implode(" ", $classes);
      ?>
      
      <li class="<?php  echo $classes?>">
        <a class="<?php  echo $classes?>" href="<?php  echo $ni->url?>" target="<?php  echo $ni->target?>"><?php  echo $ni->name?></a>
      </li>
    <?php   } ?>
  
  	</ul>
  </section>

</nav>
