hljs.initHighlightingOnLoad();

hljs.configure({useBR: false});

$('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
});