<?php

return \StubsGenerator\Finder::create()
    ->in('source/facetwp')
    ->notPath('assets/')
    ->notPath('languages/')
    ->notPath('vendor/')
    ->notPath('templates/')
    ->sortByName()
;
