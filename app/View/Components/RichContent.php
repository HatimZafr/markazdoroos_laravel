<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;
use Mews\Purifier\Facades\Purifier;
use League\CommonMark\GithubFlavoredMarkdownConverter;

class RichContentProcessor extends Component
{
    public $content;
    
    public function __construct($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        // Clean the HTML first using HTML Purifier
        $cleanHtml = Purifier::clean($this->content);
        
        return view('components.rich-content', [
            'content' => new HtmlString($cleanHtml)
        ]);
    }
}