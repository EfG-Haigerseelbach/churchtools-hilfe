<script>
    $(function() {
        var navSelector = "#toc";
        var $myNav = $(navSelector);
        Toc.init($myNav);
        var tocTexts = [];
        $('#toc > ul').children().each(function(index, element) {
            //element = li
            //children(:first) = a
            var tocText = $(element).children(":first").text();
            tocTexts.push(tocText);
        });
        for (var i = 0; i < tocTexts.length; i++) {
            var tocText = tocTexts[i].trim();
            var elementsTmp = $("h2[data-toc-text='" + tocText + "']");
            if (elementsTmp.length == 0) {
                elementsTmp = $("h2:contains('" + tocText + "')");
            }
            var text = $(elementsTmp[0]).text().trim();
            var id = $(elementsTmp[0]).attr('id');
            elementsTmp.append(` <i class="bi bi-share" data-share-title="${text}" data-share-url="${window.location.pathname}#${id}"></i>`);

            //elementsTmp.css('color','red');
        }
        $('.bi-share').click(shareClickHandler);
        $("body").scrollspy({
            target: navSelector,
        });
        if (window.location.hash.length > 0) {
            var container = $('#content');
            var scrollTo = $(window.location.hash);
            $('#content').children()[0].scrollTo(0, scrollTo.offset().top);
        }
    });
</script>
<div class="col-3" id="toc-outer">
    <div class="sticky-top" style="top: 3em;">
        Inhalt:
        <hr>
        <nav id="toc"><!-- data-toggle="toc"--></nav>
    </div>
</div>