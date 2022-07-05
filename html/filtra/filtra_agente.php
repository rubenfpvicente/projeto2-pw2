<?php

$agente = Agente::search([$_POST['campo']],['like'],['%'.$_POST['valor'].'%']);