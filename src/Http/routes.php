<?php

$namespace = 'Zhibaihe\Forum\Http\Controllers';

resource('forums', "$namespace\ForumsController");

Route::group(['prefix' => 'admin/'], function() use ($namespace){
    resource('forums', "$namespace\Admin\ForumsController", ['as' => 'admin.']);
});
