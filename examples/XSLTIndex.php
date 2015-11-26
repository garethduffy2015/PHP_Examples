<?php

// Load the XML source
$xml = new DOMDocument;
$xml->load('vendor_2.xml');
$xsl = new DOMDocument;
$xsl->substituteEntities = true; 
$xsl->load('catalogue_2.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

echo $proc->transformToXML($xml);

?>