<?php

function makeSlug($text) {
   return str_replace(' ', '-', strtolower($text));
}
