<?php
if(get_post_meta(get_the_ID(), 'ts_theme_featuredimage', true) === 'active')
the_post_thumbnail();