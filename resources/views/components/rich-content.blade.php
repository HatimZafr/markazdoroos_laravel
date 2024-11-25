<div class="prose max-w-none rich-content">
    {!! $content !!}
</div>

<style>
.rich-content {
    /* Basic styles for rich content */
    width: 100%;
}

.rich-content img {
    max-width: 100%;
    height: auto;
    margin: 1rem 0;
}

.rich-content table {
    border-collapse: collapse;
    width: 100%;
    margin: 1rem 0;
}

.rich-content table td,
.rich-content table th {
    border: 1px solid #ddd;
    padding: 8px;
}

.rich-content blockquote {
    border-left: 4px solid #ddd;
    padding-left: 1rem;
    margin: 1rem 0;
    color: #666;
}

.rich-content pre {
    background: #f5f5f5;
    padding: 1rem;
    overflow-x: auto;
    border-radius: 4px;
}

.rich-content iframe {
    max-width: 100%;
    margin: 1rem 0;
}
</style>