<?php

namespace App\Helpers;

class HtmlHelper
{
    /**
     * Truncate HTML content while preserving tags.
     *
     * @param string $content
     * @param int $length
     * @param string $end
     * @return string
     */
    public static function truncateHtml($content, $length = 100, $end = '...')
    {
        // Load the content into a DOMDocument
        $dom = new \DOMDocument;
        libxml_use_internal_errors(true); // Suppress errors for invalid HTML
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        
        // Create a DOMXPath object
        $xpath = new \DOMXPath($dom);

        // Extract text and truncate
        $text = $xpath->evaluate('string(//body)');
        if (strlen($text) > $length) {
            $text = substr($text, 0, $length) . $end;
        }
        
        // Load truncated text back into a DOMDocument
        $truncatedDom = new \DOMDocument;
        $truncatedDom->loadHTML('<?xml encoding="utf-8" ?>' . $text, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $body = $truncatedDom->getElementsByTagName('body')->item(0);

        // Return the truncated HTML
        return $dom->saveHTML($body);
    }
}
