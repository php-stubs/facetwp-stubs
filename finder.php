<?php

return \StubsGenerator\Finder::create()
    ->in('source/facetwp')
    // For versions 5.6.0+
    ->notPath('assets/')
    ->notPath('languages/')
    ->notPath('vendor/')
    ->notPath('templates/')
    ->sortByName()
;
