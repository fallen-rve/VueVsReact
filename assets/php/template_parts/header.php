<?php
// Define variables
$html = '';
$head = '';
$body = '';

// Set up opening html tag
$type = ($this->xhtml) ? 'xhtml' : 'html';
$frameset = false;
if (strpos($content, '<frame ') !== false) { // Then this is a frameset ...
  $frameset = true;
  $this->doctype($type, 'frameset');
} elseif (strpos($this->doctype, 'frameset') !== false) { // If we're here then it's not ...
  $this->doctype($type, 'transitional');
}
$html .= $this->doctype . "\n";
$html .= '<html';
if ($this->xhtml) $html .= ' lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml"';
$html .= '>' . "\n";

// Set up head tags
$head  = '<head>' . "\n";
$head .= $this->meta_tags();
$head .= $this->include_scripts();
$head .= '</head>' . "\n";

// Set up opening body tag
$body = ($frameset) ? '<frameset' : '<body';
if (!empty($this->body)) $body .= ' ' . $this->body;
$body .= '>';

echo $html;
echo $head;
echo $body;
?>
<header>
    <p>Header Text!</p>
</header>
<div>