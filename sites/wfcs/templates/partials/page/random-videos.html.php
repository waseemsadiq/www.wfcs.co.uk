---
class:
folder:
shuffle:
limit:
layout:
columns:
---
<? if(isset($class)): ?>
  <? $class = 'w-auto min-w-full min-h-full max-w-none '.implode(' ', (array) $class); ?>
<? else : ?>
  <? $class = 'w-auto min-w-full min-h-full max-w-none' ?>
<? endif ?>
<? /* TODO: Use static asset routing when available */ ?>
<? if(isset($folder)):

  $folder = str_replace('videos://', PAGES_SITE_ROOT.'/videos/', $folder);

  if(is_dir($folder)):
    $videos = glob($folder.'/*.{mp4}', GLOB_BRACE);
    //var_dump($videos);exit;
    array_walk($videos, function(&$value, $key) {
      $value = str_replace(PAGES_SITE_ROOT.'/videos/', 'videos://', $value);
  		//var_dump($value);exit;
    });

  endif;

endif ?>

<? /* Shuffle the videos */ ?>
<? if(isset($shuffle) && $shuffle):
  shuffle($videos);
endif ?>

<? $videos = ($limit) ? array_slice((array)$videos, 0, $limit) : (array)$videos ; ?>

<? foreach($videos as $i => $video): ?>
    <video autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto" class="<?= $class ?>">
        <source src="<?= $video ?>" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

<? endforeach; ?>