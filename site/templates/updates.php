<?php 
    $p = new Page();
    $p->template = 'warehouse-function';
    $p->parent = $pages->get('/warehouse/inventory/');
    $p->name = 'bin-inquiry';
    $p->title = 'Bin Inquiry';
    $p->save();
