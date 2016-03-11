
<script src="https://aframe.io/releases/0.1.2/aframe.min.js"></script>
<a-scene>

  <a-camera
    position="0 1.6 0"></a-camera>
  <a-sky
    src="<?php print file_create_url($content['#items'][0]['uri']); ?>"
    rotation="0 270 0"></a-sky>

</a-scene>