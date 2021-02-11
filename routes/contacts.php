<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contacts;

   // CONTACT PAGE
   // PATTERN: /contact
   // CTRL: Contacts
   // ACTION: form
     Route::get('/contact', [Contacts::class, 'form'])->name('contacts.form');
